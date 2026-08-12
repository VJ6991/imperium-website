<?php

use Carbon\Carbon;

class Helper
{

    public static function dateFormat($date, $formate = 'F jS, Y')
    {
        if ($date) {
            $dt = new DateTime($date);

            return $dt->format($formate); // 10/27/2014
        }
    }

    public static function escape($string)
    {
        return htmlentities($string, ENT_QUOTES, 'UTF-8');
    }

    public static function currency($value, $decimals = 2)
    {
        return "$" . number_format($value, $decimals);
    }

    public static function humanize($datetime)
    {
        $created = new Carbon($datetime);
        $now = Carbon::now();
        return ($created->diff($now)->days < 1)
            ? 'today'
            : $created->diffForHumans($now);
    }

    static function limit_words($string, $word_limit)
    {
        $endStr = '';
        $words = explode(" ", $string);
        if(count($words)>$word_limit){
            $endStr = '...';
        }
        return implode(" ", array_splice($words, 0, $word_limit)).$endStr;
    }

    /**
     * Render the per-page <head> SEO block.
     *
     * Emits title, description, canonical, Open Graph, Twitter Card and any JSON-LD
     * the page carries. $meta normally comes straight from Seo::page('<slug>').
     *
     * Two things here are deliberate and easy to break by "tidying":
     *   - The title is printed EXACTLY as supplied. It is not suffixed with
     *     SITE_NAME, because seo/pages.php already writes the brand into every
     *     title; appending would produce "... | Imperium Software | Imperium".
     *   - Every value is escaped. Descriptions contain apostrophes and ampersands,
     *     which silently truncated the old unescaped attributes.
     */
    public static function setMetaTags($meta = Array())
    {
        if (!count($meta)) {
            return '';
        }

        $e = function ($v) {
            return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8');
        };

        $out = '';

        if (!empty($meta['title'])) {
            $out .= '<title>' . $e($meta['title']) . '</title>';
            $out .= '<meta property="og:title" content="' . $e($meta['title']) . '">';
            $out .= '<meta name="twitter:title" content="' . $e($meta['title']) . '">';
        }

        if (!empty($meta['description'])) {
            $out .= '<meta name="description" content="' . $e($meta['description']) . '">';
            $out .= '<meta property="og:description" content="' . $e($meta['description']) . '">';
            $out .= '<meta name="twitter:description" content="' . $e($meta['description']) . '">';
        }

        // Canonical — the single most important tag for a site reachable at both
        // www and non-www. Falls back to 'url' for any caller that predates Seo::page().
        $canonical = !empty($meta['canonical']) ? $meta['canonical'] : (!empty($meta['url']) ? $meta['url'] : '');
        if ($canonical !== '') {
            $out .= '<link rel="canonical" href="' . $e($canonical) . '">';
            $out .= '<meta property="og:url" content="' . $e($canonical) . '">';
        }

        if (!empty($meta['image'])) {
            $out .= '<meta property="og:image" content="' . $e($meta['image']) . '">';
            $out .= '<meta name="twitter:image" content="' . $e($meta['image']) . '">';
        }

        if (!empty($meta['author'])) {
            $out .= '<meta name="author" content="' . $e($meta['author']) . '">';
        }

        // Only emit keywords when actually populated. An empty keywords tag is noise.
        if (!empty($meta['keywords'])) {
            $out .= '<meta name="keywords" content="' . $e($meta['keywords']) . '">';
        }

        $out .= '<meta property="og:type" content="' . $e(!empty($meta['type']) ? $meta['type'] : 'website') . '">';
        $out .= '<meta property="og:locale" content="en_AE">';
        if (!empty(SITE_NAME)) {
            $out .= '<meta property="og:site_name" content="' . $e(SITE_NAME) . '">';
        }
        $out .= '<meta name="twitter:card" content="summary_large_image">';

        if (class_exists('Seo')) {
            if (!empty($meta['breadcrumb'])) {
                $out .= Seo::jsonLd($meta['breadcrumb']);
            }
            if (!empty($meta['schema'])) {
                $out .= Seo::jsonLd($meta['schema']);
            }
            // Additional JSON-LD blocks beyond the single primary $meta['schema'] —
            // currently just FAQPage (AEO phase), auto-attached by Seo::page() when
            // cms/data/aeo.json has FAQ content for the slug. Each one must correspond
            // to content actually rendered visibly on the page; see Aeo::faqSchema().
            if (!empty($meta['schema_extra']) && is_array($meta['schema_extra'])) {
                foreach ($meta['schema_extra'] as $schema) {
                    $out .= Seo::jsonLd($schema);
                }
            }
        }

        return $out;
    }

    public static function input($arr, $field)
    {
        if (is_array($arr)) {
            return isset($arr[$field]) ? $arr[$field] : '';
        } else if (is_object($arr)) {
            return isset($arr->{$field}) ? $arr->{$field} : '';
        } else {
            return '';
        }
    }

    public static function dashesToCamelCase($string, $capitalizeFirstCharacter = false)
    {

        $str = str_replace(' ', '', ucwords(str_replace('-', ' ', $string)));

        if (!$capitalizeFirstCharacter) {
            $str[0] = strtolower($str[0]);
        }

        return $str;
    }

    public static function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }

    public static function cms($page, $key, $default = '')
    {
        static $cms_data = null;
        if ($cms_data === null) {
            $data_file = __DIR__ . '/../cms/data/content.json';
            if (file_exists($data_file)) {
                $cms_data = json_decode(file_get_contents($data_file), true);
            } else {
                $cms_data = [];
            }
        }
        if (isset($cms_data[$page]['fields'][$key]['value']) && $cms_data[$page]['fields'][$key]['value'] !== '') {
            return $cms_data[$page]['fields'][$key]['value'];
        }
        return $default;
    }

    public static function get_casestudies()
    {
        $data_file = __DIR__ . '/../cms/data/casestudies.json';
        if (file_exists($data_file)) {
            return json_decode(file_get_contents($data_file), true);
        }
        return [];
    }

    public static function get_verticals()
    {
        $data_file = __DIR__ . '/../cms/data/verticals.json';
        if (file_exists($data_file)) {
            return json_decode(file_get_contents($data_file), true);
        }
        return [];
    }

    public static function get_clients()
    {
        $data_file = __DIR__ . '/../cms/data/clients.json';
        if (file_exists($data_file)) {
            return json_decode(file_get_contents($data_file), true);
        }
        return [];
    }

}

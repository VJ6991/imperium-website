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

    public static function setMetaTags($meta = Array())
    {

        if (count($meta)) {
            $metaStr = '';

            if (isset($meta['title'])) {
                $metaStr .= "<title> " . $meta['title'] . " | " . SITE_NAME . "</title><meta name='title' content='" . $meta['title'] . "'><meta property='og:title' content='" . $meta['title'] . "'>";
            }
            if (isset($meta['description'])) {
                $metaStr .= '<meta name="twitter:description" content="' . $meta['description'] . '"><meta property="og:description" content="' . $meta['description'] . '"> <meta name="description" content="' . $meta['description'] . '">';
            }

            if (isset($meta['url'])) {
                $metaStr .= '<meta property="og:url" content="' . $meta['url'] . '" /><meta name="twitter:SITE_NAME" content="' . $meta['url'] . '">';
            }

            if (isset($meta['author'])) {
                $metaStr .= '<meta name="author" content="' . $meta['author'] . '">';
            }

             if (isset($meta['keywords'])) {
                $metaStr .= '<meta name="keywords" content="' . $meta['keywords'] . '">';
            }

            if (isset($meta['image'])) {
                $metaStr .= '<meta property="og:image" content="' . $meta['image'] . '">';
            }
            if (!empty(SITE_NAME)) {
                $metaStr .= '<meta property="og:site_name" content="' . SITE_NAME . '">';
            }
            $metaStr .= '<meta property="og:type" content="article" />';
            return $metaStr;
        }
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

}

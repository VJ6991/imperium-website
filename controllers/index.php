<?php

class index extends Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    function index()
    {
        // Serve the new static homepage (imperium homepage_final/index.html) directly.
        // It is a self-contained HTML page (Tailwind CDN + /images assets), so we bypass
        // the Blade view entirely to avoid the templating engine parsing its markup.
        $homepage = __DIR__ . '/../imperium homepage_final/index.html';
        if (is_file($homepage)) {
            // Don't let browsers/proxies serve a stale cached copy of the homepage
            // HTML (otherwise a deploy shows the new site on some devices but the old
            // one on devices that cached it). Assets stay cacheable via their ?v= params.
            if (!headers_sent()) {
                header('Cache-Control: no-cache, must-revalidate, max-age=0');
                header('Pragma: no-cache');
            }
            $html = file_get_contents($homepage);
            // On a sub-folder deployment, prepend the base path to root-absolute
            // links/assets (href/src/action="/..." and CSS url('/...')) so they
            // stay inside the sub-folder instead of hitting the domain root.
            // At the domain root base_path() is '', so the page is unchanged.
            $base = function_exists('base_path') ? base_path() : '';
            if ($base !== '') {
                $html = preg_replace('#\b(href|src|action)="/(?!/)#', '$1="' . $base . '/', $html);
                $html = preg_replace('#\burl\((["\']?)/(?!/)#', 'url($1' . $base . '/', $html);
            }
            // AEO: TL;DR + FAQ content is injected from cms/data/aeo.json (via the
            // Aeo helper) at the two marker comments below, rather than being
            // hand-duplicated into this static file — same source of truth every
            // other page's FAQ reads from, so editing aeo.json can't leave this
            // page's copy stale. The homepage stays otherwise fully static.
            $html = str_replace('<!-- AEO_TLDR -->', $this->renderAeoTldr(), $html);
            $html = str_replace('<!-- AEO_FAQ -->', $this->renderAeoFaq(), $html);
            echo $html;
            return;
        }

        // Fallback: original dynamic homepage if the static file is ever missing.
        $blogs = [];
        $blogData = $this->getBlogs();

        if( isset( $blogData->posts ) && count($blogData->posts)){
            $blogs = $blogData->posts;
        }

        $meta = ['title' => 'Unified Communication Solution in Dubai | Software Provider in Dubai| Business Communication Services | Imperium' , 'description' => 'Imperium is a leading IT & telecom company provides customize telecommunications software solutions that helps to deliver enhance experience to customer and employees at every touch point.','keywords'=>'', 'url' => url('')];
        $casestudies = Helper::get_casestudies();
        
        return $this->view->render('index', ['meta' => $meta, 'blogs' => $blogs, 'casestudies' => $casestudies]);

    }

    /**
     * Homepage TL;DR band — matches the Tailwind utility classes already used
     * elsewhere on this page (bg-surface-container-lowest / text-on-surface-variant
     * / text-primary tokens, defined in build/tailwind.home.config.js), not the
     * shared assets/css/aeo.css light-card styling the Bootstrap pages use — a
     * bright card would look out of place against this page's dark theme.
     */
    private function renderAeoTldr()
    {
        $aeo = class_exists('Aeo') ? Aeo::page('index') : null;
        if (empty($aeo['tldr'])) {
            return '';
        }
        $e = function ($v) { return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8'); };

        $out  = '<section id="tldr" class="py-10 px-5 sm:px-8 bg-surface-container-lowest border-y border-white/10">';
        $out .= '<div class="max-w-7xl mx-auto">';
        $out .= '<p class="text-[11px] font-bold uppercase tracking-widest text-primary mb-2">In short</p>';
        // Raw, not escaped: tldr text may contain hand-authored <a href> internal
        // links — cms/data/aeo.json is our own trusted content, not user input.
        $out .= '<p class="text-on-surface-variant text-base sm:text-lg leading-relaxed max-w-4xl">' . $aeo['tldr'] . '</p>';
        if (!empty($aeo['last_updated'])) {
            $out .= '<p class="text-xs text-on-surface-variant opacity-70 mt-3">Reviewed by the Imperium team &middot; last updated ' . $e(date('j F Y', strtotime($aeo['last_updated']))) . '</p>';
        }
        $out .= '</div></section>';
        return $out;
    }

    /** Homepage FAQ section + its matching FAQPage JSON-LD, from the same array. */
    private function renderAeoFaq()
    {
        $aeo = class_exists('Aeo') ? Aeo::page('index') : null;
        if (empty($aeo['faqs'])) {
            return '';
        }
        $e = function ($v) { return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8'); };

        $out  = '<section class="pt-12 pb-16 px-5 sm:px-8 max-w-7xl mx-auto" id="faq">';
        $out .= '<h2 class="text-3xl lg:text-4xl font-bold font-headline text-white mb-10">Frequently asked questions</h2>';
        $out .= '<div class="max-w-3xl space-y-8">';
        foreach ($aeo['faqs'] as $faq) {
            if (empty($faq['q']) || empty($faq['a'])) {
                continue;
            }
            // Question text is escaped; answer text is raw (may contain trusted
            // <a href> internal links from aeo.json — see the tldr note above).
            $out .= '<div><h3 class="text-lg font-bold text-white mb-2">' . $e($faq['q']) . '</h3>';
            $out .= '<p class="text-on-surface-variant leading-relaxed">' . $faq['a'] . '</p></div>';
        }
        $out .= '</div></section>';

        if (class_exists('Aeo') && class_exists('Seo')) {
            $schema = Aeo::faqSchema($aeo['faqs']);
            if ($schema) {
                $out .= Seo::jsonLd($schema);
            }
        }

        return $out;
    }

}

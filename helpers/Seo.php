<?php
/**
 * SEO helper — resolves per-page metadata and builds the JSON-LD blocks.
 *
 * Reads seo/pages.php (the single source of truth) and hands controllers a $meta
 * array that Helper::setMetaTags() renders into <head>. Also owns canonical URL
 * construction, which is the one thing that must be absolute and must agree with
 * whatever host is in sitemap.xml — otherwise Google sees www and non-www as two
 * competing copies of the same page.
 */
class Seo
{
    /** Breadcrumb labels. Short, human names — NOT the SEO title. */
    private static $names = [
        'index'              => 'Home',
        'industry-influence' => 'Verticals',
        'casestudy'          => 'Case Studies',
        'contact'            => 'Contact',
        'healthcare'         => 'Healthcare',
        'debtcollection'     => 'Debt Collection',
        'helpdesk'           => 'Help Desk',
        'businesscenter'     => 'Business Center',
        'logistics'          => 'Logistics',
        'educationsector'    => 'Education',
        'ecommerce'          => 'E-Commerce',
        'realestate'         => 'Real Estate',
        'retail'             => 'Retail',
        'banking'            => 'Banking',
        'finance'            => 'Finance',
        'insurance'          => 'Insurance',
    ];

    /** Slugs that live under the Verticals section (drives the breadcrumb trail). */
    private static $verticals = [
        'healthcare', 'debtcollection', 'helpdesk', 'businesscenter',
        'logistics', 'educationsector', 'ecommerce', 'realestate',
        'retail', 'banking', 'finance', 'insurance',
    ];

    private static $pages = null;

    /** Load and cache seo/pages.php. */
    public static function pages()
    {
        if (self::$pages === null) {
            $file = __DIR__ . '/../seo/pages.php';
            self::$pages = is_file($file) ? require $file : [];
        }
        return self::$pages;
    }

    /**
     * Canonical site root, absolute, no trailing slash — e.g. https://www.imperiumapp.com
     *
     * SITE_URL (defined in index.php) wins so production always canonicalises to one
     * host. Falls back to the request's own scheme/host for local and staging work.
     */
    public static function siteUrl()
    {
        if (defined('SITE_URL') && SITE_URL !== '') {
            return rtrim(SITE_URL, '/');
        }
        $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
        $host   = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
        return $scheme . '://' . $host . (function_exists('base_path') ? base_path() : '');
    }

    /** Absolute URL for a slug. '' or 'index' resolves to the site root. */
    public static function url($slug = '')
    {
        $slug = trim((string) $slug, '/');
        if ($slug === '' || $slug === 'index') {
            return self::siteUrl() . '/';
        }
        return self::siteUrl() . '/' . $slug;
    }

    /** Absolute URL for an asset path such as 'image/healthcare.jpg'. */
    public static function asset($path)
    {
        return self::siteUrl() . '/assets/' . ltrim((string) $path, '/');
    }

    public static function name($slug)
    {
        return isset(self::$names[$slug]) ? self::$names[$slug] : ucfirst($slug);
    }

    /**
     * Build the $meta array a controller hands to its view.
     *
     * Anything passed in $overrides wins, so a controller can still special-case a
     * page without editing seo/pages.php.
     */
    public static function page($slug, $overrides = [])
    {
        $pages = self::pages();
        $p     = isset($pages[$slug]) ? $pages[$slug] : [];

        $meta = [
            'slug'        => $slug,
            'title'       => isset($p['title']) ? $p['title'] : 'Imperium Software Technologies',
            'description' => isset($p['description']) ? $p['description'] : '',
            'url'         => self::url($slug),
            'canonical'   => self::url($slug),
            'image'       => self::asset(isset($p['image']) ? $p['image'] : 'image/imperium-logo-orange-new.png'),
            'type'        => isset($p['type']) ? $p['type'] : 'website',
            'breadcrumb'  => self::breadcrumb($slug),
        ];

        if (!empty($p['service'])) {
            $meta['schema'] = self::serviceSchema($slug, $p);
        }

        return array_merge($meta, $overrides);
    }

    /** BreadcrumbList JSON-LD. Verticals get Home > Verticals > <page>. */
    public static function breadcrumb($slug)
    {
        if ($slug === 'index') {
            return null;
        }

        $items = [['name' => 'Home', 'url' => self::url('')]];
        if (in_array($slug, self::$verticals, true)) {
            $items[] = ['name' => 'Verticals', 'url' => self::url('industry-influence')];
        }
        $items[] = ['name' => self::name($slug), 'url' => self::url($slug)];

        $list = [];
        foreach ($items as $i => $item) {
            $list[] = [
                '@type'    => 'ListItem',
                'position' => $i + 1,
                'name'     => $item['name'],
                'item'     => $item['url'],
            ];
        }

        return [
            '@context'        => 'https://schema.org',
            '@type'           => 'BreadcrumbList',
            'itemListElement' => $list,
        ];
    }

    /** Service JSON-LD for a vertical page — tells engines what is sold, to whom, where. */
    public static function serviceSchema($slug, $p)
    {
        return [
            '@context'    => 'https://schema.org',
            '@type'       => 'Service',
            'name'        => $p['service'],
            'description' => isset($p['description']) ? $p['description'] : '',
            'serviceType' => $p['service'],
            'provider'    => [
                '@type' => 'Organization',
                'name'  => 'Imperium Software Technologies',
                'url'   => self::siteUrl() . '/',
            ],
            'areaServed'  => [
                ['@type' => 'Country', 'name' => 'United Arab Emirates'],
                ['@type' => 'Country', 'name' => 'Saudi Arabia'],
                ['@type' => 'Country', 'name' => 'Singapore'],
                ['@type' => 'Country', 'name' => 'India'],
            ],
            'url'         => self::url($slug),
        ];
    }

    /**
     * Organization JSON-LD — the brand's identity record.
     *
     * Every fact here is taken from the site's own footer/contact page. Do not add
     * claims that cannot be verified on-site (founding date, employee count,
     * aggregate ratings): structured data that disagrees with the visible page is
     * treated as untrustworthy and can cost the rich result entirely.
     */
    public static function organizationSchema()
    {
        $site = self::siteUrl();

        return [
            '@context'    => 'https://schema.org',
            '@type'       => 'Organization',
            '@id'         => $site . '/#organization',
            'name'        => 'Imperium Software Technologies',
            'legalName'   => 'Imperium Software Technologies DMCC',
            'url'         => $site . '/',
            'description' => 'AI-powered customer experience (CX) and contact center solutions — CTI, IVR, omnichannel and enterprise telephony software.',
            'logo'        => [
                '@type' => 'ImageObject',
                'url'   => self::asset('image/imperium-logo-orange-new.png'),
            ],
            'email'       => 'sales@imperiumapp.com',
            'telephone'   => '+971-4-244-3417',
            'address'     => [
                '@type'           => 'PostalAddress',
                'streetAddress'   => '1504, 1 Lake Plaza, Cluster T, Jumeirah Lakes Towers',
                'postOfficeBoxNumber' => '73916',
                'addressLocality' => 'Dubai',
                'addressCountry'  => 'AE',
            ],
            'contactPoint' => [
                [
                    '@type'             => 'ContactPoint',
                    'contactType'       => 'sales',
                    'telephone'         => '+971-4-244-3417',
                    'email'             => 'sales@imperiumapp.com',
                    'areaServed'        => ['AE', 'SA', 'SG', 'IN'],
                    'availableLanguage' => ['en', 'ar'],
                ],
                [
                    '@type'             => 'ContactPoint',
                    'contactType'       => 'technical support',
                    'email'             => 'support@imperiumapp.com',
                    'areaServed'        => ['AE', 'SA', 'SG', 'IN'],
                    'availableLanguage' => ['en', 'ar'],
                    'hoursAvailable'    => [
                        '@type'     => 'OpeningHoursSpecification',
                        'dayOfWeek' => ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],
                        'opens'     => '00:00',
                        'closes'    => '23:59',
                    ],
                ],
            ],
            // Branch offices, exactly as listed in the site footer.
            'location' => [
                [
                    '@type'   => 'Place',
                    'name'    => 'Imperium Singapore',
                    'address' => [
                        '@type'           => 'PostalAddress',
                        'streetAddress'   => '21 Tan Quee Lan Street, #02-04 Heritage Place',
                        'postalCode'      => '188108',
                        'addressLocality' => 'Singapore',
                        'addressCountry'  => 'SG',
                    ],
                ],
                [
                    '@type'   => 'Place',
                    'name'    => 'Imperium Chennai',
                    'address' => [
                        '@type'           => 'PostalAddress',
                        'streetAddress'   => '47/2 Ashok Nagar, 53rd Street, Indira Colony',
                        'postalCode'      => '600083',
                        'addressLocality' => 'Chennai',
                        'addressRegion'   => 'Tamil Nadu',
                        'addressCountry'  => 'IN',
                    ],
                ],
                [
                    '@type'   => 'Place',
                    'name'    => 'Imperium Bengaluru',
                    'address' => [
                        '@type'           => 'PostalAddress',
                        'streetAddress'   => 'Kaverappa Layout, Kadubeesanahalli',
                        'postalCode'      => '560103',
                        'addressLocality' => 'Bengaluru',
                        'addressRegion'   => 'Karnataka',
                        'addressCountry'  => 'IN',
                    ],
                ],
            ],
            'sameAs' => [
                'https://www.facebook.com/imperiumapp',
                'https://twitter.com/imperiumapp',
                'https://www.instagram.com/imperiumsoftware/',
                'https://www.youtube.com/@imperiumsoftwaretechnologi9361',
                'https://www.linkedin.com/company/imperium-software-technologies/',
            ],
        ];
    }

    /**
     * WebSite JSON-LD. No SearchAction is declared — the site has no internal
     * search endpoint, and claiming one Google cannot execute is worse than
     * omitting it.
     */
    public static function websiteSchema()
    {
        $site = self::siteUrl();

        return [
            '@context'      => 'https://schema.org',
            '@type'         => 'WebSite',
            '@id'           => $site . '/#website',
            'url'           => $site . '/',
            'name'          => 'Imperium Software Technologies',
            'inLanguage'    => 'en',
            'publisher'     => ['@id' => $site . '/#organization'],
        ];
    }

    /** Encode a JSON-LD array as a ready-to-print <script> tag. */
    public static function jsonLd($data)
    {
        if (empty($data)) {
            return '';
        }
        $flags = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;
        if (defined('JSON_PRETTY_PRINT')) {
            $flags |= JSON_PRETTY_PRINT;
        }
        return '<script type="application/ld+json">' . json_encode($data, $flags) . '</script>';
    }
}

<?php
/**
 * AEO helper — resolves per-page "extractable answer" content (TL;DR, how-it-works
 * steps, FAQ) and builds FAQPage JSON-LD from it.
 *
 * Mirrors Seo.php's pattern: cms/data/aeo.json is the single source of truth, read
 * once and cached. Nothing here invents facts — every value in aeo.json was either
 * lifted from cms/data/content.json's existing page copy, from already-published
 * copy in seo/pages.php, from the real case-study PDFs under assets/pdf/, or is a
 * generic, non-Imperium-specific fact (e.g. "what is CTI"). See
 * reports/20-aeo-implementation-log.md for the sourcing notes per page.
 *
 * FAQPage schema is only ever built from the SAME array a view renders visibly —
 * Aeo::page() is the one read path for both, so schema can't drift from the page.
 */
class Aeo
{
    private static $data = null;

    /** Load and cache cms/data/aeo.json. */
    private static function all()
    {
        if (self::$data === null) {
            $file = __DIR__ . '/../cms/data/aeo.json';
            self::$data = is_file($file) ? json_decode(file_get_contents($file), true) : [];
            if (!is_array(self::$data)) {
                self::$data = [];
            }
        }
        return self::$data;
    }

    /**
     * AEO content for a slug: tldr, how_it_works_heading/how_it_works, faqs,
     * core_question, last_updated. Returns null if the page has no AEO content yet.
     */
    public static function page($slug)
    {
        $all = self::all();
        return isset($all[$slug]) ? $all[$slug] : null;
    }

    /**
     * FAQPage JSON-LD from a page's faqs array. Returns null for an empty/missing
     * list so callers can skip emitting a <script> tag entirely.
     */
    public static function faqSchema($faqs)
    {
        if (empty($faqs)) {
            return null;
        }

        $items = [];
        foreach ($faqs as $faq) {
            if (empty($faq['q']) || empty($faq['a'])) {
                continue;
            }
            $items[] = [
                '@type'          => 'Question',
                'name'           => $faq['q'],
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text'  => $faq['a'],
                ],
            ];
        }

        if (empty($items)) {
            return null;
        }

        return [
            '@context'   => 'https://schema.org',
            '@type'      => 'FAQPage',
            'mainEntity' => $items,
        ];
    }
}

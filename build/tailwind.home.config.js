/**
 * Compiles the homepage's Tailwind usage to a static stylesheet, replacing the
 * cdn.tailwindcss.com Play CDN. Colors/borderRadius/fontFamily below are copied
 * verbatim from the tailwind.config that used to run in-browser via the CDN
 * script (imperium homepage_final/index.html) so the compiled output is
 * pixel-identical to what the CDN produced.
 */
module.exports = {
    darkMode: 'class',
    content: ['imperium homepage_final/index.html'],
    // controllers/index.php injects the AEO FAQ section at runtime (from
    // cms/data/aeo.json) rather than it living in the static HTML file above,
    // so Tailwind's content scan never sees those classes. Safelist the ones
    // used only in that PHP-generated markup (checked against the scan output —
    // everything else that method uses already appears verbatim in the HTML).
    // If you add a new utility class to renderAeoFaq(), add it here too, or it
    // will silently compile to nothing.
    // (The TL;DR band this used to also cover — renderAeoTldr() — was removed
    // 2026-08-15; its now-unused safelist entries (max-w-4xl, sm:text-lg,
    // border-y, opacity-70) were removed with it. See
    // reports/30-geo-implementation-log.md.)
    safelist: [
        'space-y-8',
    ],
    theme: {
        extend: {
            colors: {
                'surface-container-lowest': '#0e0e0e',
                'on-tertiary-fixed': '#1b1b1b',
                'tertiary-container': '#999999',
                'error-container': '#93000a',
                'surface-dim': '#131313',
                'tertiary-fixed': '#e2e2e2',
                'primary-fixed-dim': '#ffb59d',
                'surface-container-highest': '#353534',
                'on-surface-variant': '#D1D5DB',
                outline: '#334155',
                'outline-variant': '#334155',
                'inverse-on-surface': '#1e293b',
                'surface-variant': '#1e293b',
                'surface-bright': '#262626',
                'on-error-container': '#ffdad6',
                'on-tertiary': '#1e293b',
                'on-secondary-fixed-variant': '#475569',
                'primary-container': '#ff6b35',
                'on-secondary-fixed': '#0f172a',
                secondary: '#D1D5DB',
                'on-primary-fixed': '#0f172a',
                'secondary-container': '#1e293b',
                'tertiary-fixed-dim': '#D1D5DB',
                'secondary-fixed-dim': '#D1D5DB',
                background: '#0a0a0a',
                'inverse-primary': '#ff6b35',
                'on-primary-container': '#ffffff',
                'surface-container': '#171717',
                'on-surface': '#f8fafc',
                'on-error': '#ffffff',
                'inverse-surface': '#f8fafc',
                'surface-tint': '#ff6b35',
                'surface-container-low': '#111111',
                surface: '#0a0a0a',
                primary: '#ff6b35',
                'on-primary': '#5d1900',
                tertiary: '#c6c6c6',
                'on-secondary-container': '#b4b5b5',
                'on-tertiary-container': '#313131',
                error: '#ffb4ab',
                'surface-container-high': '#2a2a2a',
                'primary-fixed': '#ffdbd0',
                'on-tertiary-fixed-variant': '#474747',
                'on-primary-fixed-variant': '#832600',
                'on-secondary': '#2f3131',
                'on-background': '#e5e2e1',
                'secondary-fixed': '#e2e2e2',
            },
            borderRadius: {
                DEFAULT: '0.125rem',
                lg: '0.25rem',
                xl: '0.5rem',
                full: '0.75rem',
            },
            fontFamily: {
                headline: ['Satoshi', 'sans-serif'],
                body: ['Satoshi', 'sans-serif'],
                label: ['Satoshi', 'sans-serif'],
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/container-queries'),
    ],
};

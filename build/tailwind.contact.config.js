/**
 * Compiles views/contact.blade.php's Tailwind usage to a static stylesheet,
 * replacing its cdn.tailwindcss.com Play CDN script. This page's config is
 * intentionally separate from the homepage's (see the note in contact.blade.php)
 * — it does not define the homepage's Material 3 color tokens or dark mode.
 */
module.exports = {
    content: ['views/contact.blade.php'],
    theme: {
        extend: {
            colors: {
                ink: '#14110F',
                cream: '#FAF7F4',
                brand: '#FF6B35',
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

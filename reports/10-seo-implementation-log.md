# SEO implementation log — session 2026-08-12

Branch: `seo-optimization` (off `main` @ `758061e`).

## Context

Phase 1 SEO (sitemap, robots.txt, canonicals, meta titles/descriptions, JSON-LD,
H1 rewrites, image lazy-loading, the legacy redirect map) was already completed
and merged to `main` in a prior session — see [`SEO-ACTIVITIES.md`](../SEO-ACTIVITIES.md)
§"Phase 1 — SEO (2026-08-07)" for that full record, and
[`SEO-HANDOVER.html`](../SEO-HANDOVER.html) for the client-facing version.

No `/reports/05-keyword-and-ranking-baseline.md` (or any `/reports/` content)
exists anywhere on this machine — confirmed by filesystem search before starting.
The user confirmed this session should pick up `SEO-ACTIVITIES.md` §6 "Still
open" as the work list rather than re-auditing from zero. This log covers only
what changed in *this* session; treat it as an addendum to `SEO-ACTIVITIES.md`,
not a replacement.

Every change below was verified on the local PHP dev server
(`php -S localhost:8001 router.php`) before being logged: HTTP status, HTML
lint (`php -l`), and headless-Chrome before/after screenshots for the two
visual changes.

---

## 1. Removed the Tailwind Play CDN (`cdn.tailwindcss.com`)

**Why this was top of the list.** Flagged in the prior session as "🔴 TOP
TECHNICAL TO-DO... the single largest remaining Core Web Vitals cost on the
site" and deliberately deferred. `cdn.tailwindcss.com` ships a ~419 KB
(measured this session, `curl -sL | wc -c`) JavaScript bundle that parses the
page's class list and compiles CSS **in the browser, at request time** —
Tailwind's own docs say this is not for production use. It blocks first paint
until that JS downloads, parses and runs.

**What changed:**
- Added `package.json` (npm devDependencies only — `tailwindcss@3.4.19`,
  `@tailwindcss/forms@0.5.11`, `@tailwindcss/container-queries@0.1.1`, pinned
  to the `3.x` line because the Play CDN itself is v3-based and the codebase
  uses v3's JS `tailwind.config` API, not v4's CSS-first config).
- Added `build/tailwind.home.config.js` and `build/tailwind.contact.config.js`
  — the two pages' in-browser `tailwind.config` blocks, copied verbatim
  (colors, `borderRadius`, `fontFamily`, `darkMode`), now compiled ahead of
  time instead of interpreted client-side. Each page kept its own config
  because they were never unified (see the existing comment in
  `contact.blade.php`: "this page's Tailwind config does NOT define the
  homepage's Material… tokens").
- `npm run build:css` → `assets/css/tailwind-home.min.css` (36.9 KB) and
  `assets/css/tailwind-contact.min.css` (26.8 KB), both minified, both scoped
  via `content:` to just the one file each was built from.
- [`imperium homepage_final/index.html`](../imperium%20homepage_final/index.html)
  and [`views/contact.blade.php`](../views/contact.blade.php): the
  `<script src="cdn.tailwindcss.com...">` and inline `<script id="tailwind-config">`
  blocks replaced with `<link rel="stylesheet" href=".../tailwind-*.min.css">`.
- **Result:** ~419 KB of render-blocking third-party JS → ~37 KB / ~27 KB of
  same-origin, cacheable CSS. No runtime compilation step left in the browser.

**Verified:** headless-Chrome screenshots of both pages before/after (full
hero + header on the homepage, full page on `/contact` including the form,
partner logos, offices grid and footer) are visually identical — spacing,
color, type, buttons, and rendered utility classes all match. The only pixel
differences were unrelated dynamic content (the homepage's hero background
photo, which rotates/lazy-loads independently of CSS, and an unloaded Google
Maps iframe on `/contact`). `php -l` passes on both edited files.

**Maintenance note (added to both files as inline comments):** any future
class changes to these two pages need `npm run build:css:home` /
`build:css:contact` re-run before deploy, since there is no more in-browser
JIT compiler. This is the trade-off the prior session flagged when deferring
the fix ("adds a build step to a project that currently deploys by copying
files") — accepted this session per the "continue open items" direction.

---

## 2. Self-hosted Material Symbols Outlined

**Why:** last remaining font/icon CDN dependency after Satoshi was already
self-hosted in Phase 1 (`fonts.googleapis.com` → `fonts.gstatic.com`, two
third-party hosts, one extra DNS+TLS round trip, for 30 icon usages on the
homepage alone).

**What changed:**
- Downloaded the exact variable-font file Google's CSS2 API serves for this
  family/axis request (`family=Material+Symbols+Outlined:wght,FILL@100..700,0..1`)
  to `assets/fonts/MaterialSymbolsOutlined.woff2` (3.96 MB — this is the same
  file the CDN was already serving; self-hosting removes the third-party
  round trip, it does not shrink the font itself).
- Added `assets/css/material-symbols.css`: the `@font-face` (pointed at the
  local file) plus the `.material-symbols-outlined` base rule, copied verbatim
  from Google's CSS response so rendering is unchanged.
- Replaced the `<link href="fonts.googleapis.com/css2?family=Material+Symbols...">`
  tag with `<link rel="stylesheet" href="/assets/css/material-symbols.css">`
  on both the homepage and `/contact`.

**Verified:** same before/after screenshot pass as above — `/contact`'s icons
(clock, headset, pin, phone, envelope, in the info strip and the "Already a
customer" card) render as real glyphs, pixel-identical to the CDN version, not
tofu/missing-glyph boxes.

---

## 3. Closed a deploy-hygiene gap the new build tooling introduced

Adding `package.json`/`npm install` created a `node_modules/` tree. Verified
directly (`curl` against the PHP dev server) that a real file inside it —
`node_modules/@alloc/quick-lru/index.js` — returned **200** and served as-is:
`router.php`'s static-asset passthrough (and the live `.htaccess`'s equivalent
rule) match on file extension, not on which folder it's in, so any `.js`/`.css`
file anywhere under the docroot is directly requestable. An accidentally
deployed `node_modules/` would have been publicly crawlable.

**Fixed:**
- `node_modules/` added to `.gitignore` (can never be committed).
- `build/` and `node_modules/` added to the existing forbidden-folder rule in
  `.htaccess` (`RewriteRule ^(cms|cache|controllers|libs|helpers|package|views|seo|tools|build|node_modules)(/|$) - [F,L]`)
  as defense-in-depth, matching the pattern already used for `cms/`, `seo/`,
  `tools/`, etc.

This only matters if someone copies the whole working tree to deploy (the
build outputs that matter — `assets/css/tailwind-*.min.css` — are committed
normally; the tooling that produced them is not meant to ship).

---

## 4. Verified — no action needed

Two items on the prior session's "still open" list turned out to already be
resolved *within this repo* (the open items were about the **separate**,
currently-live `D:\programming_D\imperium-website` codebase, which
`imperium-lite` is standalone from per `CLAUDE.md`):

- **Canonical host.** Checked all four places that need to agree:
  `index.php` (`SITE_URL`), `.htaccess` (redirect rules), `robots.txt`
  (`Sitemap:` line), `tools/generate-sitemap.php` (`$base`). All four already
  point at `https://www.imperiumapp.com` consistently. The conflict recorded
  in `SEO-ACTIVITIES.md` §6b is specific to the old live site's `.htaccess`,
  not this build. See §"Canonical host — production DNS" in
  [`11-seo-remaining-and-handoffs.md`](11-seo-remaining-and-handoffs.md) for
  the one piece that's still outside this repo's control.
- **`foundingDate` / entity name.** `grep`-checked every occurrence of the
  legal entity name across the build (`helpers/Seo.php`, homepage, footer,
  `contact.blade.php`) — all consistently say "Imperium Software Technologies
  DMCC". No `foundingDate` is claimed anywhere in `imperium-lite`'s schema
  (Phase 1 deliberately omitted it pending confirmation of the correct
  entity/date, per `SEO-ACTIVITIES.md` §6 item 5). Nothing to fix; the
  discrepancy noted in the prior log was again about the old live site.

## 5. Re-verified Phase 1 still holds

Ran the same page-by-page check as the prior session's verification pass
against every route on the local server after this session's changes: all 16
pages return `200` with intact `<title>`, canonical tag, and JSON-LD; an
unknown path returns a real `404`; `/robots.txt` and `/sitemap.xml` both
return `200`. No regression from this session's edits.

---

## Files changed this session

| File | Change |
|---|---|
| `package.json`, `package-lock.json` (new) | npm devDependencies for the Tailwind CLI build |
| `build/tailwind.home.config.js`, `build/tailwind.home.input.css` (new) | Homepage Tailwind config + entry CSS |
| `build/tailwind.contact.config.js`, `build/tailwind.contact.input.css` (new) | Contact-page Tailwind config + entry CSS |
| `assets/css/tailwind-home.min.css` (new, generated) | Compiled homepage utility CSS |
| `assets/css/tailwind-contact.min.css` (new, generated) | Compiled contact-page utility CSS |
| `assets/css/material-symbols.css` (new) | Self-hosted Material Symbols `@font-face` + base class |
| `assets/fonts/MaterialSymbolsOutlined.woff2` (new) | Self-hosted icon font file |
| `imperium homepage_final/index.html` | Swapped CDN `<script>`/`<link>` tags for the static stylesheets above; removed the now-dead inline `tailwind.config` block |
| `views/contact.blade.php` | Same swap |
| `.gitignore` | Added `node_modules/` |
| `.htaccess` | Added `build`/`node_modules` to the forbidden-folder rule |

Not yet committed — see the end of the session for the commit(s) grouping
these changes.

# SEO / AEO / GEO — activity log

Running record of search-optimisation work on **imperium-lite**. Append to this file;
do not rewrite history. Each phase records what was found, what changed, and what is
still open, so the next session (human or AI) can pick up without re-auditing.

| | |
|---|---|
| Site | https://www.imperiumapp.com |
| Build | `imperium-lite` (standalone, replaces the current full site) |
| Phase 1 — SEO | **Done** (2026-08-07) |
| Phase 2 — AEO | Not started |
| Phase 3 — GEO | Not started |

---

## Launch risk — status: handled (2026-08-07)

**The situation.** `imperium-lite` ships 16 routes. The build currently deployed on
the domain (source: `D:\programming_D\imperium-website`) serves **44 top-level routes
plus 40+ controller-method sub-routes**. Any of those that 404 on launch day lose the
ranking equity attached to that URL.

**Nothing has been lost yet.** Live probing on 2026-08-07 confirmed the legacy pages
still return 200 and serve real content — `/products-cti-solutions`,
`/products-sms-solutions`, `/products-call-reporter`, `/products/crmsolution`,
`/products/socialmedia`, `/partners-cisco`, `/blog-news`, `/registration` and the
verticals. No genuine 404 was found. This is therefore a **prevention** job, not a
recovery job. (Caveat: the host rate-limited the probe partway through and returned
403s for some URLs, so the sweep was not exhaustive — but no URL returned a real 404.)

**The map is now built from the deployed source, not guesswork.** The deployed build
has **no route whitelist** in `libs/Bootstrap.php`, so every file in its
`controllers/` folder is a live URL and every public controller method is a live
sub-URL. Enumerating those gave the definitive inventory, which superseded the earlier
list assembled from search results and the nav.

**15 of the 16 lite URLs need no redirect at all** — `/banking`, `/businesscenter`,
`/casestudy`, `/contact`, `/debtcollection`, `/ecommerce`, `/educationsector`,
`/finance`, `/healthcare`, `/helpdesk`, `/industry-influence`, `/insurance`,
`/logistics`, `/realestate`, `/retail` all keep the same slug. That URL continuity is
why this migration is comparatively low-risk.

**33 redirect rules** now cover the rest. Verified by simulating the rules against the
full inventory: 56 legacy routes redirect correctly, 16 carry-over URLs pass through
untouched.

### Still worth doing: the Search Console cross-check

The codebase is authoritative for *what is deployed now*. It is **not** authoritative
for *what Google has indexed*, because earlier builds had pages this one dropped.
Proof: `/products/avayaaura` and `/products/icep` appear in Google's index, but
`avayaaura` exists nowhere in the deployed source — it was removed by a previous
changeover. The wildcard `^products/(.*)$` catches those two, but there may be others
outside that pattern.

Export **Search Console → Indexing → Pages** and **Performance → Search results →
Pages (last 12 months)**, diff against the map, and add anything missing. No longer
blocking — now a safety net.

---

# Phase 1 — SEO (2026-08-07)

## 1. Audit — what was wrong

Findings from the live site and this build, in rough order of damage:

| # | Finding | Impact |
|---|---|---|
| 1 | **`sitemap.xml` did not exist** — `robots.txt` pointed at it and it returned a 404 | Crawlers had no URL inventory |
| 2 | **`robots.txt` had `Disallow: /casestudy`** while the nav and footer linked to it | Blocked the strongest proof/E-E-A-T content on the site |
| 3 | **No `<link rel="canonical">` on any page** — site answers on both `imperiumapp.com` and `www.` | Every page indexed as two competing copies; ranking signals split |
| 4 | **9 of 16 pages had no meta description at all** — `banking`, `finance`, `insurance`, `retail`, `ecommerce`, `realestate`, `businesscenter` (empty), plus `educationsector` and `logistics`, where the description key was mistyped as `'Make Help Desk'` and `'Logistics'` | Google writes its own snippet; CTR left to chance |
| 5 | `industry-influence` reused **healthcare's** description verbatim | Duplicate-content signal |
| 6 | Titles were weak or duplicated the brand — `Finance Services in Dubai`, `Retail Services in Dubai`, and `... \| Imperium Software \| Imperium` (the renderer appended the brand to titles that already contained it) | Wasted the highest-weight on-page element |
| 7 | **`og:type` was `article` on every page**; no `twitter:card`, no `og:image` on inner pages, `og:image` relative on the homepage | Broken/blank social share previews |
| 8 | Structured data was **Organization only**, duplicated by hand in two places, with no `@id` | No breadcrumb or service rich results; two competing entity records |
| 9 | **Zero `loading="lazy"`** across 90 homepage images; only 2 of 90 had `width`/`height` | LCP and CLS penalties |
| 10 | Homepage loaded the **Fontshare Satoshi stylesheet even though Satoshi is already embedded** as a base64 woff2 in the same file | Pointless render-blocking third-party round-trip |
| 11 | Vertical H1s were single generic words — `Banking`, `Finance`, `Retail`, `Insurance` — and `helpdesk`'s H1 was the garbled `Make Help Desk` | Strongest on-page signal wasted |
| 12 | No compression, caching or security headers configured | Core Web Vitals left on the table |
| 13 | Two unused images of **10.6 MB and 9.8 MB** sitting in `assets/image/` | Deploy bloat (not page speed — they are unreferenced) |

Already healthy, for the record: one `<h1>` per page, `alt` text on all 90 homepage
images, a genuine `404` status code with `noindex` on the error page, HTTPS,
mobile viewport, GA4 + GTM installed, and Google/Bing site verification present.

## 2. What changed

### New files

| File | Purpose |
|---|---|
| [seo/pages.php](seo/pages.php) | **Single source of truth** for every page's title, description, OG image, sitemap priority and Service-schema payload |
| [helpers/Seo.php](helpers/Seo.php) | Canonical URL construction, breadcrumb/Service/Organization/WebSite JSON-LD builders |
| [tools/generate-sitemap.php](tools/generate-sitemap.php) | Regenerates `sitemap.xml` from `seo/pages.php` |
| [sitemap.xml](sitemap.xml) | 16 URLs, absolute, `www` host |

### Changed files

- **[helpers/Helper.php](helpers/Helper.php)** — `setMetaTags()` rewritten. Now emits
  canonical, `og:*`, `twitter:*`, `og:locale`, correct `og:type`, and the page's
  JSON-LD. All values HTML-escaped (they were not — apostrophes in descriptions
  silently truncated attributes). It no longer appends the brand to the title, since
  `seo/pages.php` writes complete titles.
- **[index.php](index.php)** — defines `SITE_URL`, pinned to `https://www.imperiumapp.com`
  on production hosts only, so localhost and staging still self-canonicalise.
- **[robots.txt](robots.txt)** — removed the `/casestudy` block; blocked only
  server-side folders; explicitly allowed the AI crawlers (GPTBot, ClaudeBot,
  PerplexityBot, Google-Extended, OAI-SearchBot, Applebot-Extended) in preparation
  for the GEO phase.
- **[router.php](router.php)** — added `xml` and `txt` to the static-file regex.
  Without this the front controller swallowed `/sitemap.xml` and `/robots.txt` and
  returned a 404 — the exact behaviour production was showing.
- **[.htaccess](.htaccess)** — canonical-host redirect (bare domain → `www`, HTTP →
  HTTPS, scoped to production hostnames); the full legacy 301 map; gzip/brotli
  compression; 1-year immutable caching for static assets; `X-Content-Type-Options`
  and `Referrer-Policy`. Added `seo` and `tools` to the forbidden-folder rule.
- **All 15 page controllers** — each `$meta = [...]` replaced with `Seo::page('<slug>')`.
- **[views/layouts/app.blade.php](views/layouts/app.blade.php)** — hand-written
  Organization JSON-LD replaced with `Seo::organizationSchema()` + `websiteSchema()`.
- **[views/contact.blade.php](views/contact.blade.php)** — this page does not extend
  the shared layout, so it was shipping with no brand schema; now emits Organization
  + WebSite explicitly (contact pages are exactly where engines confirm NAP).
- **12 vertical views** — visible breadcrumb now reads *Home › Verticals › Page*,
  matching the `BreadcrumbList` schema and adding an internal link to the hub from
  every vertical (internal links per vertical page: 11 → 12).
- **[cms/data/content.json](cms/data/content.json)** — the 12 vertical `banner_title`
  values (which render as `<h1>`) rewritten from single words to descriptive,
  keyword-bearing headings. Backup: `cms/data/content.json.bak-before-seo`.
- **[imperium homepage_final/index.html](imperium%20homepage_final/index.html)** —
  canonical added; `og:url`/`og:image`/`twitter:image` made absolute; `og:locale`
  added; `max-image-preview:large` added to robots; Organization schema upgraded to
  match `Seo::` (with `@id`, contact points, branch offices) plus WebSite schema;
  redundant Fontshare stylesheet removed; `loading="lazy" decoding="async"` on 87
  below-fold images; `fetchpriority="high"` on the LCP hero; intrinsic
  `width`/`height` on all 88 images that lacked them; `id="products"`,
  `id="industries"`, `id="partners"` anchors added so legacy product/partner
  redirects land on relevant content instead of reading as soft 404s.

### Titles and descriptions — before → after

| Page | Before | After |
|---|---|---|
| `banking` | `Digital Communication for Banking and Financial Services` (no description) | `Banking Contact Center & CX Solutions UAE \| Imperium` |
| `finance` | `Finance Services in Dubai` (no description) | `Financial Services Contact Center Software \| Imperium` |
| `insurance` | `Insurance Services in Dubai` (no description) | `Insurance Contact Center & CX Solutions UAE \| Imperium` |
| `retail` | `Retail Services in Dubai` (no description) | `Retail Customer Experience Software in UAE \| Imperium` |
| `realestate` | `Communication Technology Solution for Real Estate in Dubai ` | `Real Estate Communication Software in Dubai \| Imperium` |
| `industry-influence` | `Solutions\| Industries \| Imperium App` + healthcare's description | `Industries We Serve \| CX Solutions by Sector \| Imperium` |

All 16 titles now land in **49–58 characters** and all 16 descriptions in
**147–158 characters** — inside Google's display limits, unique, one per page.

### H1 rewrites

| Page | Before | After |
|---|---|---|
| `healthcare` | Health Care | Healthcare Contact Center Solutions |
| `banking` | Banking | Contact Center Solutions for Banking |
| `finance` | Finance | Contact Center Solutions for Financial Services |
| `insurance` | Insurance | Customer Engagement Solutions for Insurance |
| `retail` | Retail | Customer Experience Solutions for Retail |
| `logistics` | Logistics | Communication Solutions for Logistics & Supply Chain |
| `educationsector` | Education Sector | Communication Solutions for the Education Sector |
| `ecommerce` | E-Commerce | Customer Engagement Solutions for E-Commerce |
| `realestate` | Real Estate | Communication Solutions for Real Estate |
| `helpdesk` | **Make Help Desk** | Help Desk & Service Desk Solutions |
| `businesscenter` | Business Center | Communication Solutions for Business Centers |
| `debtcollection` | Debt Collection System in Dubai (trailing space) | Debt Collection System in Dubai |

### Structured data now shipped

| Type | Where |
|---|---|
| `Organization` (with `@id`, sales + 24/7 support contact points, Dubai HQ, Singapore/Chennai/Bengaluru branches) | Every page |
| `WebSite` (linked to the Organization via `@id`) | Every page |
| `BreadcrumbList` | All pages except home |
| `Service` (with `areaServed`: AE, SA, SG, IN) | All 12 vertical pages |

No `SearchAction` is declared — the site has no internal search endpoint, and
claiming one Google cannot execute is worse than omitting it. No `foundingDate`,
`aggregateRating` or employee counts either: those are not verifiable on-page, and
structured data that disagrees with the visible page costs the rich result.

## 3. Verification

Every page served locally and checked programmatically:

```
page                code titl desc canon jsonld h1   noalt
(home)              200  1    1    1    2     1    0
healthcare          200  1    1    1    4     1    0
... (all 16) ...
ALL CHECKS PASSED
```

Also confirmed: all JSON-LD blocks parse as valid JSON; `/robots.txt` returns 200
`text/plain`; `/sitemap.xml` returns 200 `application/xml` with 16 URLs; an unknown
URL returns a real **404**; the generator cross-checks every sitemap URL against
`$allowed` in [libs/Bootstrap.php](libs/Bootstrap.php) so a typo cannot publish a 404
into the sitemap.

> **Gotcha discovered:** the Blade compiler processes directives **inside HTML
> comments**. A comment mentioning `@yield('meta')` compiled into a second yield and
> rendered the entire meta block twice. Never write Blade directives in comments.

---

## 4. Competitor research

Direct regional competitors ranking for UAE contact-center/CX terms:

| Competitor | Position | What they do that works |
|---|---|---|
| **ZIWO** (ziwo.io) | Strongest regional player | Deep **matrix site architecture** — solutions split *by department* (sales, support, IT), *by size* (SME, large), and *by industry* (retail, real estate, finance, BPO, travel). Heavy resource hub: blog, whitepapers, templates, guides, **comparison pages**, knowledge base, API docs. Named enterprise logos (Deliveroo, Tabby, DAMAC, Emaar) and G2/Capterra badges as trust signals. Publishes on Arabic-language AI voice agents. |
| **Voxtron / Voxvantage** | Established GCC incumbent | Leads with **data hosted in Dubai** and fast time-to-implement — regional/compliance angle. |
| **Brightcall** | AI-first challenger | Ranks on "AI voice agent Dubai" — winning newer, lower-competition AI terms early. |
| **Bell Integration** | Consultancy | Ranks via dedicated `/ccaas-providers-in-dubai/` and `/ccaas-providers-the-uae/` landing pages — pure keyword-targeted pages. |

**Where Imperium can win.** The vertical pages are the existing asset — 12 of them,
now properly titled, described and schema'd, which most competitors do not have at
that depth. Three gaps to close, in priority order:

1. **No comparison pages.** ZIWO ranks on "X vs Y" and "best contact center software
   UAE". These are high-intent, mid-funnel and cheap to write. Imperium has zero.
2. **No resource/blog hub.** `/blog-news` exists on the old site but is not in this
   build. Competitors publish continuously; this is where topical authority and AI
   citations come from.
3. **No Arabic content.** Every serious MENA competitor targets Arabic. This is the
   largest untapped keyword pool in the market — and it needs `hreflang`, which the
   site does not currently have (correctly, since it is English-only today).

Imperium's genuine differentiators that are currently **under-used in content**:
the Avaya DevConnect partnership, Cisco and Microsoft partnerships, named enterprise
clients, and four offices across AE/SG/IN. Competitors lead with trust signals like
these; Imperium buries them.

## 5. Tools worth adopting

Free / open source, all runnable locally:

| Tool | Use |
|---|---|
| [Lighthouse CI](https://github.com/GoogleChrome/lighthouse-ci) | Core Web Vitals in CI; fails the build on regression. Best single addition. |
| [seo-audit-skill](https://github.com/seo-skills/seo-audit-skill) | MIT CLI, 108 rules across crawlability, structured data, redirect chains, hreflang, E-E-A-T and **GEO readiness** — directly relevant to phases 2–3. |
| [site-audit-seo](https://github.com/viasite/site-audit-seo) | Crawls the whole site and runs Lighthouse on every page; exports JSON/CSV/XLSX. |
| [seo-audits-toolkit](https://github.com/StanGirard/seo-audits-toolkit) | Lighthouse + security headers crawler, sitemap/keyword/image extractors. |
| Google [Rich Results Test](https://search.google.com/test/rich-results) + [Schema Validator](https://validator.schema.org/) | Validate the new JSON-LD against the live URLs after deploy. |
| Google Search Console | Non-negotiable. Submit the sitemap, watch Pages, monitor the redirect map post-launch. |

No paid tooling is required for what is left to do.

---

## 6. Still open

Ordered by value.

1. **Complete the redirect map from Search Console data.** See the warning at the top.
   Blocking for launch.

2. ### 🔴 TOP TECHNICAL TO-DO — replace the Tailwind CDN
   **Owner decision 2026-08-07: deferred, but this is the designated next technical
   task.** Do not close out the SEO work without it.

   `cdn.tailwindcss.com` is loaded by the homepage and
   [views/contact.blade.php](views/contact.blade.php). It ships ~380 KB of JavaScript
   that compiles CSS **in the browser at runtime** — Tailwind's own documentation
   states it is not for production. It is the single largest remaining Core Web
   Vitals cost on the site and PageSpeed Insights will keep flagging it.

   *Fix:* one-time Tailwind CLI build to a static `.css` file, swap the `<script>`
   for a `<link>`, verify the design is pixel-identical. Node is already installed on
   this machine. The trade-off — and the reason it was deferred — is that it adds a
   build step to a project that currently deploys by copying files.

3. **Self-host Material Symbols** (`fonts.googleapis.com`, 30 icon usages on the
   homepage). Satoshi is already self-hosted; this is the last font CDN.

4. **Content gaps** — comparison pages, a resource hub, Arabic content. See §4.

5. **Verify `foundingDate`.** The old `/about` page says founded 2005 under
   *Imperium Software Technologies FZCO*; the current footer says *DMCC*. Deliberately
   omitted from schema until the correct entity and date are confirmed.

## 6b. Cleanup applied to the CURRENTLY DEPLOYED site (2026-08-07)

Changed in `D:\programming_D\imperium-website\.htaccess` (backup:
`.htaccess.bak-before-cleanup`). This is the build live on the domain today, not
this repo.

**Removed 11 redirect rules belonging to a different website** — the US real-estate
agency template this site was originally built from: `Find`, `Help.aspx`, `About_Us`,
`offices`, `1290-Walnut-Creek`, and six `NNNNN-Agent-Name` rules. Every one pointed at
`/properties`, `/office` or `/team/detail/...`, none of which exist on this site, so
they produced redirect-to-404 chains. None matched a real Imperium URL, so nothing a
visitor can reach changed. Verified afterwards: the asset rule, the front controller
and the canonical-host rule all survive; `<IfModule>` tags balanced.

Also moved `RewriteEngine On` to the top of the file (it was at line 71, below the
rules) so the file reads unambiguously.

**Note on scope:** this only matters while the current build keeps running.
`imperium-lite` ships its own `.htaccess`, which replaces this file entirely on
deploy — so the junk rules disappear at launch regardless.

**Same-template leftovers still in that codebase, deliberately untouched** (they have
no view and already error, so they route nowhere): `controllers/team1.php`,
`controllers/videos.php` (1031-exchange tax content), `controllers/1products.php`,
`controllers/services.php`.

### ⚠️ Still unresolved: the canonical host

Three sources currently disagree about which host is canonical:

| Source | Says |
|---|---|
| Live `.htaccess` | redirects to **non-www** (`https://imperiumapp.com`) |
| Live `robots.txt` | sitemap at **www** (`https://www.imperiumapp.com/sitemap.xml`) |
| `imperium-lite` | canonicalises to **www** |

Two further defects in the live rule, left as-is on purpose because fixing them in
isolation would cement a decision that has not been made:

1. `[R]` with no status is a **302** (temporary). A canonical host redirect must be
   301 or it does not consolidate ranking signals.
2. The `SERVER_PORT 80` condition means it only fires over HTTP. Over HTTPS **both**
   hosts serve content with nothing consolidating them — which is why both appear in
   Google's results today.

**Decision needed.** Pick one host, then update all four together: the live
`.htaccess` rule, `robots.txt`, `SITE_URL` in [index.php](index.php), and `$base` in
[tools/generate-sitemap.php](tools/generate-sitemap.php). Search Console →
**Links → Top linked pages** settles it: whichever host holds more backlinks wins.

## 6a. Decisions taken (2026-08-07)

- **`/casestudy` stays public.** Confirmed by the owner. It remains crawlable, linked
  from the nav/footer, and included in `sitemap.xml`.
- **Tailwind CDN deferred**, tracked as item 2 above.
- **Two oversized images deleted** — `female-programmer-scanning-...jpg` (10.6 MB) and
  `friendly-customer-support-workers-...jpg` (9.8 MB), freeing **20.4 MB** of deploy
  weight. *Correction to the original audit:* these were **not** unreferenced — they
  were `background-image` values in
  [assets/css/redesign.css](assets/css/redesign.css) (the first audit pass only
  searched HTML/PHP). Their selectors `.main-container-div-2` and
  `.main-container-div-2-image-2` appear **only** in stylesheets and in no page
  markup, so the rules were dead and the images never actually loaded in a browser.
  The two dead CSS rules were removed along with the files. Both images are
  git-tracked and recoverable with `git checkout HEAD -- assets/image/`.

## 7. Maintenance rules

- Adding a page needs **four** edits: `controllers/<slug>.php`,
  `views/<slug>.blade.php`, `$allowed` in [libs/Bootstrap.php](libs/Bootstrap.php),
  and an entry in [seo/pages.php](seo/pages.php). Then re-run the sitemap generator.
- Regenerate the sitemap after any page change:
  ```
  php tools/generate-sitemap.php
  ```
- Changing the production domain means updating **four** places together:
  `SITE_URL` in [index.php](index.php), `$base` in
  [tools/generate-sitemap.php](tools/generate-sitemap.php), the `Sitemap:` line in
  [robots.txt](robots.txt), and the hardcoded absolute URLs in the static homepage.
- Never write Blade directives inside HTML comments (see the gotcha in §3).
- Titles ≤ 60 chars, descriptions 140–158 chars, one per page, never empty.

---

# Phase 2 — AEO (answer engine optimisation) — not started

Planned scope: FAQ content and `FAQPage` schema on the verticals, question-shaped
H2s, direct-answer opening paragraphs, `HowTo`/`Product` schema where it genuinely
applies, and definition blocks that featured snippets can lift.

# Phase 3 — GEO (generative engine optimisation) — not started

Planned scope: citation-friendly content structure, entity consistency across the
web, statistics and named-source blocks that LLMs quote, `llms.txt`, and monitoring
Imperium's share of voice in ChatGPT / Claude / Perplexity / AI Overviews answers.
The AI crawlers are already unblocked in [robots.txt](robots.txt) as of Phase 1.

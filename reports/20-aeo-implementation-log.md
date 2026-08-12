# AEO implementation log — session 2026-08-12

Branch: `aeo-optimization`, created off `seo-optimization` (see note below on why,
not off `main`).

## Context

The brief for this phase assumed two things that turned out not to hold in this
repo, checked before starting:

- **"The SEO foundation is merged."** It isn't — `main` is still at `758061e`
  (`git rev-parse main origin/main` both resolve there); the SEO work from the
  prior session lives only on the `seo-optimization` branch, never merged.
  Rather than block on that or merge it myself unasked, `aeo-optimization` was
  branched from `seo-optimization` directly, so this session's work sits on top
  of it either way. **Merging `seo-optimization` (and then this branch) into
  `main` is still an open action for you** — see the handoff report.
- **`/reports/02-baseline-queries.md` and `/reports/03-citation-baseline.md`.**
  Neither existed anywhere on this machine (filesystem search came back empty).
  Per the brief's own fallback ("fresh research where needed"), real
  People-Also-Ask-style questions were researched directly (two research passes,
  documented below) instead of reading a baseline file that isn't there.
  `03-citation-baseline.md` is created fresh by this session — see
  [`03-citation-baseline.md`](03-citation-baseline.md).

Everything below was verified on the local PHP dev server
(`php -S localhost:8001 router.php`, cache cleared with each Blade change):
HTTP status, PHP notices/warnings, `php -l` on every edited PHP file, JSON-LD
parsed and diffed against visible content programmatically, and headless-Chrome
screenshots for the visual pieces.

---

## 1. Architecture — one content source, wired into schema and every page

**New: `cms/data/aeo.json`.** Single source of truth for every priority page's
AEO content — `tldr`, `how_it_works`/`how_it_works_heading`, `faqs` (`q`/`a`
pairs), and for the case-studies page a `comparison_table`. Mirrors how
`seo/pages.php` already centralizes SEO metadata. All 16 pages covered: `index`,
`industry-influence`, `casestudy`, `contact`, and the 12 verticals.

**New: `helpers/Aeo.php`.** `Aeo::page($slug)` reads it (cached); `Aeo::faqSchema()`
builds `FAQPage` JSON-LD from the *same* `faqs` array a page renders visibly —
there is no second copy of the questions anywhere, so schema can't drift from
what's on the page. Required in `index.php` alongside the existing `Seo.php`.

**`helpers/Seo.php`**: `Seo::page($slug)` now auto-attaches FAQ schema (into a
new `$meta['schema_extra']` array) whenever `aeo.json` has FAQ content for that
slug — no controller had to be touched to wire this up, all 12 vertical
controllers, `casestudy`, `industry-influence` and `contact` already call
`Seo::page()`.

**`helpers/Helper.php`**: `setMetaTags()` now loops `$meta['schema_extra']` and
emits each as its own `<script type="application/ld+json">`, alongside the
existing single `$meta['schema']` slot (Service schema) — additive, nothing
about the existing Service/Breadcrumb/Organization/WebSite schema changed.

**New: `views/layouts/components/aeo.blade.php`.** One shared partial renders
TL;DR, how-it-works steps, an optional comparison table, and the FAQ — included
with a single line (`slug` variable) from any Bootstrap-based view. Renders
nothing if the slug has no AEO content, so it's safe to include everywhere.

**New: `assets/css/aeo.css`.** Framework-agnostic (no Tailwind/Bootstrap
dependency) since it's shared between the Bootstrap inner pages and the
Tailwind-compiled homepage/contact page, which share no utility classes. A
self-contained light "card" style so it reads clearly regardless of what
section it lands in. Linked from `views/layouts/app.blade.php` (all 12
verticals + casestudy + industry-influence) and `views/contact.blade.php`.

**Homepage is the one exception**, and deliberately so: `imperium homepage_final/index.html`
is raw static HTML `echo`'d by `controllers/index.php` (no Blade), and it's
already dark-themed throughout — a light `aeo.css` card would look out of place.
Two marker comments (`<!-- AEO_TLDR -->`, `<!-- AEO_FAQ -->`) were added to the
static file; `controllers/index.php` now has `renderAeoTldr()`/`renderAeoFaq()`
methods that build markup using the homepage's *own* existing Tailwind utility
vocabulary (`bg-surface-container-lowest`, `text-on-surface-variant`, etc.) and
`str_replace()` it into the markers at request time — reading from
`Aeo::page('index')`, the same source of truth every other page uses. This
keeps the homepage's FAQ text from ever drifting out of sync with `aeo.json`
while keeping the page's own dark visual language.

---

## 2. A Blade compiler bug found and fixed while building this

`views/layouts/components/aeo.blade.php`'s first draft had a doc-comment
containing an *example* `@include(...)` call, inside a `@php` block. The Blade
compiler substitutes directive syntax as plain text scanning across the whole
file **before** it becomes real PHP — so that example call silently compiled
into a second, real `$this->runChild(...)` call embedded mid-comment, which
closed the PHP tag early and turned the rest of the `@php` block (including the
actual variable assignment) into literal page output. Net effect: every page
using the partial threw `Undefined variable: aeoData` and rendered nothing
visible, while the FAQ schema (built independently by `Seo::page()`) still
generated correctly — exactly the "schema claims something the page doesn't
show" failure mode the brief warns against, caught by the
visible-vs-schema-count sweep described in §5, not by eyeballing the page.

This is the same class of bug already documented in `SEO-ACTIVITIES.md` §3
("the Blade compiler processes directives inside HTML comments") — this time
inside a `@php`-block `//` comment rather than an HTML comment. Fixed by
rewriting the comment as a `{{-- --}}` Blade comment with no directive-shaped
text inside it, and added an explicit warning in the file itself so the next
edit doesn't reintroduce it.

---

## 3. Content sourcing — what's real, what's generic, what's flagged

Every FAQ question was grounded in two research passes (general contact-center/
CX terms plus 6 verticals; the other 6 verticals plus a case-study/vendor-
evaluation cluster), checked against ranking vendor glossary pages (NICE,
Genesys, Zendesk, Five9, Talkdesk, Salesforce et al.), forum-style questions,
and — for banking — real regulatory sources (CFPB Reg F, NIST SP 800-63B on
KBA deprecation). One cluster (business center / multi-tenant telephony) came
back with genuinely thin real-world search signal; the FAQ for that page was
scoped narrower rather than padded with invented questions — see the note in
`aeo.json`'s `businesscenter` entry and the research transcript.

Every *answer* is grounded in one of:
- the CMS's own existing page copy (`cms/data/content.json` description fields)
- copy already published in `seo/pages.php` (Phase 1 SEO)
- the site's own real case-study PDFs (`assets/pdf/*.pdf`, extracted with
  `pdftotext`) — see §4
- real named-client facts extracted from the per-vertical product-graphic
  images (`extra_image` field) — see §4
- generic, non-Imperium-specific facts (e.g. "what is CTI") with no vendor claim

Nothing was invented. Where a genuinely useful fact came up in research but
couldn't be verified against Imperium's own material — UAE Central Bank
telemarketing/retention rule specifics, insurance policy-lapse-reduction
percentages from third-party vendor blogs — it was deliberately **left out**
rather than published unverified. See the handoff report for what that leaves
open.

### Case study comparison table (new, on `casestudy`)

The case-studies page previously rendered five cards linking straight to PDF
downloads with no on-page substance beyond a truncated description — a
genuinely thin, non-extractable page. `pdftotext -layout` on all five PDFs
surfaced real, specific, previously-invisible facts: Emirates Hospital Group's
centralized 800 toll-free number and ~1,000 calls/day before, Concordia's
~200 calls/hour, Growthgate's and Macemacro's named IT contacts and direct
quotes ("The migration was completed in a couple of days" — Randhir, IT
Specialist, Growthgate Capital). These now populate a real "Case studies at a
glance" table (Client / Industry / What was delivered / Result in their own
words) with a source note that it's Imperium's own published material, not
independently audited. See [`cms/data/aeo.json`](../cms/data/aeo.json)'s
`casestudy.comparison_table`.

### Named enterprise clients trapped in images — found and partially fixed

Nine of the twelve vertical pages carry a CMS `extra_image` field — a PNG
graphic titled "Core Products Implemented / Suggested Products" — that turned
out to contain **real, named enterprise clients nowhere else on the site**:
ICICI Bank (Singapore), Al Masraf Bank, Cisco UCCX, Brother International,
Konica Minolta, Sharaf DG, Al Falah University, Al Ain University, ELABELZ,
Sellanycar.com, Skynet Courier, and others (read directly off the images,
listed per-page in `aeo.json`). This is exactly the "genuine differentiators
under-used in content" gap flagged in the prior SEO session's competitor
research — except the facts weren't just under-used, they were **completely
invisible to any crawler or AI engine**, baked into image pixels behind a
generic `alt="Healthcare Products"`-style tag.

Two things were done with this find:
1. **Extracted the real client names into `aeo.json`'s `tldr` field** for the
   9 affected verticals (healthcare, logistics, education, e-commerce, real
   estate, retail, banking, finance, insurance) — now genuinely extractable,
   citable text.
2. **Rewrote all 9 images' `alt` text** from generic (`"Insurance Products"`)
   to descriptive and fact-bearing (e.g. `"Imperium insurance products
   deployed at NAS Administration Service: Avaya IPOCC with Custom Reports,
   Imperium CTI Connect and Imperium SMS Gateway"`) — a same-session, safe
   on-page fix per the working method (image alt text, no risk to layout/SEO).

**Not fixed, flagged instead** (see handoff report): the images themselves
still hold the primary copy of this content, invisible to text-based crawlers,
and at least two of the nine (E-Commerce and Real Estate) contain caption text
clearly copy-pasted from the Education template without updating (student/
parent-feedback captions on non-education verticals) — a content-QA issue in
the source asset that needs the owner's correction, not something to guess a
fix for. `Pentacare Medical Services` / `Fatima Healthcare` appear on the
**Insurance** image specifically, which reads as another likely copy-paste
mismatch (those read as healthcare providers, not insurance clients) —
deliberately **not** cited anywhere in this session's new copy for that reason.

---

## 4. Internal linking

Real, contextual cross-links were added between pages that already reference
each other's subject matter, rather than link-stuffing:

| From | To | Why |
|---|---|---|
| `finance` FAQ | `/debtcollection` | Finance's own debt-collection capability has a dedicated, more detailed page |
| `realestate` TL;DR | `/casestudy` | Names Omniyat, whose full case study lives there |
| `casestudy` comparison table (Emirates Hospital row) | `/healthcare` | Industry match |
| `casestudy` comparison table (Omniyat row) | `/realestate` | Industry match |
| `casestudy` comparison table (Concordia row) | `/helpdesk` | Concordia's case study is specifically about their help-desk call reporting, a closer functional match than any "facility management" page (which doesn't exist) |
| `casestudy` FAQ | `/healthcare`, `/realestate`, `/industry-influence` | Same industry matches, plus a link to the full verticals hub |
| `industry-influence` FAQ | `/helpdesk`, `/realestate` | Same Concordia/Omniyat matches, in the hub page's own "how do I pick" FAQ |
| `index` (homepage) FAQ | `/casestudy` | The implementation-timeline FAQ names Growthgate and Emirates Hospital Group by name |

Implementation note: the shared partial and the homepage's PHP-generated markup
both switched from escaped (`{{ }}`) to raw (`{!! !!}`) output for `tldr`,
FAQ-answer and comparison-table-cell text specifically so these could carry
real `<a href>` tags. This is safe here — `cms/data/aeo.json` is our own
authored content, not user input, so there's no XSS surface — and it's also
schema-compliant: Google's FAQPage guidelines explicitly permit a limited HTML
subset (`<a>`, `<b>`, `<em>`, `<p>`, lists) inside `Answer.text`, which is
exactly what's now embedded there. FAQ *questions* and table headers stayed
escaped plain text (never need markup).

---

## 5. Verification

- **`php -l`** on every edited/new PHP file (`controllers/index.php`,
  `helpers/Aeo.php`, `helpers/Seo.php`, `helpers/Helper.php`, `index.php`) —
  clean.
- **Full page sweep**, all 16 routes, after clearing the Blade cache: every
  page returns `200`, zero PHP notices/warnings/fatals.
- **Visible-content-vs-schema parity check** (the check that caught the Blade
  bug in §2): programmatically counted `imp-aeo-faq-q` elements on each page
  and compared to the `FAQPage.mainEntity.length` in that page's JSON-LD.
  Every one of the 16 pages matches exactly (homepage checked with its native
  markup selector, since it doesn't use the shared CSS classes).
- **JSON-LD validity**: every `<script type="application/ld+json">` block on
  every page parsed with `JSON.parse` — no failures, including the ones now
  carrying embedded `<a>` tags in `Answer.text` (verified the tags survive
  `json_encode`/`JSON.parse` round-trip intact).
- **Internal links resolve**: every new `href="/..."` target hit and confirmed
  `200`.
- **Visual regression**: headless-Chrome screenshots of `/healthcare` (full
  page: existing content, the products-implemented graphic, the new TL;DR/
  how-it-works/FAQ), `/casestudy` (new comparison table + FAQ), and the
  homepage's new TL;DR band. All read cleanly, on-brand (orange accent, same
  type system), and correctly styled — including the new inline internal
  links, which needed a small Tailwind safelist fix (see below) to render
  correctly on the homepage.
- **Tailwind safelist fix**: the homepage's PHP-injected markup uses a handful
  of utility classes (`max-w-4xl`, `sm:text-lg`, `border-y`, `space-y-8`,
  `opacity-70`) that don't appear in the static HTML file Tailwind's CLI
  scans (since they're only ever generated at request time by
  `renderAeoTldr()`/`renderAeoFaq()`). Without a safelist entry these silently
  compile to nothing — caught by grepping the compiled CSS for each class
  before considering the homepage done, not by assuming it worked. Added to
  `build/tailwind.home.config.js`'s new `safelist` array, documented inline
  for the next person adding a class there.

---

## 6. Sections of the brief addressed without new code

- **Question-shaped headings (§A)**: every vertical page gained a real
  question-shaped H2 ("How does Imperium's healthcare contact center work?")
  plus 3–5 question-shaped H3s (the FAQ items) — a jump from zero question
  headings to 4–6 per page. The pre-existing `section_title` H2 (CMS-editable
  marketing copy, e.g. "Imperium Telemedicine & Healthcare Solutions") was
  deliberately left as-is rather than force-converted to a question: it now
  sits alongside genuinely question-shaped headings and doesn't need to double
  as one. `casestudies.blade.php` and `industry-influence.blade.php`'s own
  top-level H2s *were* rewritten to questions ("What results has Imperium
  delivered for real clients?", "Which industries does Imperium build contact
  center solutions for?") since those were generic labels with no real
  question competing for the same slot.
- **Title tags / meta descriptions (§C)**: reviewed all 16 against the "target
  question + crisp answer hook" ask. Found they already function as direct
  answers (Phase 1 SEO wrote them as complete factual statements, not keyword
  fragments — e.g. "Patient-first communication for hospitals and clinics —
  appointment IVR, telemedicine routing, omnichannel support and CRM-
  integrated telephony from Imperium.") and are already tuned to Google's
  display-length limits (49–58 char titles, 147–158 char descriptions, per the
  SEO log). Rewriting them for a marginal AEO-framing gain risked regressing
  validated SEO work for no clear benefit, so **no changes were made** — a
  deliberate decision, not an oversight.
- **Server-rendered, crawlable (§D)**: all new content (TL;DR, how-it-works,
  comparison table, FAQ) renders in the initial HTML response on every page —
  confirmed by `curl`, not by opening a browser (no JS renders any of it).
- **Freshness dates (§E)**: every page with AEO content shows a visible
  "Reviewed by the Imperium team · last updated 12 August 2026" line. This is
  honest — these pages *were* reviewed/edited today — as opposed to inventing
  a named author byline, which stays unresolved; see the handoff report.

## Files changed this session

| File | Change |
|---|---|
| `cms/data/aeo.json` (new) | TL;DR/how-it-works/FAQ/comparison-table content for all 16 pages |
| `helpers/Aeo.php` (new) | Reads `aeo.json`, builds FAQPage JSON-LD |
| `views/layouts/components/aeo.blade.php` (new) | Shared partial rendering TL;DR/how-it-works/table/FAQ |
| `assets/css/aeo.css` (new) | Framework-agnostic styling, shared by Bootstrap pages + contact |
| `helpers/Seo.php` | Auto-attaches FAQ schema via `$meta['schema_extra']` |
| `helpers/Helper.php` | `setMetaTags()` loops `schema_extra` |
| `index.php` | Requires `helpers/Aeo.php` |
| `controllers/index.php` | `renderAeoTldr()`/`renderAeoFaq()`, injected into the static homepage at two markers |
| `imperium homepage_final/index.html` | Two AEO marker comments, link-color CSS rule |
| `build/tailwind.home.config.js` | `safelist` for PHP-injected-markup-only classes |
| `assets/css/tailwind-home.min.css` | Rebuilt |
| `views/layouts/app.blade.php` | Links `aeo.css` |
| `views/contact.blade.php` | Links `aeo.css`, includes the AEO partial |
| `views/casestudies.blade.php` | AEO partial + comparison table; question H2; card titles demoted h2→h3; fixed a pre-existing unclosed `.container` div |
| `views/industry-influence.blade.php` | AEO partial; question H2; cleaned up 3 pre-existing stray closing `</div>` tags |
| `views/healthcare.blade.php`, `debtcollection.blade.php`, `helpdesk.blade.php`, `businesscenter.blade.php`, `logistics.blade.php`, `educationsector.blade.php`, `ecommerce.blade.php`, `realestate.blade.php`, `retail.blade.php`, `banking.blade.php`, `finance.blade.php`, `insurance.blade.php` | AEO partial include |
| `assets/css/style.css` | `.topcontent h2.post_title` selector → tag-agnostic, to support the h2→h3 fix above |

Not yet committed — see the summary for the commit(s) grouping these changes.

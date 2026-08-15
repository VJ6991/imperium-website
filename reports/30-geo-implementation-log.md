# GEO implementation log — session 2026-08-14/15

Branch: `geo-optimization`, created off `aeo-optimization` (see note below — same
situation as the AEO session).

## Context

The brief said "SEO and AEO are merged." Checked before starting: `main` and
`origin/main` are both still at `758061e` — the same pre-SEO commit as when the
AEO session started. Neither `seo-optimization` nor `aeo-optimization` has
actually been merged. This is the third phase in a row where the brief's
premise didn't match git state; `geo-optimization` was branched from
`aeo-optimization` (which has both prior phases' work) rather than `main`, for
the same reason as last time — this session's work needs the SEO/AEO
foundation under it regardless of what's merged where, and merging to `main`
is a call for you, not something to do unasked. **This is now a recurring
pattern across all three phases and is the single most important item in the
handoff report** — all three branches need reconciling into `main` before any
of this ships.

Per the brief's instruction to "refresh research before major decisions,"
research on current (August 2026) GEO practice preceded every implementation
choice below — sources and dates are cited inline and in
[`31-llms-txt-and-crawler-report.md`](31-llms-txt-and-crawler-report.md).

---

## 1. Built a real About page — the single biggest gap found

`imperium-lite` had no About page at all. Worse: `cms/data/content.json` already
contained a complete, real, previously-published "about" content section
(company background, vision, real images) — just never wired to a route. The
currently-live full site still serves this content at `/about`; `imperium-lite`'s
own `.htaccess` redirects that exact path to the homepage (`^about(/.*)?$ → /`),
discarding it. E-E-A-T without an About page is a real gap the brief explicitly
calls out ("a strong About page"), so this was the highest-priority build this
session.

**What shipped:**
- `controllers/about.php`, `views/about.blade.php` — same pattern as every
  other page controller.
- `about` added to `libs/Bootstrap.php`'s route whitelist, `seo/pages.php`
  (title/description), `Seo::$names` (breadcrumb label), `cms/data/aeo.json`
  (TL;DR, 4-step "what does Imperium actually do" summary, 5-question FAQ).
- The two source images the CMS content already referenced
  (`image/cms/1773381706_call.jpg`, `image/mission.jpg`) didn't exist in
  `imperium-lite`'s assets — found and copied in from the full-site copy at
  `c:/programming/imperium-website` (a one-time asset copy, the same pattern
  Phase 1 SEO already used for the 10 vertical-page product images and the
  self-hosted fonts — not a runtime dependency, consistent with `CLAUDE.md`'s
  standalone requirement).
- Regenerated `sitemap.xml` (`php tools/generate-sitemap.php`) — 17 URLs now.

**Content correction, not fabrication.** The reused CMS copy had two problems,
fixed in `cms/data/content.json` before publishing:
1. `"Imperium Software Technologies FZCO"` — conflicts with the legal name
   used everywhere else on the site today (`...DMCC`, per
   `Seo::organizationSchema()`). Changed to drop the specific legal suffix in
   this prose rather than assert either one is currently correct — see the
   NAP-consistency finding in
   [`32-authority-and-offsite-plan.md`](32-authority-and-offsite-plan.md).
2. `"almost a decade of association with Avaya"` and `"we have recently
   upgraded ourselves..."` — stale relative-time language (the copy is
   old; "almost a decade" from a 2005 founding would now read as over two
   decades, and "recently" is meaningless without a date). Reworded to
   `"a longstanding certified Avaya DevConnect Technology partner"` and
   dropped "recently" — same facts, no invented specifics, no stale
   arithmetic. Full diff in `git log` for `cms/data/content.json`; backup at
   `cms/data/content.json.bak-before-geo-about`.

**Two real bugs found and fixed while building this** (both predate this
session, surfaced by exercising a path nothing had exercised before):
- The CMS's stored image paths already included an `assets/` prefix
  (`"assets/image/cms/...jpg"`), but the site's `asset()` helper also prepends
  `assets/` — every other page's CMS image fields are stored *without* that
  prefix, so this one inconsistency silently double-prefixed and 404'd. Fixed
  by stripping the redundant prefix from the two `about` image fields in
  `content.json`, matching the convention every other page already follows.
- The shared AEO partial's `how_it_works` list only existed (before this
  session) as plain sentences with no links, so it was never caught that its
  `{{ }}` (escaped) output would print literal `&lt;a href...&gt;` text the
  moment a `how_it_works` entry contained a link — which the About page's
  content does. Fixed by switching that one `@foreach` to `{!! !!}` (raw
  output), matching how `tldr`/`faqs`/table-cells were already handled in the
  AEO phase for the same reason. Verified with a full-site sweep for
  `&lt;a href` afterward — zero matches.

**Verified:** `php -l` clean; full 17-page sweep (`200`, zero PHP notices);
FAQPage schema (5 questions) matches the 5 visible FAQ items exactly; both
images return `200` after the path fix; headless-Chrome screenshot confirms
clean rendering, working images, and correctly-rendered (not escaped) internal
links.

---

## 2. `llms.txt`

Added at the repo root, following the [llmstxt.org](https://llmstxt.org/) v2
spec (H1 name, blockquote summary, H2-grouped links with one-sentence
descriptions each). 275 words — well under the ~500-word guidance. Every one
of the 16 linked URLs was hit and confirmed `200` before considering this
done (a curated index with a dead link in it undermines the whole point).

**Why this is a small, cheap addition and not a headline GEO win**: current
research (see report 31) shows real AI-search crawlers (GPTBot, ClaudeBot,
PerplexityBot, OAI-SearchBot, Google-Extended) overwhelmingly crawl HTML
directly and mostly skip `/llms.txt`; adoption sits around 10% after 18
months; Google's Gary Illyes and John Mueller have both said on the record
Google doesn't use it. It's kept in scope because it's genuinely cheap (one
file, no ongoing cost) and is explicitly a forward bet on agentic/B2A tooling
that does read it — not because it's expected to move citation numbers on its
own. Full sourcing in report 31.

No `llms-full.txt` companion file was added — that's a much larger
maintenance commitment (a full-site text export kept in sync) for a spec
extension with even less evidence of use than the base file. Flagged as an
explicit non-decision, not an oversight.

---

## 3. IndexNow — built, deliberately not executed

`tools/indexnow-submit.php` (new) submits every sitemap URL to the IndexNow
API in one bulk POST, and `77b34666e313801d1d9fc85dfebca50d.txt` (new, at the
repo root) is the required key-verification file. Research (report 31) found
Bing's index is the retrieval layer for ChatGPT Search, Copilot, DuckDuckGo
and Yahoo — a page missing from Bing is invisible to those regardless of
Google ranking — and IndexNow is the standard way to get new/changed pages
into that index in minutes instead of waiting on a crawl cycle.

**Why it wasn't run**: this script's only job is to tell a live third-party
API "these production URLs changed, please recrawl them" — a real action
against a system outside this repo, for a domain (`www.imperiumapp.com`) that
doesn't yet serve any of this session's changes (nothing here is deployed).
Running it now would likely just fail key verification (the key file isn't
live yet) and, more importantly, submitting on a domain's behalf isn't a call
to make silently. It's ready to run — `php tools/indexnow-submit.php`,
immediately after `php tools/generate-sitemap.php` — the moment this ships to
production, or wire it into whatever deploy process exists.

---

## 4. Fact-sourcing pass on existing content

**Homepage "Delivering measurable outcomes" section** (40% faster response
time, 30% reduction in resolution time, 2X agent productivity, 100%
conversation visibility): these four numbers have no visible methodology,
date, or sample — exactly the kind of unsourced statistic current GEO research
(report 31) shows AI engines are *less* likely to cite, not more (a controlled
study found statistics *with* a clear source getting a measurable citation-
likelihood boost; unsourced ones don't get that lift and read as a lower-trust
claim to a fact-checking process). Added one line under the section — `"See
sourced results from named clients in our case studies"`, linking to
`/casestudy` — without touching the four numbers themselves, since I can't
verify or supply a methodology for someone else's existing marketing figures.
This is a claim→evidence pattern addition, not a rewrite; whether/how to
actually source the four numbers is flagged as an open decision in report 32.

**Organization schema — added `award: "Avaya DevConnect Technology Partner"`**
(`helpers/Seo.php`, and the homepage's separate hardcoded schema copy in
`imperium homepage_final/index.html`, kept in sync the same way Phase 1 SEO
already keeps that duplicate in sync manually). This clears a higher bar than
"stated somewhere on the site": it's now visibly stated on the new `/about`
page *and* independently corroborated by a dated, named third-party source —
TahawulTech.com, February 28 2024 (full sourcing and the more significant
finding that came out of that research — a real, named, quotable Imperium
executive — is in report 32, since it's squarely an authority/E-E-A-T finding).
`foundingDate` and `parentOrganization` were **not** added despite appearing in
the same About-page copy — see the NAP-consistency section of report 32 for
why those stay open pending your confirmation.

---

---

## 5. Removed: the homepage TL;DR ("In short") band

Added earlier in this same session (§4 above / the AEO phase's homepage
injection work), **removed 2026-08-15 at the owner's explicit request**, after
a discussion about whether it could instead be kept in the page but hidden
from view. It could not, for reasons worth recording here since the same
question will likely come up again for other pages:

- **Google's spam policies explicitly treat hidden text as a violation** —
  content present in HTML but hidden via CSS (`display:none`, tiny/
  transparent text, off-screen positioning) risks a manual action, not just
  reduced benefit. This applies regardless of *where* in the DOM or on which
  page the hidden content lives — moving it to an unlinked page or a hidden
  element elsewhere doesn't avoid the problem, and showing crawlers content a
  real visitor would never see is cloaking, a related and generally more
  serious violation.
- **Several AI crawlers render pages rather than just parsing raw HTML now**,
  so "invisible to a human" and "invisible to the crawler" overlap more than
  they used to.
- More fundamentally, **every design decision in the SEO/AEO/GEO work across
  all three phases has been built on "never mark up content not visibly on
  the page"** — hidden-but-present content is the exact failure mode the
  visible-content-vs-schema parity checks throughout this project exist to
  catch. Making an exception here would have undermined the premise the rest
  of the AEO/GEO build relies on.
- The legitimate middle ground — a genuinely visible but collapsed/
  expandable "Quick answer" toggle, the same pattern as an FAQ accordion,
  which Google does *not* treat as hidden content — was offered but not
  wanted either. The owner's call was to remove it outright rather than
  restyle it.

**What was removed**: `renderAeoTldr()` and its call site in
`controllers/index.php`; the `<!-- AEO_TLDR -->` marker and its explanatory
comment in `imperium homepage_final/index.html`; the `#tldr` CSS link-styling
rule (simplified to just `#faq`, since that's now the only injected section
using it); and the four Tailwind safelist entries
(`max-w-4xl`/`sm:text-lg`/`border-y`/`opacity-70`) that existed only to
support that markup — `space-y-8` is the only one still needed, for the FAQ
section.

**What was deliberately left alone**: the `tldr` field itself in
`cms/data/aeo.json`'s `index` entry — it's inert, unrendered data now, not a
half-finished feature; harmless to keep as a documented summary, and cheap to
wire back up (or point somewhere else, e.g. a meta description) later if
wanted. The homepage FAQ section, its schema, and every other page's TL;DR
(which use the shared, always-visible `views/layouts/components/aeo.blade.php`
partial, not this homepage-specific code path) are unaffected.

**Verified**: `php -l` clean; homepage still `200`, zero PHP notices; "In
short" no longer appears anywhere in the rendered HTML; the FAQ section and
all three JSON-LD blocks (Organization, WebSite, FAQPage — 6 questions,
unchanged) still render and validate correctly; Tailwind CSS rebuilt clean
with the trimmed safelist.

---

## Files changed this session

| File | Change |
|---|---|
| `controllers/about.php`, `views/about.blade.php` (new) | About page |
| `assets/image/cms/1773381706_call.jpg`, `assets/image/mission.jpg` (new) | Copied in from the full-site source for the About page |
| `libs/Bootstrap.php` | `about` added to the route whitelist |
| `seo/pages.php` | `about` title/description entry |
| `helpers/Seo.php` | `about` breadcrumb name; `award` added to `organizationSchema()` |
| `cms/data/aeo.json` | `about` TL;DR/how-it-works/FAQ entry |
| `cms/data/content.json` | Stale/conflicting About copy corrected (FZCO→generic, "almost a decade"→"longstanding", double `assets/` image-path bug fixed) |
| `cms/data/content.json.bak-before-geo-about` (new) | Pre-edit backup, matching the existing `.bak-before-seo` convention |
| `views/layouts/components/aeo.blade.php` | `how_it_works` switched to raw output (bug fix, see §1) |
| `sitemap.xml` | Regenerated, 17 URLs |
| `llms.txt` (new) | AI-agent-readable page index |
| `77b34666e313801d1d9fc85dfebca50d.txt` (new) | IndexNow key-verification file |
| `tools/indexnow-submit.php` (new) | IndexNow bulk-submission script (not yet run — see §3) |
| `imperium homepage_final/index.html` | Metrics-section evidence link; `award` added to the homepage's hardcoded schema copy; TL;DR marker/comment/CSS removed (§5) |
| `controllers/index.php` | `renderAeoTldr()` and its call site removed (§5) |
| `build/tailwind.home.config.js` | Safelist trimmed to just `space-y-8` (§5) |
| `assets/css/tailwind-home.min.css` | Rebuilt |

Not yet committed — see the summary for the commit(s) grouping these changes.
Two further changes (robots.txt, `.htaccess`) are proposed as diffs awaiting
your approval in
[`31-llms-txt-and-crawler-report.md`](31-llms-txt-and-crawler-report.md) —
neither has been applied.

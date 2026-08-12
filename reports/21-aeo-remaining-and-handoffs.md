# AEO — remaining work & handoffs

Companion to [`20-aeo-implementation-log.md`](20-aeo-implementation-log.md).
Nothing in this file has been implemented — it's blocked on your data/access,
needs a decision only you can make, or is out of this session's scope.

---

## Blocked on your data or a decision

### 1. `seo-optimization` and `aeo-optimization` are not merged to `main`
Flagged at the top of the implementation log: the brief said "the SEO
foundation is merged," but `main`/`origin/main` are both still at the
pre-SEO-work commit. `aeo-optimization` was branched from `seo-optimization`
so this session's work sits on top of it either way, but **someone needs to
merge both branches into `main`** before any of this actually ships. Not done
automatically since merging to `main` is exactly the kind of action that
should be confirmed with you first, not assumed.

### 2. Named-client facts are still primarily locked in images
Nine vertical pages' `extra_image` graphic (see implementation log §3) is the
**primary** copy of real, named-client proof — Cisco UCCX, ICICI Bank,
Konica Minolta, Al Falah University, and others. This session extracted those
facts into `aeo.json`'s TL;DR text and rewrote the images' alt text as an
immediate, safe fix, but the images themselves remain unreadable to any
crawler or AI engine beyond that alt text. Two of the nine images (E-Commerce,
Real Estate) also contain caption text that reads as copy-pasted from the
Education template and doesn't fit ("for students to connect to helpdesk" on
the E-Commerce "suggested products" list; "for studnets and partents to give
feedback" — sic — on Real Estate's).

**What I need from you:** confirm whether these are genuine errors (in which
case the fix is regenerating the graphic with correct copy, or — better for
long-term crawlability — replacing the PNG with real HTML/CSS so it's both
correct and indexable without depending on alt text). I didn't touch the
images themselves; guessing a "correct" caption for an image I didn't create
isn't something I'll do without your confirmation of what it should say.

### 3. Two named clients on the Insurance page look mismatched
`Pentacare Medical Services` and `Fatima Healthcare` appear on the **Insurance**
vertical's product-graphic image, but read like healthcare providers, not
insurance clients — most likely another copy-paste artifact (see item 2).
`NAS Administration Service` (a real insurance/claims-administration-adjacent
name) was the only one of the three cited in this session's new copy, for
that reason. **Confirm which of the three actually belong on the insurance
page** and I can correct the `aeo.json` entry and, if warranted, the image.

### 4. Named author bylines — still unresolved (carried over from the SEO phase)
The SEO-phase handoff already flagged this and it wasn't addressed this
session either, deliberately: every AEO page now shows a truthful "Reviewed by
the Imperium team · last updated 12 August 2026" line (honest, since these
pages genuinely were edited today), but the brief's "named author bylines with
real credentials" ask needs an actual person's name and title from you — I
won't invent one. Once you have a name, wiring it into the `aeo.json`
`last_updated`/reviewer fields and the schema is a small, mechanical follow-up.

### 5. UAE-specific regulatory claims deliberately left out
Research surfaced plausible-sounding UAE Central Bank telemarketing rules and
specific call-recording retention periods for banking, and third-party stats
on insurance policy-lapse reduction from proactive renewal reminders (25–30%
→ 8–12%, cited across a few vendor blogs, not verified against a primary
source). None of this made it into `banking`'s or `insurance`'s FAQ content —
getting a compliance-adjacent claim wrong on a banking page is higher-stakes
than leaving the FAQ answer more general. **If you have verified, current
figures for either**, they'd meaningfully strengthen those two pages' FAQ
answers (the "how does IVR authentication work," "are customer calls
recorded," and "can policyholders renew via IVR" answers are the ones that
would benefit most).

### 6. Stale facts to verify (per your instruction not to guess)
- Growthgate Capital's case study lists "USA +1 408 518 2725" as a contact
  number in the PDF footer, alongside the UAE/Singapore/India numbers used
  everywhere else on the live site — there's no US office anywhere else in
  the codebase (`Seo::organizationSchema()` lists only Dubai/Singapore/
  Chennai/Bengaluru). Not used in any new copy this session; flagging in case
  it indicates either a discontinued US presence or a partner/reseller number
  worth knowing about.
- The homepage's hardcoded `<meta name="description">` (in the static
  `imperium homepage_final/index.html`, separate from `seo/pages.php`) claims
  "Avaya, Cisco & Microsoft telephony software," but the page's own visible
  partner-logo strip lists Avaya, Microsoft, AWS, Google Cloud, Zoom, Sestek
  and Globitel — **no Cisco logo anywhere on the page**. This session's new
  AEO copy deliberately avoided citing Cisco as a partner anywhere for this
  reason. Either the meta description is stale (Cisco partnership ended or
  was never real) or the partner strip is missing a logo — worth a quick
  confirmation, since it's a factual claim currently live on the site
  independent of anything this session touched.

---

## Scope decisions made, not blockers — flagging so you know they were deliberate

- **No `Article`/`BlogPosting` schema.** There's no blog (flagged as a bigger,
  separate initiative in the SEO-phase handoff, item 7) so there's no content
  to attach that schema type to. `FAQPage` was the schema type that actually
  applied to existing pages.
- **No `HowTo` schema.** The "how it works" sections describe how Imperium's
  *system* behaves, not a sequence of steps a *user* performs — forcing
  `HowTo` onto marketing/product-description content would be exactly the
  "marking up content that isn't really that type" the brief warns against.
- **No `Product`/`Offer`/`Review`/`AggregateRating` schema.** No e-commerce
  checkout, no public pricing, and no numeric ratings visible anywhere on the
  site to back a rating claim.
- **Titles/meta descriptions left unchanged.** See implementation log §6 —
  reviewed and judged already well-aligned with the "answer hook" ask from
  Phase 1 SEO; rewriting for a marginal gain risked regressing validated work.

---

## Re-test plan

- **Rich Results Test** (`search.google.com/test/rich-results`) against a few
  live URLs once deployed — particularly `/casestudy` (comparison table +
  FAQPage) and the homepage (FAQPage with embedded `<a>` tags in `Answer.text`
  — confirm Google's validator is happy with that, not just `JSON.parse`).
- **Schema Markup Validator** (`validator.schema.org`) as a second opinion on
  the same URLs.
- **Google Search Console → Enhancements → FAQ** (once indexed) to see if FAQ
  rich results actually start appearing in search — note Google has scoped
  FAQ rich results down over time (mostly government/health/authoritative
  sites get the visual treatment now), so the schema is worth having
  regardless but the SERP visual isn't guaranteed even when everything is
  implemented correctly.
- **AlsoAsked / a real PAA-scraping tool**, if you have access to one — this
  session's question research used web search plus cross-referencing
  competitor vendor pages as a PAA proxy (documented per-cluster in the
  implementation log), which is solid but not the same as raw PAA/autocomplete
  data. Re-verify the `businesscenter` and `educationsector` clusters
  specifically — both were flagged during research as having thinner
  real-signal backing than the others.
- **Manual read-through** of the two mismatched-image items (§2, §3 above) —
  those need your eyes, not another automated check.

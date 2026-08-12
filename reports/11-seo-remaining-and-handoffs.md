# SEO — remaining work & handoffs

Companion to [`10-seo-implementation-log.md`](10-seo-implementation-log.md).
Everything here is either blocked on data/access only you have, or is a
site-wide/robots.txt-class change this session deliberately did not apply
without your sign-off (per your working-method instruction). Nothing in this
file has been implemented.

---

## Blocked on your data or a decision

### 1. Search Console cross-check (launch-blocking)
Carried over unchanged from the prior session — still the single highest-risk
open item. The codebase is authoritative for what `imperium-lite` serves
today; it is **not** authoritative for what Google has actually indexed from
the old site. Known proof: `/products/avayaaura` and `/products/icep` are
indexed but don't exist in any deployed source.

**What I need from you:** export **Search Console → Indexing → Pages** and
**Performance → Search results → Pages (last 12 months)**, and pass me the
list. I'll diff it against the redirect map in `.htaccess` and add whatever's
missing.

### 2. Canonical host — production DNS/hosting config
Verified this session (see implementation log §4) that `imperium-lite` itself
is internally 100% consistent on `www.imperiumapp.com` — `index.php`,
`.htaccess`, `robots.txt`, and the sitemap generator all agree. What I
**can't** verify from the repo: whether the actual production host/DNS in
front of the domain enforces `www` the same way once `imperium-lite` is
deployed there, and which host (`www` vs bare) currently holds more backlinks
per **Search Console → Links → Top linked pages** — that data point is what
should confirm `www` is the right permanent choice before launch (rather than
just inheriting whatever this build already assumes).

### 3. E-E-A-T: published/updated dates and author bylines
Checked every view under `views/` — none carry a visible published date,
last-updated date, or author byline. This is a real gap against your brief's
"visible published + last-updated dates, and named author bylines with real
credentials where content warrants authority" ask, and it's most visible on
`casestudy` and the 12 vertical pages, which are the site's strongest
proof/E-E-A-T content.

**Why I didn't add anything:** I can't invent a byline, a credential, or a
publish date — that would be exactly the kind of guessed fact your brief says
not to fabricate. **What I need from you:** who should be credited (name +
real title/credential) and, for existing content, either real publish dates
or confirmation that "reviewed/updated" dates can just be today's date going
forward. Once I have that I can wire it into the templates directly — it's a
small, mechanical change once the source facts exist.

### 4. Stale facts/stats
None found hardcoded in `imperium-lite`'s current copy (titles/descriptions
were rewritten in Phase 1 to avoid unverifiable claims). Flagging the
category as still open per your brief, not because I found a specific stale
number — if you add stat-driven content per item 6 below, that's where this
would start to matter.

---

## Proposed diffs awaiting your approval (robots.txt-class changes)

Per your instruction, robots.txt/site-wide changes are proposed here rather
than applied.

### 5. `robots.txt`: block the new build-tooling folders
This session added `package.json` + `build/` (Tailwind CLI config) to the repo
(see implementation log §1, §3). `.htaccess` already blocks `build/` and
`node_modules/` at the server level (403), and `node_modules/` is gitignored
so it can never ship — but `robots.txt` wasn't touched, so for consistency
with the existing pattern (`cms/`, `cache/`, `seo/`, `tools/` are all already
disallowed there) you may want this too:

```diff
 Disallow: /seo/
 Disallow: /tools/
+Disallow: /build/
```

(`node_modules/` doesn't need a line — it's never deployed, so there's
nothing for a crawler to reach.) Low risk, purely defense-in-depth — the
`.htaccess` 403 already prevents access either way.

---

## Content depth & topical authority (proposals only, not drafted)

Per your brief: "propose (and, where I approve, draft)". Nothing below has
been written — this is the prioritized plan for you to green-light pieces of.

Carried forward from the prior session's competitor research
(`SEO-ACTIVITIES.md` §4 — ZIWO, Voxtron, Brightcall, Bell Integration): the 12
vertical pages are a real differentiator most competitors don't match at this
depth, but three content gaps are costing rankings to competitors who do have
them.

### 6. Comparison / "vs" pages — highest impact-to-effort
High-intent, mid-funnel, comparatively cheap to produce. ZIWO ranks on
"X vs Y" and "best contact center software UAE"-type queries; Imperium has
none. Proposed starting set (pick based on who you actually compete against
in sales cycles):
- "Imperium vs [regional competitor]" — 2–3 pages against the named
  competitors from the research (ZIWO, Voxtron, Brightcall)
- "Best contact center software UAE [current year]" — a comparison/roundup
  format, positions Imperium as the objective source even where it isn't #1
  on every axis

### 7. Resource/blog hub
The old site had `/blog-news`; this build doesn't. This is where topical
authority and (later, in the GEO phase) AI-answer citations come from —
without it there's no ongoing publishing surface at all. Needs: an `IMK_Blog`
controller + view, a content model (even a flat JSON/Markdown list to start,
consistent with how `cms/data/content.json` already works elsewhere in this
codebase), and `Article`/`BlogPosting` schema. This is the largest single
piece of net-new engineering here — recommend scoping it as its own task
rather than folding into an SEO on-page pass.

### 8. Arabic content
Largest untapped keyword pool in the regional market per the competitor
research — every serious MENA competitor targets Arabic, Imperium currently
targets none. Requires `hreflang` (correctly absent today since the site is
English-only), RTL layout work, and translated copy. Biggest lift of the
three; sequence it last unless you have translation resources already lined
up.

### 9. Under-used differentiators
Named in the prior session's research as real trust signals competitors lead
with and Imperium currently buries: the Avaya DevConnect partnership, Cisco
and Microsoft partnerships, named enterprise clients, and the four offices
across AE/SG/IN. Comparison pages (item 6) and a resource hub (item 7) are
natural places to surface these explicitly rather than leaving them implicit
in the partner-logo strip.

---

## Off-page / authority — plan only, no work performed

Per your brief, no outreach, no link building, no fabricated links. You did
not provide backlink-profile data (Ahrefs/Semrush/GSC export), so no toxic-link
audit or "strong existing links to build on" analysis could be done this
session — that's the starting point once you share it.

**Prioritized, legitimate link-earning plan** (ordered by effort-adjusted
value, assuming no backlink data yet):

1. **Unlinked-mention reclamation.** Search Imperium's brand name +
   "Imperium Software Technologies" + named clients/partnerships (Avaya,
   Cisco, Microsoft) for existing mentions that don't link back. Cheapest
   possible wins — the content already exists, you're just asking for a link.
2. **Directory/listing presence.** G2, Capterra, and regional B2B directories
   — the prior research flagged that ZIWO uses G2/Capterra badges as trust
   signals; Imperium doesn't appear to. Low effort, direct trust-signal and
   backlink value.
3. **Digital PR around the comparison/resource content (items 6–7 above).**
   Once those exist, they're the actual linkable assets — pitch them to
   regional tech/business press rather than trying to earn links to existing
   product pages, which nobody links to unprompted.
4. **Guest expertise / named-author placement.** Ties directly to item 3
   above (E-E-A-T bylines) — once there's a real named expert with
   credentials on-site, the same person becomes a plausible guest-contributor
   pitch to industry publications.

---

## Session housekeeping

- `npm install` will need to be re-run by anyone who checks out this branch
  fresh and wants to rebuild the CSS (`node_modules/` is gitignored, per
  implementation log §3).
- `npm run build:css` regenerates both compiled stylesheets from the
  `build/*.config.js` files — re-run it any time either page's Tailwind
  classes change, then commit the regenerated `assets/css/tailwind-*.min.css`.

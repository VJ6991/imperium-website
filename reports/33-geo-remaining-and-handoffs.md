# GEO — remaining work & handoffs

Companion to the other three GEO reports. This is the punch list — details and
full reasoning for each item live in the report noted in the "Detail" column.
Nothing listed here has been implemented; each needs your data, decision, or
approval.

## Blocking / launch-critical

| # | Item | Detail |
|---|---|---|
| 1 | **`main` still doesn't have any of SEO, AEO or GEO work merged.** Three phases in a row now where the brief assumed a merge that hadn't happened. All three branches (`seo-optimization`, `aeo-optimization`, `geo-optimization`) need reconciling into `main`. | Implementation log §context |
| 2 | **`.htaccess` diff to remove the legacy `/about` redirect.** Without this, the new About page is unreachable in production (Apache serves it; the local dev server doesn't, which is why it tested clean). Approve or decline. | Report 31 §5 |

## Needs your confirmation before I can act

| # | Item | What I need | Detail |
|---|---|---|---|
| 3 | `robots.txt` diff — add `Claude-User`, optionally `CCBot` | Approve, decline, or approve part | Report 31 §2 |
| 4 | Chennai/Bengaluru office addresses | Current, correct addresses — `imperium-lite` and the old live site disagree | Report 32 §3 |
| 5 | Ravimani Rajendran — real, quotable executive found via independent press (TahawulTech, Feb 2024) | Confirm still employed, current title, and consent to being named/quoted on-site | Report 32 §1 |
| 6 | `foundingDate` (2005) and `parentOrganization` (Protocol Systems) for schema | Single-sourced from Imperium's own (possibly stale) About copy — confirm before these go into structured data | Report 30 §4, Report 32 §3 |
| 7 | Homepage's 4 unsourced metrics (40% / 30% / 2X / 100%) | Either supply the methodology/source so they can be properly cited, or confirm they should stay as unsourced marketing figures (currently just linked to case studies as partial evidence, not fixed) | Report 30 §4 |
| 8 | Wikidata entry for Imperium | This needs to be created by someone authorized to represent the company, not by me | Report 32 §4 |

## Plans delivered, not executed (per the brief — no auto-posting, no fabrication)

| # | Item | Detail |
|---|---|---|
| 9 | Off-site action list: claim/complete G2, Capterra, Techimply, Yello.ae listings; pitch TahawulTech/CX Today; directory listings (SoftwareSuggest, GetApp UAE) | Report 32 §5 |
| 10 | IndexNow — script and key file are ready but not run (would hit the live production API for a domain that doesn't serve this content yet) | Report 30 §3 — run `php tools/generate-sitemap.php && php tools/indexnow-submit.php` once deployed |

## Re-test plan (from the brief: "which baseline queries to re-test")

Once `main` has all three branches merged and is live:

1. **Bing Webmaster Tools** (needs your login) — confirm `/about`, `/llms.txt`,
   and the rest of the site are actually crawled/indexed. This session
   confirmed the verification tag is present and `Bingbot` is allowed, but
   couldn't check actual index coverage.
2. **The full query list in `reports/03-citation-baseline.md`** (from the AEO
   phase) — re-ask each one to ChatGPT (with browsing), Perplexity, Gemini,
   and check Google AI Overviews, watching specifically for whether Imperium
   gets cited and which content shape earned it (TL;DR, FAQ, comparison
   table, or the new About-page facts).
3. **The three queries live-tested this session** specifically (report 32 §6):
   "best contact center software Dubai UAE," "healthcare contact center
   software UAE hospital IVR," and "missed call cost real estate agent lead
   response time" — none currently cite Imperium; these are the clearest
   before/after markers.
4. **Rich Results Test / Schema Validator** against `/about` specifically —
   new page, new `award` property, first real end-to-end check of both.
5. If item 5 above (Ravimani Rajendran) gets confirmed, re-test any query
   naming Imperium's Avaya partnership specifically, once the Person
   schema/byline work lands — that's the highest-leverage single addition
   still on the table per the citation-tactics research in report 32 §2.

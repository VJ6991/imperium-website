# Entity authority, E-E-A-T, and off-site citation plan — session 2026-08-14/15

Research refreshed for this report (August 2026 sources, cited inline). The
off-site items in §3 are a **plan for you** — nothing was posted, submitted, or
fabricated. No review, backlink, citation, or listing claimed here was
invented; everything is either already live (found via search) or is an
explicit recommendation for you to execute.

---

## 1. A real, named, quotable Imperium executive — found via independent research

The single most valuable find this session, directly against the E-E-A-T
"named author bios with real credentials" gap that's been flagged and left
unresolved across all three phases (SEO, AEO, now GEO) because I wouldn't
fabricate a byline.

Searching for independent corroboration of the Avaya DevConnect partnership
(to decide whether it was safe to add to schema — see implementation log §4)
surfaced a real, dated, named source:

> **TahawulTech.com, February 28, 2024** — "Imperium Software Technologies
> selected for membership in Avaya DevConnect Program." Quotes **Ravimani R,
> Head of Technologies**: *"Joining the Avaya DevConnect program holds great
> significance for us as it broadens our capabilities and optimises
> operational efficiency."*
> [tahawultech.com/news/imperium-software-technologies-selected-for-membership-in-avaya-devconnect-program](https://www.tahawultech.com/news/imperium-software-technologies-selected-for-membership-in-avaya-devconnect-program/)

A follow-up search corroborates and extends this across multiple independent,
unrelated sources:

- **Full name**: Ravimani Rajendran (ZoomInfo, LinkedIn presence found).
- **Location**: Dubai, UAE.
- **A real, verifiable technical credential**: Red Hat Certified System
  Administrator (RHCSA).
- **Current title is uncertain** — TahawulTech (Feb 2024) says "Head of
  Technologies"; ZoomInfo's listing says "Executive Director." ZoomInfo data
  is frequently crowd-sourced/stale, so this discrepancy could mean a
  promotion since 2024, an inaccurate ZoomInfo listing, or both being
  correct at different times. Neither is Imperium's own official statement.

**Why I stopped here instead of publishing anything about this person:**
This is a real, identifiable individual. Whether to name them publicly as a
company spokesperson/author, what title to use, and whether they're still
with the company at all, are decisions that need Imperium's own confirmation
— not something to guess from a 2-year-old press mention and a data-broker
listing, no matter how well-corroborated the underlying facts are.

**What I need from you to close the E-E-A-T author gap**: confirm (a) Ravimani
Rajendran is still with Imperium, (b) their current title, and (c) that
they're comfortable being named/quoted on-site. With that confirmed, the
follow-up work is small and mechanical:
- `Person` schema (`@id`, `name`, `jobTitle`, `worksFor` → the existing
  `Organization` `@id`, `sameAs` → their real LinkedIn if they consent to it
  being linked) — I can build this immediately once confirmed.
- A real author byline + "reviewed by" credit on the About page and/or the
  case studies (Avaya-specific ones especially), replacing the generic
  "Reviewed by the Imperium team" line the AEO phase used as an honest
  placeholder.
- The existing TahawulTech quote could be cited directly (with attribution
  and a link) as a pull-quote on the About page — genuinely strong,
  independently-published, dated evidence, exactly the "direct quotes from
  experts" pattern research (§2 below) shows measurably increases citation
  likelihood.

---

## 2. What the research says actually earns citations (refreshed for this session)

A controlled study testing nine GEO tactics found the following changes in
citation likelihood — used to prioritize the work in the implementation log
and to decide what to recommend below:

| Tactic | Citation-likelihood change |
|---|---|
| Statistics with a clear, visible source | **+25.9%** |
| Direct quotes from named experts | **+27.8%** |
| Explicit source citations | **+24.9%** |
| Keyword stuffing / padding / artificial simplification | **No measurable effect** |

Source: [Firebrand — GEO Best Practices for 2026](https://www.firebrand.marketing/2025/12/geo-best-practices-2026/), corroborating figures also reported by [Shopos.ai](https://shopos.ai/blog/generative-engine-optimization-best-practices-2026) and [Ansvisor](https://www.ansvisor.com/blog/generative-engine-optimization-geo-the-complete-guide).

This directly informed two decisions already in the implementation log: (a)
flagging the homepage's four unsourced metrics rather than leaving them as
unattributed numbers, and (b) prioritizing the Ravimani Rajendran quote find
above everything else in this report — a real, named, dated quote is exactly
the highest-scoring tactic in this research, and Imperium already has one
sitting in independent press coverage, unused.

---

## 3. NAP (name/address/phone) consistency — one real inconsistency found

**Phone number**: consistent everywhere checked (`+971 4 244 3417`, minor
formatting variations only) — footer, contact page, homepage, Organization
schema. No action needed.

**Dubai address**: consistent everywhere (`1504, 1 Lake Plaza, Cluster T,
Jumeirah Lakes Towers, P.O. Box 73916`) — footer, contact page, homepage,
schema. No action needed.

**Chennai and Bengaluru addresses — genuinely inconsistent**, found while
extracting About-page content:

| Source | Chennai | Bengaluru |
|---|---|---|
| `imperium-lite` (current — `Seo::organizationSchema()`, contact page, footer) | 47/2 Ashok Nagar, 53rd Street, Indira Colony, Chennai, Tamil Nadu 600083 | Kaverappa Layout, Kadubeesanahalli, Bengaluru, Karnataka 560103 |
| Old live site's `/about` page (fetched this session) | #1, Model House, Double Tank Colony Road | #870, 1st Floor, Geethanjali House, BDA Layout |

These are materially different addresses, not formatting variants. I don't
know which is current — it's plausible the old About page is simply stale
(offices moved and only the newer pages got updated), but I won't guess.
**imperium-lite itself is internally consistent** (I did not import the old
page's conflicting addresses into the new About page — see implementation
log §1), so this doesn't block launch. It does matter for the broader web:
NAP consistency across directories/profiles is a real, measurable Knowledge
Panel and entity-trust signal (sites with comprehensive, *consistent*
Organization data are reported 3.7× more likely to earn a Knowledge Panel —
[ReputationX — Wikidata for SEO](https://www.reputationx.com/blog/wikidata)),
and the old address is likely still sitting in third-party profiles (see §5).

**Action for you**: confirm the current, correct Chennai and Bengaluru
addresses, so (a) the old live site can be corrected or fully retired, and
(b) any directory listing found with the stale address (§5) can be flagged
for correction.

---

## 4. Knowledge graph plan: Wikidata, not Wikipedia

Refreshed research on eligibility for a company at Imperium's scale:

- **Wikipedia notability requires significant coverage in independent,
  reliable secondary sources.** Imperium has some real trade-press coverage
  (TahawulTech, the SIIT guest post, Avaya's own past newsroom mention) but
  it's thin and largely partnership-announcement-driven, not the sustained,
  independent coverage Wikipedia's bar typically requires. **Not realistic
  right now** without a meaningfully larger press footprint first — this is
  a downstream outcome of the off-site plan below, not a starting point.
- **Wikidata has no notability threshold** — any real, verifiable entity can
  have an entry, sourced from things like the company's own official
  channels, business registries, and the press coverage that does exist.
  Wikidata directly feeds Google's Knowledge Graph and is what populates the
  `sameAs` property pattern already used in `Seo::organizationSchema()`.
  Source: [ReputationX — Wikidata for SEO: How Brands Use It (2026)](https://www.reputationx.com/blog/wikidata), [Qwairy — Wikipedia & Wikidata for AI Visibility (2026)](https://www.qwairy.co/blog/wikipedia-wikidata-ai-visibility).

**Recommendation**: create a Wikidata entry for Imperium Software Technologies
(instance of: business/organization; headquarters location: Dubai; industry:
contact center/CX software; official website: imperiumapp.com), sourced from
the company's own site plus the TahawulTech/SIIT coverage. This is a
`wikidata.org` account action only you (or someone authorized to represent
the company) should do — not something to submit on your behalf. Once it
exists, add its URL to `Seo::organizationSchema()`'s `sameAs` array — a
one-line follow-up.

---

## 5. Off-site presence — what already exists (found, not fabricated)

Searching for the brand surfaced real existing profiles, none of which
appear to have been actively maintained:

| Platform | Status found |
|---|---|
| Glassdoor | 2 reviews, 4.5/5 (employer reviews — not customer-facing, don't conflate with product trust signals) |
| LinkedIn | Company page exists |
| Techimply | Profile exists, **zero reviews** — "be the first to review" |
| Yello.ae | Listed, **zero reviews** |
| TheOrg, SignalHire, RocketReach, ZoomInfo, Gulfleads.ae, DubaiExporters, Elioplus | Directory/data-broker profiles exist, largely unmanaged |
| **G2, Capterra, Clutch** | **No listing found** — confirmed absent, corroborating the exact gap the SEO-phase competitor research already flagged (competitor ZIWO uses G2/Capterra badges as a trust signal; Imperium has no presence there to badge) |

**This is a genuine off-site gap, not a fabrication risk**: real review-platform
presence with real reviews is a legitimate, verifiable authority signal — the
opposite of what the brief guards against (I'm not proposing anyone post fake
reviews; I'm flagging that the *real* platforms where genuine customers could
leave *real* reviews currently have none).

### Prioritized off-site action list (highest impact-to-effort first)

1. **Claim/complete the G2 and Capterra listings.** Zero-cost, the platform
   competitors are already using as a trust signal, and the fastest way to
   start collecting real customer reviews. Follow with a request to the
   named case-study clients (Emirates Hospital Group, Concordia Dubai,
   Omniyat, etc. — real people who already have a working relationship with
   Imperium) for a genuine review, once they're set up.
2. **Fill in the Techimply and Yello.ae listings.** Already exist, already
   indexed, currently empty — same "be the first reviewer" gap as G2/Capterra
   but even lower effort since the profile already exists.
3. **Wikidata entry** (§4 above).
4. **Pitch a byline or case-study feature to TahawulTech and/or CX Today** —
   TahawulTech already covered Imperium once (2024); a follow-up pitch about
   a specific, named case study result (the Emirates Hospital Group
   centralization, for instance) has a real, warm door to walk through rather
   than a cold pitch. CX Today (cxtoday.com) is a leading English-language CX
   trade publication that covers exactly this space.
   ([CX Today](https://www.cxtoday.com/))
5. **Correct or reclaim the stale address data** (§3) once you've confirmed
   current addresses — starting with whichever of the directories above show
   up with the old Chennai/Bengaluru addresses.
6. **Directory listings for the UAE/GCC market specifically**:
   SoftwareSuggest ([softwaresuggest.com](https://www.softwaresuggest.com/call-center-software/uae)) and GetApp UAE already rank for "call center software UAE" queries with competitor listings — claiming a profile there is a direct play for the exact query cluster report 03 (from the AEO phase) already targets.

**Not recommended right now**: guest-posting campaigns or PR agency outreach
at scale — better sequenced *after* items 1–3 above give any resulting press
coverage somewhere credible to link back to.

---

## 6. Content-gap analysis — live query testing against competitors

Tested a sample of the highest-value query patterns (full list cross-
references `reports/03-citation-baseline.md` from the AEO phase) against live
web search results to see who currently gets cited.

**"best contact center software Dubai UAE 2026"** — currently dominated by
ZIWO, Talkdesk, Salesforce Service Cloud, Zendesk, CloudTalk, and directory
aggregators (SoftwareSuggest, Capterra, GetApp). Imperium does not appear.
Matches the SEO-phase competitor research exactly (ZIWO named there as the
strongest regional player).

**"healthcare contact center software UAE hospital IVR appointment booking"**
— dominated by generic (non-UAE-specific) healthcare-software vendors
(Deepijatel, Xima, DocEngage, VCC Live). Imperium's own healthcare page,
despite this session's and the AEO session's work, doesn't appear — expected,
since none of that work is deployed yet, but confirms the query is real and
currently uncontested by a UAE-specific competitor either.

**"missed call cost real estate agent lead response time software"** —
dominated by US real-estate-tech publishers (HousingWire, Trillet, Nextiva,
Goliath) with genuinely strong, well-sourced stats ($427/lead, MIT/InsideSales
5-minute response research, 78% first-responder-wins figure). No UAE-specific
angle exists in the current results at all. This is the single strongest
content-gap opportunity found: the AEO phase already built a real-estate FAQ
targeting this exact "missed call cost" framing (grounded in the same
MIT/InsideSales research, cited properly) — once deployed and indexed, this
is a genuine, currently-uncontested angle for the UAE market specifically.

**Recommendation**: re-run these same three queries (and the rest of the
list in `reports/03-citation-baseline.md`) after this branch and the AEO
branch are both live and indexed, to see whether Imperium starts appearing.
This is exactly the re-test plan the summary points to.

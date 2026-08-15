# AI crawler stance, llms.txt, and Bing indexability — session 2026-08-14/15

Research refreshed for this report (all August 2026 sources, cited inline).
Nothing in the "proposed diffs" section has been applied — both need your
sign-off per the working method (robots.txt/redirect changes require
approval).

---

## 1. Current AI crawler user-agent landscape (refreshed research)

| Bot | Owner | Purpose | Current `robots.txt` stance |
|---|---|---|---|
| `GPTBot` | OpenAI | Training crawler for future models | Allowed |
| `OAI-SearchBot` | OpenAI | Powers ChatGPT's live search/citations | Allowed |
| `ChatGPT-User` | OpenAI | Live fetch when a ChatGPT user pastes/asks about a URL | Allowed |
| `ClaudeBot` | Anthropic | Training crawler | Allowed |
| `Claude-SearchBot` | Anthropic | Search/RAG indexing for Claude | Allowed |
| `Claude-User` | Anthropic | Live fetch when a Claude user browses/asks about a URL | **Not explicitly listed — see diff below** |
| `PerplexityBot` | Perplexity | Search/answer crawler | Allowed |
| `Google-Extended` | Google | Training data opt-in/out for Gemini/Vertex AI (separate from Googlebot) | Allowed |
| `Applebot-Extended` | Apple | Apple Intelligence training | Allowed |
| `Bingbot` | Microsoft | Bing's main crawler — see §3, this is the one that matters most for ChatGPT Search | Allowed |
| `CCBot` | Common Crawl | Feeds many downstream LLM training sets indirectly | Not explicitly listed (covered by the wildcard `User-agent: * / Allow: /` — see diff below for whether to name it explicitly) |

Sources: [Anagram — AI Crawlers Explained (2026)](https://www.anagram.ai/blog/ai-crawlers-explained-gptbot-claudebot-perplexitybot-and-how-to-let-them-in-2026), [OpenShadow — AI Bot User Agents List 2026](https://www.openshadow.io/guides/ai-bot-user-agents-2026), [Cite.sh — Which AI Crawlers to Allow (2026)](https://www.cite.sh/blog/ai-crawler-guide/).

**Training vs. retrieval, and why the distinction matters**: training crawlers
(`GPTBot`, `ClaudeBot`, `Google-Extended`) feed model weights and don't affect
what shows up in a live answer today. Retrieval/search crawlers
(`OAI-SearchBot`, `PerplexityBot`, `Claude-SearchBot`, `Claude-User`) fetch
pages in real time to answer a specific query — these are the ones that
directly drive citations. The current `robots.txt` already allows every
retrieval crawler that matters. The one gap is `Claude-User`.

**Compliance caveat found in research**: OpenAI, Anthropic, Google, Apple and
Perplexity's *named* crawlers officially respect `robots.txt`. `Bytespider`
(ByteDance) and Perplexity's undocumented "stealth" crawler have both been
reported ignoring it. This isn't something a `robots.txt` change can fix
either way — flagging for awareness, not action.

---

## 2. Proposed `robots.txt` diff — awaiting your approval

```diff
 User-agent: Google-Extended
 Allow: /

+User-agent: Claude-User
+Allow: /
+
 User-agent: Applebot-Extended
 Allow: /

 User-agent: Bingbot
 Allow: /

+# Common Crawl feeds many downstream LLM training/RAG pipelines indirectly
+# (already implicitly allowed by the wildcard block above — named explicitly
+# here for the same reason every other AI crawler is: so the policy reads as
+# a deliberate choice, not an accident of the wildcard).
+User-agent: CCBot
+Allow: /
+
 Sitemap: https://www.imperiumapp.com/sitemap.xml
```

**Trade-offs, so the approval is informed, not just "yes/no":**
- `Claude-User` is a real, low-risk addition — it only fires when an actual
  Claude user is asking about your site right now, the same category as
  `ChatGPT-User` (already allowed). There's no reasonable case for blocking
  it if `ChatGPT-User` is already allowed.
- `CCBot` is *already* allowed today via the wildcard `User-agent: * / Allow: /`
  rule — this line changes nothing functionally, it only makes the policy
  explicit and documented like every other bot. Skippable if you'd rather
  keep the file shorter; recommended for consistency with the existing style
  (every other AI crawler gets its own named, commented block).
- No crawler is proposed for *removal*. If you'd rather block AI *training*
  specifically while keeping AI *search/citation* access (a real strategy
  some sites use — allow `OAI-SearchBot`/`PerplexityBot`/`Claude-SearchBot`,
  block `GPTBot`/`ClaudeBot`/`Google-Extended`), that's a bigger policy call
  with a real trade-off (opting out of training likely also reduces how well
  future model versions understand your content) and should be a separate,
  explicit decision — not bundled into this diff.

---

## 3. Bing indexability

**Why this matters more than it sounds like it should**: Bing's index is the
retrieval layer for ChatGPT's web-search feature, Microsoft Copilot, Copilot
in Windows/Edge, DuckDuckGo, and Yahoo Search — a page missing from Bing is
invisible to all of those regardless of how well it ranks on Google. With
ChatGPT reported at ~900M weekly active users in early 2026, that's a large,
easy-to-miss dependency. Sources:
[Subscribe PR — How to get indexed on Bing (2026)](https://subscribepr.com/blog/how-to-get-indexed-on-bing/),
[GetMind — Bing SEO in 2026](https://getmind.io/blog/bing-seo/).

**What was checked:**
- `msvalidate.01` (Bing Webmaster Tools site-verification meta tag) is
  already present in `views/layouts/app.blade.php` — this was already healthy
  going into this session (noted as such in the original Phase 1 SEO audit).
- `Bingbot` is explicitly allowed in `robots.txt`.
- A general web search for `site:imperiumapp.com` returned live, indexed
  results for the current site (`/businesscenter`, `/about`, `/logistics`,
  `/finance`, product pages, etc.) — the domain has real, current search
  presence. This is not a Bing-specific check (the search backend available
  to me isn't Bing's own index directly), so treat it as "the domain is
  generally indexed somewhere," not proof of Bing indexation specifically.

**What I can't check from here**: actual Bing index coverage, crawl errors,
or Bing-specific ranking data — that requires logging into Bing Webmaster
Tools with your account, which I don't have. **Action for you**: log into
Bing Webmaster Tools (bing.com/webmasters) with whatever account owns the
`msvalidate.01` verification, and check Index Explorer / Site Explorer for
current coverage once `imperium-lite` is live on the domain.

**What this session added to help going forward**: the IndexNow implementation
(§3 of the implementation log) — once deployed, running
`php tools/indexnow-submit.php` after any content change tells Bing directly
and immediately, rather than waiting for its next scheduled crawl.

---

## 4. `llms.txt`

Published at `/llms.txt` (275 words, spec-compliant per
[llmstxt.org](https://llmstxt.org/)). Every linked URL verified `200` before
publishing.

**Honest framing on expected impact** — refreshed research specifically on
this point:
- Adoption across the web sits around **10.13%** of domains after roughly 18
  months of the standard existing, per an SE Ranking study of 300,000 domains.
  ([LinkBuildingHQ — Should Websites Implement llms.txt in 2026?](https://www.linkbuildinghq.com/blog/should-websites-implement-llms-txt-in-2026/))
- The major AI search crawlers (`GPTBot`, `ClaudeBot`, `PerplexityBot`,
  `OAI-SearchBot`, `Google-Extended`) **overwhelmingly crawl HTML directly and
  skip `/llms.txt`** — one analysis found 8 of 9 sites saw no measurable
  traffic change after implementing it.
  ([Search Engine Land, via aeo.press — The State of llms.txt in 2026](https://ai.aeo.press/the-state-of-llms-txt-in-2026))
- **Google has explicitly said no**: Google's Gary Illyes confirmed in July
  2025 that Google doesn't support `llms.txt` and isn't planning to; John
  Mueller compared it to the discredited keywords meta tag.
  ([aeo.press — The State of llms.txt in 2026](https://www.aeo.press/ai/the-state-of-llms-txt-in-2026))
- The more credible upside is as a **B2A (business-to-agent) surface** — a
  standardized, machine-readable index for AI *agents* (not search crawlers)
  to route on — which is a newer and different use case than "get cited in
  ChatGPT."

**Bottom line, and why it's still in scope despite the above**: this cost
about an hour and forced a clean, curated index of the highest-value pages —
genuinely cheap, genuinely low-risk, worth having. It should not be mistaken
for a high-leverage GEO lever; the content-density and entity-authority work
in the implementation log and report 32 is where the actual citation-rate
movement is expected to come from.

---

## 5. Proposed `.htaccess` diff — awaiting your approval (blocks the new About page in production)

Found while building the About page (implementation log §1): `.htaccess` has
a legacy redirect that sends any request to `/about` straight to the homepage:

```
RewriteRule ^about(/.*)?$                   /        [R=301,L]
```

This rule runs in Apache *before* the front controller — so on the actual
production server (unlike the local PHP dev server, which doesn't read
`.htaccess` and is why the new page tested clean), this redirect would
**completely block the new `/about` page from ever being reached** — every
visitor and every crawler would be bounced to `/` instead. This one is
launch-blocking for the About page specifically, unlike the robots.txt diff
above (which is a nice-to-have).

```diff
-    RewriteRule ^about(/.*)?$                   /        [R=301,L]
+    # /about now has a real page in this build (added GEO phase, 2026-08).
+    # No redirect needed — removed. This rule ran before this line was added:
+    #   RewriteRule ^about(/.*)?$                   /        [R=301,L]
```

**Trade-off to weigh**: the legacy redirect existed because a much earlier
audit pass assumed `/about` had no equivalent page in this trimmed build and
sent it home rather than 404. That assumption is no longer true. Removing the
line is the correct fix *given this session's new page exists* — but confirm
you actually want `/about` live in production before approving, since once
this merges, the page is real and indexable, not just present in the repo.

---

## Re-test plan for this report specifically

- Confirm both diffs above (or decline them) — the `.htaccess` one blocks the
  About page in production if left as-is.
- After deploy: Bing Webmaster Tools → Index Explorer, check `/about` and
  `/llms.txt` both get crawled within a few days.
- `curl -A "ClaudeBot" https://www.imperiumapp.com/` (and similarly for the
  other named agents) post-deploy, to confirm nothing at the server/CDN level
  (outside this repo's `robots.txt`) is blocking them — a WAF or hosting-level
  bot-block rule wouldn't show up in anything checked this session.

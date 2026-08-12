# Citation baseline — AEO query mapping (2026-08-12)

`/reports/03-citation-baseline.md` did not exist before this session (checked
the whole filesystem, not just this repo). This file is created fresh, as the
brief's own fallback instructs ("fresh research where needed"). It is not a
measured citation baseline (no tool here can query ChatGPT/Perplexity/Google AI
Overviews and log current citation rates) — it's the query map this session's
AEO changes were built against, so a future session (or you, manually) has a
concrete list to re-check citation/AI-Overview appearance against once this
ships. Treat it as the "before" question inventory, not a "before" citation
measurement.

Queries are grouped by the research clusters used to write
[`cms/data/aeo.json`](../cms/data/aeo.json) — see
[`20-aeo-implementation-log.md`](20-aeo-implementation-log.md) §3 for how each
cluster was sourced (competitor vendor pages, forum-style questions, and for
banking, primary regulatory sources).

## How to re-test

For each query below, once this branch is merged and live: ask it verbatim to
ChatGPT (with browsing), Perplexity, and Google (checking for an AI Overview),
and to Google/Bing search directly for a featured snippet or "People also ask"
match. Note whether Imperium is cited/linked, and if so, whether the answer
pulled from the new TL;DR, the FAQ, the how-it-works steps, or the case-study
comparison table specifically — that tells you which content shape is actually
earning citations, which should steer the next AEO pass.

---

## General contact center / CX (targets: `index`)

- "What is a contact center?"
- "What's the difference between a call center and a contact center?"
- "What is CTI (computer telephony integration)?"
- "What is omnichannel customer support, and how is it different from multichannel?"
- "How long does it take to implement contact center software?"
- "On-premise vs. cloud contact center — which is better?"

## Healthcare (targets: `healthcare`)

- "How does IVR work for scheduling doctor/patient appointments?"
- "Can patients reach a nurse or the right department without waiting on hold?"
- "How is patient call and appointment data kept secure?"
- "Can a healthcare contact center handle call spikes without long hold times?"
- "What's the difference between a medical answering service and a full contact center platform?"

## Debt collection (targets: `debtcollection`, cross-linked from `finance`)

- "Is predictive dialing legal for debt collectors?"
- "What is 'promise to pay' tracking and how does it work?"
- "Can debt collectors legally record calls, and can recordings be used as evidence?"
- "How long must debt collection call recordings be retained?"
- "What compliance features does debt collection dialer software need?"

## Help desk / service desk (targets: `helpdesk`, cross-linked from `casestudy`/`industry-influence`)

- "What is the difference between a help desk and a service desk?"
- "What is the difference between help desk software and contact center software?"
- "Is a help desk only for IT issues, or can it be used for general customer support?"
- "What is omnichannel ticket routing?"

## Business center / multi-tenant telephony (targets: `businesscenter`)

*Flagged during research as thin real-world search signal — see the
implementation log. Scoped to the definitional angle rather than padded:*

- "What is a multi-tenant PBX?"
- "Can multiple businesses share one phone system while keeping their calls and extensions separate?"

## Logistics (targets: `logistics`)

- "How does IVR work for tracking a shipment or delivery?"
- "Can delivery status updates be sent automatically instead of the customer calling in?"
- "How can a logistics company reduce high call volumes about delivery status?"
- "Can the contact center system integrate with a company's tracking/CRM data?"

## Education sector (targets: `educationsector`)

*Also flagged as thinner-signal — mostly vendor-authored explainer content
rather than confirmed real-user questions; re-verify with a proper PAA tool
before assuming this cluster performs like the stronger ones.*

- "How does an IVR system work for school or university admissions?"
- "How can schools handle high call volumes during admissions or exam season?"
- "What's the difference between a student help desk and a general IT help desk?"
- "Can parents be notified automatically rather than the school calling individually?"

## E-commerce (targets: `ecommerce`)

- "What is IVR and how does it check order status automatically?"
- "How does an e-commerce contact center handle high call volumes during sales events?"
- "What's the difference between omnichannel and multichannel support?"
- "How does CRM integration with a contact center improve customer service?"

## Real estate (targets: `realestate`) — strongest research signal of all 12 verticals

- "How much does a missed call actually cost a real estate agent or developer?"
- "How does lead routing work for real estate teams?"
- "What CRM integration does a real estate brokerage need?"
- "Can a real estate contact center handle social/chat enquiries, not just phone?"

## Retail (targets: `retail`)

- "What is omnichannel retail customer service, and how is it different from just a phone line and a website?"
- "How do retailers give store staff and contact center agents the same customer view?"
- "Can a contact center platform work for both in-store and online customer service?"

## Banking (targets: `banking`) — regulatory claims deliberately kept general, see handoff report item 5

- "How does IVR authentication work for a bank?"
- "Are customer calls to a bank recorded?"
- "What does 'core-banking integration' mean for a contact center?"
- "Is banking contact center data hosted locally in the region?"

## Finance (targets: `finance`, cross-linked to `debtcollection`)

- "Does Imperium's finance solution include debt collection tools?"
- "Can Imperium's contact center integrate with third-party finance applications?"
- "What kind of reporting does a finance sector contact center need?"

## Insurance (targets: `insurance`) — see handoff report items 3 and 5

- "Can policyholders check claim status by phone without waiting for an agent?"
- "How does an insurance IVR route calls to the right person based on claim type?"
- "Can policyholders renew or pay premiums through IVR without an agent?"

## Case studies / vendor evaluation (targets: `casestudy`, new comparison table)

- "How do I evaluate contact center software before buying?"
- "What should a good case study actually include?"
- "What industries has Imperium delivered case studies for?"
- "Are Imperium's case studies from UAE-based clients?"

## Verticals hub (targets: `industry-influence`)

- "Which industries does Imperium build contact center solutions for?"
- "Does Imperium only build solutions for these 12 industries?"

## Contact (targets: `contact`)

- "How quickly does Imperium respond to a new enquiry?"
- "Does Imperium have support outside the UAE?"
- "What's the difference between contacting sales and contacting support at Imperium?"

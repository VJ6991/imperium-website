<?php
/**
 * Single source of truth for per-page SEO data.
 *
 * Everything that describes a page to a search engine lives here — title, meta
 * description, canonical slug, Open Graph image, sitemap hints and the optional
 * Service/FAQ structured-data payload. Controllers read from this via
 * Seo::page('<slug>'), and tools/generate-sitemap.php builds sitemap.xml from the
 * same array, so a page can never end up in the sitemap with a title that
 * disagrees with the one it actually renders.
 *
 * Editing rules (keep these or the SEO regresses):
 *   - title       : <= ~60 chars so Google does not truncate it in the SERP.
 *                   Written in full, INCLUDING the brand — nothing is appended.
 *   - description : 140-160 chars, unique per page, written for a click not a
 *                   keyword stuff. Never leave this empty.
 *   - image       : path under /assets, used for og:image + twitter:image.
 *   - priority / changefreq : sitemap hints only.
 */

return [

    'index' => [
        'title'       => 'AI-Powered CX & Contact Center Solutions | Imperium',
        'description' => 'Imperium builds AI-powered customer experience and contact center software — CTI, IVR, omnichannel and enterprise telephony for businesses across the UAE and GCC.',
        'image'       => 'image/imperium-logo-orange-new.png',
        'priority'    => '1.0',
        'changefreq'  => 'weekly',
        'type'        => 'website',
    ],

    'industry-influence' => [
        'title'       => 'Industries We Serve | CX Solutions by Sector | Imperium',
        'description' => 'See how Imperium tailors contact center, CTI and IVR solutions to 12 industries — healthcare, banking, retail, logistics, insurance and more across the UAE.',
        'image'       => 'image/management.jpeg',
        'priority'    => '0.9',
        'changefreq'  => 'monthly',
        'type'        => 'website',
    ],

    'casestudy' => [
        'title'       => 'Customer Case Studies | Imperium Software Technologies',
        'description' => 'Real deployments, real numbers. Read how enterprises across the UAE and GCC cut handling times and lifted CSAT with Imperium contact center solutions.',
        'image'       => 'image/imperium-logo-orange-new.png',
        'priority'    => '0.8',
        'changefreq'  => 'monthly',
        'type'        => 'website',
    ],

    'contact' => [
        'title'       => 'Contact Imperium Software Technologies | Dubai, UAE',
        'description' => 'Talk to Imperium about AI-powered CX, contact center, CTI and IVR projects. Offices in Dubai, Singapore, Chennai and Bengaluru. Support desk staffed 24/7.',
        'image'       => 'image/imperium-logo-orange-new.png',
        'priority'    => '0.7',
        'changefreq'  => 'yearly',
        'type'        => 'website',
    ],

    // ---------------------------------------------------------------- verticals

    'healthcare' => [
        'title'       => 'Healthcare Contact Center Software in UAE | Imperium',
        'description' => 'Patient-first communication for hospitals and clinics — appointment IVR, telemedicine routing, omnichannel support and CRM-integrated telephony from Imperium.',
        'image'       => 'image/healthcare.jpg',
        'priority'    => '0.8',
        'changefreq'  => 'monthly',
        'service'     => 'Healthcare Communication Solutions',
    ],

    'debtcollection' => [
        'title'       => 'Debt Collection Software in Dubai, UAE | Imperium',
        'description' => 'Automate collections with predictive dialling, promise-to-pay tracking, call recording and compliance reporting. Secure debt management built for the UAE.',
        'image'       => 'image/finance.jpg',
        'priority'    => '0.8',
        'changefreq'  => 'monthly',
        'service'     => 'Debt Collection & Recovery Solutions',
    ],

    'helpdesk' => [
        'title'       => 'Help Desk & Service Desk Software in UAE | Imperium',
        'description' => 'Log, route and resolve tickets in one place. Imperium service desk unifies phone, email, chat and social so teams answer faster and never lose a request.',
        'image'       => 'image/management.jpeg',
        'priority'    => '0.8',
        'changefreq'  => 'monthly',
        'service'     => 'Help Desk & Service Desk Solutions',
    ],

    'businesscenter' => [
        'title'       => 'Business Center Communication Solutions | Imperium',
        'description' => 'Converged voice, data and customer engagement for business centers and shared offices — multi-tenant telephony, call reporting and omnichannel support.',
        'image'       => 'image/management.jpeg',
        'priority'    => '0.7',
        'changefreq'  => 'monthly',
        'service'     => 'Business Center Communication Solutions',
    ],

    'logistics' => [
        'title'       => 'Logistics & Supply Chain Contact Center | Imperium',
        'description' => 'Shipment-tracking IVR, automated booking requests and omnichannel customer support for logistics and supply chain operators across the UAE and GCC.',
        'image'       => 'image/logistic_new.jpg',
        'priority'    => '0.8',
        'changefreq'  => 'monthly',
        'service'     => 'Logistics & Supply Chain Solutions',
    ],

    'educationsector' => [
        'title'       => 'Education Sector Communication Software | Imperium',
        'description' => 'Admissions IVR, parent notification campaigns and student helpdesk in one platform. Communication technology for schools and universities across the UAE.',
        'image'       => 'image/education.jpg',
        'priority'    => '0.8',
        'changefreq'  => 'monthly',
        'service'     => 'Education Sector Communication Solutions',
    ],

    'ecommerce' => [
        'title'       => 'E-Commerce Contact Center Software in UAE | Imperium',
        'description' => 'Turn order queries into repeat sales. Omnichannel support, order-status IVR and CRM-connected agents for e-commerce and retail brands across the UAE and GCC.',
        'image'       => 'image/retail.jpg',
        'priority'    => '0.8',
        'changefreq'  => 'monthly',
        'service'     => 'E-Commerce Customer Engagement Solutions',
    ],

    'realestate' => [
        'title'       => 'Real Estate Communication Software in Dubai | Imperium',
        'description' => 'Never miss an enquiry. Lead-routing telephony, CRM integration and omnichannel follow-up for property developers and brokerages across Dubai and the UAE.',
        'image'       => 'image/real-estate.jpg',
        'priority'    => '0.8',
        'changefreq'  => 'monthly',
        'service'     => 'Real Estate Communication Solutions',
    ],

    'retail' => [
        'title'       => 'Retail Customer Experience Software in UAE | Imperium',
        'description' => 'Connect stores, contact center and online channels. Imperium gives retail teams one view of every customer conversation across voice, chat, email and social.',
        'image'       => 'image/retail.jpg',
        'priority'    => '0.8',
        'changefreq'  => 'monthly',
        'service'     => 'Retail Customer Experience Solutions',
    ],

    'banking' => [
        'title'       => 'Banking Contact Center & CX Solutions UAE | Imperium',
        'description' => 'Secure, compliant customer engagement for banks — authenticated IVR, call recording, omnichannel servicing and core-banking integration for the UAE market.',
        'image'       => 'image/banking.jpg',
        'priority'    => '0.8',
        'changefreq'  => 'monthly',
        'service'     => 'Banking & Financial Services Solutions',
    ],

    'finance' => [
        'title'       => 'Financial Services Contact Center Software | Imperium',
        'description' => 'Advanced collections, reporting and customer servicing tools for finance companies in Dubai and the UAE — built on secure, audit-ready Imperium telephony.',
        'image'       => 'image/finance.jpg',
        'priority'    => '0.8',
        'changefreq'  => 'monthly',
        'service'     => 'Financial Services Solutions',
    ],

    'insurance' => [
        'title'       => 'Insurance Contact Center & CX Solutions UAE | Imperium',
        'description' => 'Speed up claims and renewals with automated IVR, policy-aware call routing and omnichannel customer service for insurers and brokers across the UAE.',
        'image'       => 'image/insurance.jpg',
        'priority'    => '0.8',
        'changefreq'  => 'monthly',
        'service'     => 'Insurance Customer Engagement Solutions',
    ],

];

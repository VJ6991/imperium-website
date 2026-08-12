<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    {!! Helper::setMetaTags($meta) !!}
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1" />
    <meta name="theme-color" content="#14110f" />
    <!-- This page does not extend layouts.app, so it would otherwise ship without
         the brand's identity record. Contact pages are exactly where search engines
         look for NAP (name / address / phone) confirmation, so emit it explicitly. -->
    {!! Seo::jsonLd(Seo::organizationSchema()) !!}
    {!! Seo::jsonLd(Seo::websiteSchema()) !!}
    <link rel="shortcut icon" href="{{ asset('image/fav.png') }}" type="image/png">

    <!-- Critical CSS: applied before the Tailwind CDN injects its reset, so the fixed
         header does not flash as a plain block with the default body margin. -->
    <style>
        body { margin: 0; background: #FAF7F4; }
        /* Solid (not translucent) header — this page is light, so the homepage's
           see-through dark bar would read as a smudge over the content. */
        body > header { position: fixed; top: 0; left: 0; right: 0; z-index: 50; background: #14110F; }
        .font-headline, h1, h2, h3 { font-family: 'Satoshi', sans-serif; }
        @font-face {
            font-family: 'Satoshi';
            src: url('{{ asset('fonts/Satoshi-Variable.woff2') }}') format('woff2');
            font-weight: 100 900;
            font-style: normal;
            font-display: swap;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('css/tailwind-contact.min.css') }}">
    <!-- Fontshare's Satoshi stylesheet was removed: Satoshi is already self-hosted
         via the @font-face above (assets/fonts/Satoshi-Variable.woff2), so the CDN
         request was a redundant render-blocking round-trip to a third-party host. -->
    <link rel="stylesheet" href="{{ asset('css/material-symbols.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aeo.css') }}?v=1">
    <!-- cdn.tailwindcss.com (Play CDN) and the fonts.googleapis.com Material Symbols
         request were both replaced with the static stylesheets above. This page's
         tailwind.config now lives at build/tailwind.contact.config.js and is compiled
         via `npm run build:css:contact` — keep it in sync with any class changes on
         this page and re-run the build, since there is no more JIT compiler in the
         browser. -->

    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        /* Warm brand wash across the top band. */
        .band {
            background:
                radial-gradient(900px 340px at 18% 0%, rgba(255, 107, 53, 0.20) 0%, rgba(20, 17, 15, 0) 70%),
                radial-gradient(700px 300px at 92% 20%, rgba(255, 107, 53, 0.10) 0%, rgba(20, 17, 15, 0) 70%),
                #14110F;
        }

        /* Fine grid texture — stops the flat band from reading as a plain block. */
        .band-grid {
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.035) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.035) 1px, transparent 1px);
            background-size: 56px 56px;
        }

        .card-lift {
            background: #fff;
            border: 1px solid #EDE7E1;
            box-shadow: 0 1px 2px rgba(20, 17, 15, .04), 0 12px 32px -12px rgba(20, 17, 15, .10);
            transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
        }

        a.card-lift:hover {
            transform: translateY(-3px);
            border-color: #FFC9AE;
            box-shadow: 0 1px 2px rgba(20, 17, 15, .04), 0 20px 40px -16px rgba(255, 107, 53, .28);
        }

        /* ---- Form controls -------------------------------------------------
           The Tailwind `forms` plugin resets [type='text'], select, textarea and
           [type='checkbox'], and the Play CDN injects its stylesheet AFTER this
           block. A bare `.fld` ties on specificity (0,1,0) and loses on document
           order, which renders the fields as unstyled boxes. Element-qualifying
           (input.fld = 0,1,1) wins outright. DO NOT drop the element prefixes. */
        .fld-label {
            display: block;
            margin-bottom: 6px;
            font-size: 12.5px;
            font-weight: 700;
            letter-spacing: .01em;
            color: #44403C;
        }

        .fld-label .req { color: #FF6B35; margin-left: 2px; }

        input.fld,
        select.fld,
        textarea.fld {
            width: 100%;
            padding: 12px 14px;
            font-family: 'Satoshi', sans-serif;
            font-size: 15px;
            font-weight: 500;
            color: #14110F;
            background-color: #FCFAF8;
            border: 1px solid #E4DCD4;
            border-radius: 10px;
            outline: none;
            box-shadow: none;
            transition: border-color .2s ease, box-shadow .2s ease, background-color .2s ease;
        }

        textarea.fld {
            resize: vertical;
            min-height: 124px;
            line-height: 1.6;
            border-radius: 12px;
        }

        input.fld::placeholder,
        textarea.fld::placeholder { color: #A8A29E; }

        input.fld:focus,
        select.fld:focus,
        textarea.fld:focus {
            background-color: #fff;
            border-color: #FF6B35;
            box-shadow: 0 0 0 3px rgba(255, 107, 53, .15);
        }

        .is-invalid input.fld,
        .is-invalid select.fld,
        .is-invalid textarea.fld {
            border-color: #DC2626;
            background-color: #FEF6F5;
        }

        .fld-error {
            display: none;
            margin-top: 6px;
            font-size: 12.5px;
            font-weight: 600;
            color: #DC2626;
        }

        .is-invalid .fld-error { display: block; }

        .ctc-status { display: none; }
        .ctc-status.is-visible { display: block; }

        .spinner {
            display: none;
            width: 15px;
            height: 15px;
            border: 2px solid rgba(255, 255, 255, .45);
            border-top-color: #fff;
            border-radius: 50%;
            animation: spin .7s linear infinite;
        }

        .is-busy .spinner { display: inline-block; }

        @keyframes spin { to { transform: rotate(360deg); } }

        /* Partner logos are opaque white-background files, so on this light page
           they sit directly on the surface — no white tile needed.
           One uniform height for all seven, with max-width so a wide mark can't
           dominate the row. Note: the source files bake in differing amounts of
           surrounding whitespace, so at a shared height some marks (Google Cloud
           most of all) read smaller than the rest — that is the source images,
           not the CSS. Per-logo heights would even it out at the cost of
           uniformity. */
        .logo-mark {
            width: auto;
            object-fit: contain;
            filter: grayscale(1);
            opacity: .55;
            transition: filter .25s ease, opacity .25s ease;
        }

        .logo-mark:hover { filter: none; opacity: 1; }

        /* Heights are per-logo because a shared height cannot look even here.
           Two things differ across the source files: aspect ratio (Zoom 3.86,
           Sestek 4.10 and Globitel 3.92 are long wordmarks, while AWS 1.67,
           Google Cloud 1.78 and Avaya 2.00 are squarish) and the amount of white
           space baked into the PNG — Google Cloud has by far the most, which is
           why it needs roughly twice Avaya's height to read the same size.
           These are the homepage reel's tuned values at ~80%, so the whole row
           stays compact enough for a single line (~740px of logo + gaps). */
        .logo-google    { height: 88px; }
        .logo-microsoft { height: 46px; }
        .logo-avaya     { height: 42px; }
        .logo-aws       { height: 35px; }
        .logo-globitel  { height: 27px; }
        .logo-zoom      { height: 26px; }
        .logo-sestek    { height: 26px; }

        /* Seven logos can't fit one line on a phone without becoming illegible,
           so the row wraps below sm and stays single-line above it. */
        @media (max-width: 640px) {
            .logo-google    { height: 62px; }
            .logo-microsoft { height: 32px; }
            .logo-avaya     { height: 30px; }
            .logo-aws       { height: 25px; }
            .logo-globitel  { height: 19px; }
            .logo-zoom      { height: 18px; }
            .logo-sestek    { height: 18px; }
        }

        .map-frame { filter: saturate(.85) contrast(1.02); }

        /* Office switcher above the map */
        .map-tab {
            font-family: 'Satoshi', sans-serif;
            font-size: 14px;
            font-weight: 700;
            color: #57534E;
            background: #fff;
            border: 1px solid #E4DCD4;
            border-radius: 999px;
            padding: 8px 18px;
            transition: background-color .2s ease, border-color .2s ease, color .2s ease;
        }

        .map-tab:hover { border-color: #FFC9AE; color: #14110F; }

        .map-tab.is-active {
            background: #FF6B35;
            border-color: #FF6B35;
            color: #fff;
        }

        /* Mobile: keep all four office tabs on one line (they wrapped before). Shrink the
           pills slightly and let the row scroll horizontally on very narrow screens rather
           than wrap. Desktop (>= 641px) is unaffected. */
        @media (max-width: 640px) {
            #mapTabs {
                flex-wrap: nowrap;
                gap: 6px;
                overflow-x: auto;
                scrollbar-width: none;
            }
            #mapTabs::-webkit-scrollbar { display: none; }
            .map-tab {
                flex: 0 0 auto;
                font-size: 12px;
                padding: 6px 10px;
                white-space: nowrap;
            }
        }

        html, body { overflow-x: hidden; max-width: 100%; }
    </style>
</head>

<body class="bg-cream text-ink font-body selection:bg-brand selection:text-white">

    <!-- TopNavBar — solid dark so it anchors the light page -->
    <header class="fixed top-0 w-full z-50 bg-ink">
        <div class="flex justify-between items-center px-5 sm:px-8 py-4 max-w-7xl mx-auto">
            <div class="flex items-center gap-6 lg:gap-10">
                <div class="flex items-center gap-2 mt-1"><a href="{{ url('') }}"><img
                            alt="Imperium Software Technologies" class="h-9 sm:h-10 w-auto"
                            src="{{ asset('image/imperium-logo-orange-new.png') }}" /></a></div>
                <nav class="hidden md:flex items-center space-x-5 lg:space-x-6">
                    <a class="text-stone-300 hover:text-white transition-colors text-sm font-medium"
                        href="{{ url('industry-influence') }}">Verticals</a>
                    <a class="text-stone-300 hover:text-white transition-colors text-sm font-medium"
                        href="{{ url('casestudy') }}">Case Studies</a>
                </nav>
            </div>
            <div class="flex items-center gap-3">
                {{-- Same CTA as the homepage bar. On this page it jumps to the form
                     rather than reloading /contact. The phone number it replaced is
                     still shown in the rail card and the footer. --}}
                <a href="#enquiry"
                    class="relative hidden sm:inline-flex items-center justify-center bg-gradient-to-b from-[#ff8555] to-[#ff5215] border border-orange-400/50 shadow-[inset_0_1px_1px_rgba(255,255,255,0.6),0_8px_18px_-6px_rgba(255,107,53,0.6)] hover:shadow-[inset_0_1px_2px_rgba(255,255,255,0.8),0_12px_24px_-6px_rgba(255,107,53,0.8)] hover:brightness-110 text-white font-bold text-sm px-4 py-2 rounded-lg transition-all duration-300 overflow-hidden group">
                    <div
                        class="absolute inset-0 w-[200%] h-full bg-gradient-to-r from-transparent via-white/5 to-transparent -translate-x-[150%] group-hover:translate-x-[50%] transition-transform duration-[1200ms] -skew-x-[20deg] ease-out pointer-events-none z-20">
                    </div>
                    <span class="relative z-10 drop-shadow-sm">Talk to an Expert</span>
                </a>
                <button id="mobile-menu-toggle" type="button" aria-label="Toggle navigation menu"
                    aria-controls="mobile-menu" aria-expanded="false"
                    class="md:hidden flex items-center justify-center w-10 h-10 rounded-lg text-stone-200 hover:text-white hover:bg-white/10 transition-colors">
                    <span class="material-symbols-outlined" id="mobile-menu-icon">menu</span>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="md:hidden hidden border-t border-white/10 bg-ink">
            <nav class="flex flex-col px-5 py-4 gap-1 max-w-7xl mx-auto">
                <a class="text-stone-300 hover:text-white hover:bg-white/5 transition-colors text-base font-medium py-3 px-2 rounded-lg border-b border-white/5"
                    href="{{ url('industry-influence') }}">Verticals</a>
                <a class="text-stone-300 hover:text-white hover:bg-white/5 transition-colors text-base font-medium py-3 px-2 rounded-lg border-b border-white/5"
                    href="{{ url('casestudy') }}">Case Studies</a>
                {{-- CTA for widths below sm, where the bar button is hidden --}}
                <a class="sm:hidden mt-3 flex items-center justify-center bg-gradient-to-b from-[#ff8555] to-[#ff5215] border border-orange-400/50 text-white font-bold text-base py-3 px-4 rounded-lg"
                    href="#enquiry">Talk to an Expert</a>
            </nav>
        </div>
    </header>

    <main>

        <!-- ===== Top band + overlapping form card ===== -->
        <section class="band band-grid relative pt-[132px] sm:pt-[150px] pb-52 sm:pb-60 px-5 sm:px-8">
            <div class="max-w-7xl mx-auto">
                <nav class="text-[13px] text-white/45 mb-6" aria-label="Breadcrumb">
                    <a href="{{ url('') }}" class="hover:text-white/80 transition-colors">Home</a>
                    <span class="mx-2">/</span><span class="text-white/70">Contact</span>
                </nav>
                <div class="max-w-3xl">
                    <h1
                        class="font-headline text-white text-[38px] sm:text-[54px] lg:text-[64px] font-bold leading-[1.05] tracking-[-0.03em]">
                        Let's start a<br class="hidden sm:block"> conversation.
                    </h1>
                    <p class="mt-6 text-white/65 text-base sm:text-lg leading-relaxed max-w-2xl">
                        Have questions about our platform? Tell us what you're working on and
                        we'll connect you with the right specialist.
                    </p>
                </div>

                <div class="mt-10 flex flex-wrap gap-x-10 gap-y-4 text-sm">
                    <div class="flex items-center gap-2.5 text-white/70">
                        <span class="material-symbols-outlined text-brand text-xl">schedule</span>
                        Reply within 1 business day
                    </div>
                    <div class="flex items-center gap-2.5 text-white/70">
                        <span class="material-symbols-outlined text-brand text-xl">headset_mic</span>
                        24 x 7 support for existing customers
                    </div>
                    <div class="flex items-center gap-2.5 text-white/70">
                        <span class="material-symbols-outlined text-brand text-xl">location_on</span>
                        4 offices across UAE, Singapore &amp; India
                    </div>
                </div>
            </div>
        </section>

        <!-- Form card, pulled up so it straddles the band and the page -->
        {{-- scroll-mt clears the fixed header when the nav CTA jumps here --}}
        <section id="enquiry" class="px-5 sm:px-8 -mt-40 sm:-mt-44 relative z-10 scroll-mt-24">
            <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-[minmax(0,1fr)_340px] gap-6">

                <div class="card-lift rounded-2xl p-6 sm:p-10">
                  <div id="ctcFormWrap">
                    <h2 class="font-headline text-2xl font-bold tracking-tight">Send us a message</h2>
                    <p class="mt-2 mb-8 text-sm text-stone-500">
                        Fields marked <span class="text-brand font-semibold">*</span> are required.
                    </p>

                    <div id="ctcStatus" class="ctc-status mb-6 px-4 py-3.5 rounded-xl text-sm font-medium" role="status"
                        aria-live="polite"></div>

                    <form id="ctcForm" novalidate>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-5 gap-y-5">

                            <div class="fld-wrap">
                                <label class="fld-label" for="firstName">First name <span class="req">*</span></label>
                                <input class="fld" type="text" id="firstName" autocomplete="given-name">
                                <p class="fld-error"></p>
                            </div>

                            <div class="fld-wrap">
                                <label class="fld-label" for="lastName">Last name <span class="req">*</span></label>
                                <input class="fld" type="text" id="lastName" autocomplete="family-name">
                                <p class="fld-error"></p>
                            </div>

                            <div class="fld-wrap">
                                <label class="fld-label" for="emailId">Work email <span class="req">*</span></label>
                                <input class="fld" type="email" id="emailId" autocomplete="email">
                                <p class="fld-error"></p>
                            </div>

                            <div class="fld-wrap">
                                <label class="fld-label" for="contactNumber">Phone <span class="req">*</span></label>
                                <input class="fld" type="tel" id="contactNumber" autocomplete="tel">
                                <p class="fld-error"></p>
                            </div>

                            <div class="fld-wrap">
                                <label class="fld-label" for="companyName">Company <span class="req">*</span></label>
                                <input class="fld" type="text" id="companyName" autocomplete="organization">
                                <p class="fld-error"></p>
                            </div>

                            <div class="fld-wrap">
                                <label class="fld-label" for="designation">Job title</label>
                                <input class="fld" type="text" id="designation" autocomplete="organization-title">
                                <p class="fld-error"></p>
                            </div>

                            <div class="fld-wrap sm:col-span-2">
                                <label class="fld-label" for="message">How can we help? <span
                                        class="req">*</span></label>
                                <textarea class="fld" id="message" rows="5"
                                    placeholder="Tell us about your current setup and what you're trying to achieve."></textarea>
                                <p class="fld-error"></p>
                            </div>

                        </div>

                        <div class="mt-8 flex flex-wrap items-center gap-4">
                            <button type="submit" id="ctcSubmit"
                                class="bg-gradient-to-b from-[#ff8555] to-[#ff5215] border border-orange-500/40 shadow-[0_10px_22px_-8px_rgba(255,107,53,.7)] hover:brightness-105 hover:-translate-y-0.5 disabled:opacity-60 disabled:cursor-not-allowed disabled:hover:translate-y-0 text-white font-bold px-5 py-2.5 rounded-xl transition-all duration-300 inline-flex items-center justify-center gap-2"
                                style="cursor:pointer">
                                <span class="spinner" aria-hidden="true"></span>
                                <span id="ctcSubmitText">Submit enquiry</span>
                            </button>
                            {{-- Mirrors the status banner next to the button, so the outcome is
                                 visible without scrolling back to the top of a long form. --}}
                            <p id="ctcInlineNote" class="hidden text-sm font-semibold"></p>
                        </div>
                    </form>
                  </div>

                    {{-- Success state: replaces the whole form so there is no ambiguity
                         about whether the enquiry went through. --}}
                    <div id="ctcSuccess" class="hidden text-center py-6" role="status" aria-live="assertive">
                        <div
                            class="mx-auto w-16 h-16 rounded-full bg-emerald-50 border border-emerald-200 flex items-center justify-center">
                            <span class="material-symbols-outlined text-emerald-600" style="font-size:36px">check_circle</span>
                        </div>
                        <h2 class="font-headline text-2xl font-bold tracking-tight mt-5">Enquiry received</h2>
                        <p class="mt-3 text-stone-500 text-sm leading-relaxed max-w-md mx-auto">
                            Thanks — your message is with our team. We'll reply within one business day to the email
                            address you gave us.
                        </p>
                        <button type="button" id="ctcAgain"
                            class="mt-7 text-sm font-bold text-brand hover:underline underline-offset-4"
                            style="cursor:pointer">Send another enquiry</button>
                    </div>
                </div>

                <!-- Side rail -->
                <aside class="flex flex-col gap-4">

                    <div class="rounded-2xl p-6 bg-ink text-white">
                        <h2 class="font-headline text-base font-bold">Talk to sales</h2>
                        <p class="mt-1 text-[13px] text-white/55">New projects, pricing and demos</p>
                        <a href="tel:+97142443417"
                            class="mt-4 flex items-center gap-2.5 text-sm font-semibold hover:text-brand transition-colors">
                            <span class="material-symbols-outlined text-brand text-xl">call</span> +971 4 244 3417
                        </a>
                        <a href="mailto:sales@imperiumapp.com"
                            class="mt-3 flex items-center gap-2.5 text-sm font-semibold break-all hover:text-brand transition-colors">
                            <span class="material-symbols-outlined text-brand text-xl">mail</span> sales@imperiumapp.com
                        </a>
                    </div>

                    <a href="mailto:support@imperiumapp.com" class="card-lift rounded-2xl p-6 block" id="support">
                        <div class="flex items-start gap-3">
                            <span
                                class="w-10 h-10 rounded-xl bg-brand/10 border border-brand/20 flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-brand text-xl">support_agent</span>
                            </span>
                            <div>
                                <h2 class="font-headline text-base font-bold">Already a customer?</h2>
                                <p class="mt-1 text-[13px] leading-relaxed text-stone-500">Our support desk is staffed
                                    24 x 7.</p>
                                <p class="mt-2 text-sm font-semibold text-brand break-all">support@imperiumapp.com</p>
                            </div>
                        </div>
                    </a>

                    <div class="card-lift rounded-2xl p-6">
                        <h2 class="font-headline text-base font-bold">Head office</h2>
                        <address class="mt-3 not-italic text-sm leading-relaxed text-stone-500">
                            1504, 1 Lake Plaza, Cluster T,<br>
                            Jumeirah Lakes Towers,<br>
                            P.O. Box 73916, Dubai, UAE
                        </address>
                        <a href="#offices"
                            class="mt-4 inline-flex items-center gap-1.5 text-sm font-bold text-brand hover:gap-2.5 transition-all">
                            See all offices
                            <span class="material-symbols-outlined text-base leading-none">arrow_forward</span>
                        </a>
                    </div>
                </aside>
            </div>
        </section>

        <!-- ===== Partner logos ===== -->
        <section class="px-5 sm:px-8 pt-20 pb-16">
            <div class="max-w-7xl mx-auto">
                <p class="text-center text-[11px] font-bold uppercase tracking-[0.18em] text-stone-400">
                    We partner with the world's leading technology providers
                </p>
                <div class="mt-9 flex flex-wrap sm:flex-nowrap items-center justify-center gap-x-6 md:gap-x-10 gap-y-6">
                    <img class="logo-mark logo-avaya" src="{{ url('images/reel%20logos/avaya.png') }}" alt="Avaya" loading="lazy">
                    <img class="logo-mark logo-microsoft" src="{{ url('images/reel%20logos/microsft.png') }}" alt="Microsoft" loading="lazy">
                    <img class="logo-mark logo-aws" src="{{ url('images/reel%20logos/aws.png') }}" alt="AWS" loading="lazy">
                    <img class="logo-mark logo-google" src="{{ url('images/reel%20logos/google%20cloud.png') }}" alt="Google Cloud" loading="lazy">
                    <img class="logo-mark logo-zoom" src="{{ url('images/reel%20logos/zoom.png') }}" alt="Zoom" loading="lazy">
                    <img class="logo-mark logo-sestek" src="{{ url('images/reel%20logos/sestek-logo-dark.png') }}" alt="Sestek" loading="lazy">
                    <img class="logo-mark logo-globitel" src="{{ url('images/reel%20logos/globitel.png') }}" alt="Globitel" loading="lazy">
                </div>
            </div>
        </section>

        <!-- ===== Offices ===== -->
        <section class="px-5 sm:px-8 py-16 border-t border-stone-200/70" id="offices">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-wrap items-end justify-between gap-4">
                    <div>
                        <h2 class="font-headline text-3xl sm:text-[38px] font-bold tracking-[-0.02em]">Our offices</h2>
                        <p class="mt-2 text-stone-500">Imperium Software Technologies DMCC and regional offices.</p>
                    </div>
                    <a href="mailto:sales@imperiumapp.com"
                        class="text-sm font-bold text-brand hover:underline underline-offset-4">General enquiries
                        &rarr;</a>
                </div>

                <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

                    <div class="card-lift rounded-2xl p-6 flex flex-col">
                        <div class="flex items-center gap-2.5">
                            <h3 class="font-headline text-lg font-bold">Dubai</h3>
                            <span
                                class="px-2 py-0.5 rounded-full bg-brand text-[10px] font-bold uppercase tracking-wider text-white">HQ</span>
                        </div>
                        <address class="mt-3 not-italic text-sm leading-relaxed text-stone-500 flex-1">
                            1504, 1 Lake Plaza, Cluster T,<br>Jumeirah Lakes Towers,<br>P.O. Box 73916, Dubai, UAE
                        </address>
                        <div class="mt-5 pt-4 border-t border-stone-200 text-sm space-y-1">
                            <a class="block font-semibold hover:text-brand transition-colors" href="tel:+97142443417">+971 4 244 3417</a>
                            <p class="text-stone-400 text-[13px]">Fax +971 4 244 3419</p>
                        </div>
                    </div>

                    <div class="card-lift rounded-2xl p-6 flex flex-col">
                        <h3 class="font-headline text-lg font-bold">Singapore</h3>
                        <address class="mt-3 not-italic text-sm leading-relaxed text-stone-500 flex-1">
                            21 Tan Quee Lan Street,<br>#02-04 Heritage Place,<br>Singapore 188108
                        </address>
                        <div class="mt-5 pt-4 border-t border-stone-200 text-sm">
                            <a class="block font-semibold hover:text-brand transition-colors" href="tel:+6567730274">+65 6773 0274</a>
                        </div>
                    </div>

                    <div class="card-lift rounded-2xl p-6 flex flex-col">
                        <h3 class="font-headline text-lg font-bold">Chennai</h3>
                        <address class="mt-3 not-italic text-sm leading-relaxed text-stone-500 flex-1">
                            47/2 Ashok Nagar, 53rd Street,<br>Indira Colony, Chennai,<br>Tamil Nadu 600083
                        </address>
                        <div class="mt-5 pt-4 border-t border-stone-200 text-sm">
                            <a class="block font-semibold hover:text-brand transition-colors" href="tel:+914442122440">+91 44 421 22440</a>
                        </div>
                    </div>

                    <div class="card-lift rounded-2xl p-6 flex flex-col">
                        <h3 class="font-headline text-lg font-bold">Bengaluru</h3>
                        <address class="mt-3 not-italic text-sm leading-relaxed text-stone-500 flex-1">
                            WMMX+H5X, Kaverappa Layout,<br>Kadubeesanahalli,<br>Bengaluru,
                            Karnataka 560103
                        </address>
                        <div class="mt-5 pt-4 border-t border-stone-200 text-sm">
                            <a class="block font-semibold hover:text-brand transition-colors" href="tel:+918041622894">+91 80 416 22894</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ===== Map =====
             A Google `output=embed` iframe takes a single query, so it cannot pin
             four offices at once (multi-pin needs a My Maps map or the paid Embed
             API). Instead one iframe is re-pointed on click — which also means
             only the selected city's map is ever loaded. -->
        <section class="px-5 sm:px-8 pb-20">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-wrap gap-2 mb-5" id="mapTabs">
                    <button type="button" data-city="Dubai"
                        data-q="1%20Lake%20Plaza%2C%20Cluster%20T%2C%20Jumeirah%20Lakes%20Towers%2C%20Dubai"
                        class="map-tab is-active" style="cursor:pointer">Dubai</button>
                    {{-- Use a street address, not lat/long. A bare `q=<lat>,<lng>` pins
                         the right spot but Google then looks for a place entity at that
                         coordinate, finds none, and overlays "Place info couldn't load".
                         Labelling it as `q=lat,lng(Name)` does not help — Google strips
                         the label: both forms redirect to the same embed
                         (…!1s1.298707,103.856363!6i16), verified by request. An address
                         survives the redirect intact and resolves to a real place, so
                         the info card populates. Lead with the street, not the building
                         name — "Heritage Place, …" geocoded poorly. --}}
                    <button type="button" data-city="Singapore"
                        data-q="21%20Tan%20Quee%20Lan%20Street%2C%20Singapore%20188108"
                        class="map-tab" style="cursor:pointer">Singapore</button>
                    <button type="button" data-city="Chennai"
                        data-q="53rd%20Street%2C%20Ashok%20Nagar%2C%20Chennai%2C%20Tamil%20Nadu%20600083"
                        class="map-tab" style="cursor:pointer">Chennai</button>
                    {{-- Bengaluru uses the official Google Maps "Share > Embed a map"
                         URL (data-embed) — a precise place pin + info card with no
                         "Place info couldn't load" error. --}}
                    <button type="button" data-city="Bengaluru"
                        data-embed="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124440.53992890868!2d77.5413961304097!3d12.922699710126205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae13001725add5%3A0x13bed68d065414de!2sINAIPI%20PRIVATE%20LIMITED!5e0!3m2!1sen!2sin!4v1785298232644!5m2!1sen!2sin"
                        class="map-tab" style="cursor:pointer">Bengaluru</button>
                </div>
                <div class="rounded-2xl overflow-hidden border border-stone-200 h-[380px]">
                    <iframe id="officeMap" class="map-frame w-full h-full" style="border:0" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" allowfullscreen
                        title="Imperium office location — Dubai"
                        src="https://www.google.com/maps?q=1%20Lake%20Plaza%2C%20Cluster%20T%2C%20Jumeirah%20Lakes%20Towers%2C%20Dubai&z=16&output=embed"></iframe>
                </div>
            </div>
        </section>

        <section class="px-5 sm:px-8 pb-20">
            <div class="max-w-3xl mx-auto">
                @include('layouts.components.aeo', ['slug' => 'contact'])
            </div>
        </section>
    </main>

    <!-- Footer — dark anchor. Offices are omitted here; the page lists them above. -->
    <footer class="bg-[#121211]">
        <!-- Support / contact band — mirrors the homepage footer so the two pages read as
             one site. Channels are differentiated by PURPOSE (each says who it is for)
             rather than presented as equal boxes, which tells the visitor nothing about
             which to pick.
             NOTE: this page's Tailwind config does NOT define the homepage's Material
             tokens (surface-container-lowest / on-surface-variant / primary-container),
             so their values are inlined as arbitrary classes — #0e0e0e, #D1D5DB, #ff6b35.
             Copying the homepage markup verbatim renders unstyled here. -->
        <section class="relative py-20 sm:py-28 px-5 sm:px-8 bg-[#0e0e0e] overflow-hidden">
            <div class="absolute -top-24 -left-32 w-[520px] max-w-full h-[320px] bg-[#ff6b35]/10 blur-[130px] rounded-full pointer-events-none"></div>
            <div class="relative z-10 max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-[minmax(0,0.9fr)_minmax(0,1.1fr)] gap-12 lg:gap-20 items-start">

                <div>
                    <h2 class="text-3xl sm:text-4xl lg:text-[42px] font-bold font-headline text-white leading-[1.1] tracking-tight">
                        Support that answers,<br class="hidden sm:block"> not a ticket queue
                    </h2>
                    <p class="mt-5 text-[#D1D5DB] leading-relaxed max-w-md">
                        Every Imperium deployment is backed by engineers who know the platform.
                        Pick the route that fits — we'll route you to the right desk.
                    </p>
                    <div class="mt-7 inline-flex items-center gap-2.5 text-sm text-[#D1D5DB]">
                        <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                        Support desk staffed 24 / 7, every day of the year
                    </div>
                </div>

                <div class="border-t border-white/10">
                    <a href="mailto:support@imperiumapp.com"
                        class="group flex items-center justify-between gap-6 py-6 border-b border-white/10 hover:border-[#ff6b35]/40 transition-colors">
                        <span class="min-w-0">
                            <span class="block text-white font-bold text-lg">Technical support</span>
                            <span class="block text-sm text-[#D1D5DB] mt-1">Already running Imperium? Raise an issue any hour.</span>
                        </span>
                        <span class="shrink-0 text-right">
                            <span class="block text-[#ff6b35] font-semibold text-sm break-all">support@imperiumapp.com</span>
                            <span class="block text-[11px] uppercase tracking-wider text-[#D1D5DB] mt-1">24 / 7</span>
                        </span>
                    </a>

                    <a href="mailto:sales@imperiumapp.com"
                        class="group flex items-center justify-between gap-6 py-6 border-b border-white/10 hover:border-[#ff6b35]/40 transition-colors">
                        <span class="min-w-0">
                            <span class="block text-white font-bold text-lg">Sales &amp; new projects</span>
                            <span class="block text-sm text-[#D1D5DB] mt-1">Pricing, demos and scoping a new deployment.</span>
                        </span>
                        <span class="shrink-0 text-right">
                            <span class="block text-[#ff6b35] font-semibold text-sm break-all">sales@imperiumapp.com</span>
                            <span class="block text-[11px] uppercase tracking-wider text-[#D1D5DB] mt-1">Replies in 1 day</span>
                        </span>
                    </a>

                    <a href="tel:+97142443417"
                        class="group flex items-center justify-between gap-6 py-6 border-b border-white/10 hover:border-[#ff6b35]/40 transition-colors">
                        <span class="min-w-0">
                            <span class="block text-white font-bold text-lg">Speak to someone</span>
                            <span class="block text-sm text-[#D1D5DB] mt-1">Straight through to the Dubai head office.</span>
                        </span>
                        <span class="shrink-0 text-right">
                            <span class="block text-[#ff6b35] font-semibold text-sm">+971 4 244 3417</span>
                            <span class="block text-[11px] uppercase tracking-wider text-[#D1D5DB] mt-1">Head office</span>
                        </span>
                    </a>
                </div>
            </div>
        </section>

        <div class="bg-[#121211] border-t border-white/10 py-6 px-5 sm:px-8">
            <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="text-white/70 text-sm order-3 md:order-1">&copy; <?php echo date('Y'); ?> Imperium. All rights
                    reserved.</p>
                <div class="flex items-center gap-3 text-white/80 text-sm order-1 md:order-2">
                    <a href="{{ url('industry-influence') }}" class="hover:text-orange-300 transition-colors">Verticals</a>
                    <span class="text-white/30">|</span>
                    <a href="{{ url('casestudy') }}" class="hover:text-orange-300 transition-colors">Case Studies</a>
                </div>
                <div class="flex gap-2 order-2 md:order-3">
                    <a href="https://www.facebook.com/imperiumapp" target="_blank" rel="noopener" aria-label="Facebook"
                        class="w-8 h-8 rounded-full bg-white/10 hover:bg-orange-500/30 text-white flex items-center justify-center transition-colors"><svg
                            viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path
                                d="M13.5 21v-8h2.7l.4-3h-3.1V8.1c0-.9.3-1.5 1.6-1.5H17V3.9c-.3 0-1.3-.1-2.4-.1-2.4 0-4 1.5-4 4.1V10H8v3h2.6v8h2.9z" />
                        </svg></a>
                    <a href="https://twitter.com/imperiumapp" target="_blank" rel="noopener" aria-label="X"
                        class="w-8 h-8 rounded-full bg-white/10 hover:bg-orange-500/30 text-white flex items-center justify-center transition-colors"><svg
                            viewBox="0 0 24 24" fill="currentColor" class="w-3.5 h-3.5">
                            <path
                                d="M17.5 3h3l-6.6 7.6L21.7 21h-6.1l-4.3-5.6L6.3 21H3.3l7-8.1L2.6 3h6.2l3.9 5.1L17.5 3zm-1.1 16h1.7L7.7 4.8H5.9L16.4 19z" />
                        </svg></a>
                    <a href="https://www.instagram.com/imperiumsoftware/" target="_blank" rel="noopener"
                        aria-label="Instagram"
                        class="w-8 h-8 rounded-full bg-white/10 hover:bg-orange-500/30 text-white flex items-center justify-center transition-colors"><svg
                            viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163C8.741 0 8.332.014 7.052.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                        </svg></a>
                    <a href="https://www.youtube.com/@imperiumsoftwaretechnologi9361" target="_blank" rel="noopener"
                        aria-label="YouTube"
                        class="w-8 h-8 rounded-full bg-white/10 hover:bg-orange-500/30 text-white flex items-center justify-center transition-colors"><svg
                            viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path
                                d="M23 12s0-3.2-.4-4.7c-.2-.9-.9-1.5-1.7-1.7C19.4 5.2 12 5.2 12 5.2s-7.4 0-8.9.4c-.8.2-1.5.8-1.7 1.7C1 8.8 1 12 1 12s0 3.2.4 4.7c.2.9.9 1.5 1.7 1.7 1.5.4 8.9.4 8.9.4s7.4 0 8.9-.4c.8-.2 1.5-.8 1.7-1.7.4-1.5.4-4.7.4-4.7zM9.8 15.3V8.7l6.2 3.3-6.2 3.3z" />
                        </svg></a>
                    <a href="https://www.linkedin.com/company/imperium-software-technologies/" target="_blank"
                        rel="noopener" aria-label="LinkedIn"
                        class="w-8 h-8 rounded-full bg-white/10 hover:bg-orange-500/30 text-white flex items-center justify-center transition-colors"><svg
                            viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3">
                            <path
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.225 0z" />
                        </svg></a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // ---- Mobile nav ----
        (function () {
            var toggle = document.getElementById('mobile-menu-toggle');
            var menu = document.getElementById('mobile-menu');
            var icon = document.getElementById('mobile-menu-icon');
            if (!toggle || !menu) { return; }

            toggle.addEventListener('click', function () {
                var open = menu.classList.toggle('hidden') === false;
                toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
                if (icon) { icon.textContent = open ? 'close' : 'menu'; }
            });
        })();

        // ---- Office map switcher ----
        (function () {
            var tabs = document.getElementById('mapTabs');
            var map = document.getElementById('officeMap');
            if (!tabs || !map) { return; }

            tabs.addEventListener('click', function (e) {
                var btn = e.target.closest('.map-tab');
                if (!btn) { return; }

                tabs.querySelectorAll('.map-tab').forEach(function (b) {
                    b.classList.remove('is-active');
                });
                btn.classList.add('is-active');

                // A tab may supply a full ready-made embed URL (Google Maps
                // "Share > Embed a map", the /maps/embed?pb=... form) via data-embed —
                // used when a plain q= search won't pin the place cleanly. Otherwise
                // build a q= search. z=16 keeps the q= pin at street level — without it
                // Google picks a zoom from the match type, so a city-level match renders
                // as an unreadable region with no obvious marker.
                var embed = btn.getAttribute('data-embed');
                map.src = embed ? embed : 'https://www.google.com/maps?q=' + btn.getAttribute('data-q') + '&z=16&output=embed';
                map.title = 'Imperium office location — ' + btn.getAttribute('data-city');
            });
        })();

        // ---- Enquiry form ----
        (function () {
            var form = document.getElementById('ctcForm');
            var submit = document.getElementById('ctcSubmit');
            var submitText = document.getElementById('ctcSubmitText');
            var status = document.getElementById('ctcStatus');
            var formWrap = document.getElementById('ctcFormWrap');
            var successPanel = document.getElementById('ctcSuccess');
            var againBtn = document.getElementById('ctcAgain');
            var inlineNote = document.getElementById('ctcInlineNote');
            if (!form) { return; }

            // The banner sits above a long form while the submit button sits below it,
            // so feedback shown only at the top is off-screen at the moment you click.
            // Every outcome therefore also scrolls itself into view.
            function reveal(el) {
                if (!el || typeof el.scrollIntoView !== 'function') { return; }
                try { el.scrollIntoView({ behavior: 'smooth', block: 'center' }); }
                catch (e) { el.scrollIntoView(); }
            }

            function setInlineNote(type, text) {
                if (!inlineNote) { return; }
                inlineNote.className = 'text-sm font-semibold ' +
                    (type === 'error' ? 'text-red-600' : 'text-stone-500');
                inlineNote.textContent = text;
            }

            function clearInlineNote() {
                if (!inlineNote) { return; }
                inlineNote.className = 'hidden text-sm font-semibold';
                inlineNote.textContent = '';
            }

            // Consumer domains are rejected — enquiries are expected from a company address.
            var blockedDomains = ['gmail.com', 'outlook.com', 'hotmail.com', 'yahoo.com'];
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            var STATUS_CLASSES = {
                success: ['bg-emerald-50', 'border', 'border-emerald-200', 'text-emerald-800'],
                error: ['bg-red-50', 'border', 'border-red-200', 'text-red-700'],
                info: ['bg-stone-100', 'border', 'border-stone-200', 'text-stone-600']
            };

            function clearStatus() {
                status.className = 'ctc-status mb-6 px-4 py-3.5 rounded-xl text-sm font-medium';
                status.textContent = '';
            }

            function setStatus(type, text) {
                clearStatus();
                status.classList.add('is-visible');
                STATUS_CLASSES[type].forEach(function (c) { status.classList.add(c); });
                status.textContent = text;
            }

            function wrapOf(el) { return el.closest('.fld-wrap'); }

            function setError(el, message) {
                var wrap = wrapOf(el);
                wrap.classList.add('is-invalid');
                wrap.querySelector('.fld-error').textContent = message;
            }

            function clearErrors() {
                form.querySelectorAll('.fld-wrap').forEach(function (wrap) {
                    wrap.classList.remove('is-invalid');
                    var err = wrap.querySelector('.fld-error');
                    if (err) { err.textContent = ''; }
                });
            }

            function clearOne(el) {
                var wrap = wrapOf(el);
                if (!wrap) { return; }
                wrap.classList.remove('is-invalid');
                var err = wrap.querySelector('.fld-error');
                if (err) { err.textContent = ''; }
            }

            form.addEventListener('input', function (e) { clearOne(e.target); });
            form.addEventListener('change', function (e) { clearOne(e.target); });

            function val(id) { return document.getElementById(id).value.trim(); }

            form.addEventListener('submit', function (event) {
                event.preventDefault();
                clearStatus();
                clearErrors();

                var values = {
                    firstName: val('firstName'),
                    lastName: val('lastName'),
                    emailId: val('emailId'),
                    // Strip the separators people paste in before validating/sending.
                    contactNumber: val('contactNumber').replace(/[-() ]+/g, ''),
                    companyName: val('companyName'),
                    designation: val('designation'),
                    message: val('message')
                };

                var ok = true;
                var required = [
                    ['firstName', values.firstName, 'Please enter your first name.'],
                    ['lastName', values.lastName, 'Please enter your last name.'],
                    ['emailId', values.emailId, 'Please enter your work email.'],
                    ['contactNumber', values.contactNumber, 'Please enter a phone number.'],
                    ['companyName', values.companyName, 'Please enter your company name.'],
                    ['message', values.message, 'Please tell us how we can help.']
                ];

                required.forEach(function (row) {
                    if (!row[1]) {
                        setError(document.getElementById(row[0]), row[2]);
                        ok = false;
                    }
                });

                if (values.emailId) {
                    var domain = (values.emailId.split('@')[1] || '').toLowerCase();
                    if (!emailPattern.test(values.emailId)) {
                        setError(document.getElementById('emailId'), 'Please enter a valid email address.');
                        ok = false;
                    } else if (blockedDomains.indexOf(domain) !== -1) {
                        setError(document.getElementById('emailId'), 'Please use your company email address.');
                        ok = false;
                    }
                }

                if (values.contactNumber && !/^\+?[0-9]{6,15}$/.test(values.contactNumber)) {
                    setError(document.getElementById('contactNumber'), 'Please enter a valid phone number.');
                    ok = false;
                }

                if (!ok) {
                    setStatus('error', 'Please correct the highlighted fields and try again.');
                    setInlineNote('error', 'Check the highlighted fields above.');
                    var firstBad = form.querySelector('.fld-wrap.is-invalid .fld');
                    if (firstBad) {
                        // Centre it first, then focus without a second jump — a bare
                        // focus() can land the field underneath the fixed header.
                        reveal(firstBad);
                        try { firstBad.focus({ preventScroll: true }); } catch (e) { firstBad.focus(); }
                    }
                    return;
                }

                submit.disabled = true;
                submit.classList.add('is-busy');
                submitText.textContent = 'Sending…';
                setStatus('info', 'Submitting your enquiry…');
                setInlineNote('info', 'Sending your enquiry…');

                var body = new URLSearchParams();
                body.append('meta', JSON.stringify(values));
                body.append('subject', 'Website enquiry');
                body.append('message', values.message);

                fetch('https://inaipi.ae/imperiumapp/email.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                        'X-Auth-Key': '1mper1umapp2023'
                    },
                    body: body.toString()
                })
                    .then(function (res) { return res.text(); })
                    .then(function (text) {
                        if (text.trim() === 'Email sent successfully!') {
                            form.reset();
                            clearStatus();
                            clearInlineNote();
                            // Swap the whole form out for the confirmation panel, so the
                            // result cannot be missed or mistaken for "nothing happened".
                            if (formWrap && successPanel) {
                                formWrap.classList.add('hidden');
                                successPanel.classList.remove('hidden');
                                reveal(successPanel);
                            } else {
                                setStatus('success', 'Thanks — we\'ve received your enquiry.');
                            }
                        } else {
                            setStatus('error', 'We could not submit your enquiry: ' + text);
                            setInlineNote('error', 'Could not send — see the message above.');
                            reveal(status);
                        }
                    })
                    .catch(function () {
                        setStatus('error', 'Something went wrong while submitting your enquiry. Please try again, or email sales@imperiumapp.com directly.');
                        setInlineNote('error', 'Could not send — see the message above.');
                        reveal(status);
                    })
                    .then(function () {
                        submit.disabled = false;
                        submit.classList.remove('is-busy');
                        submitText.textContent = 'Submit enquiry';
                    });
            });

            // "Send another enquiry" — back to a clean form.
            if (againBtn) {
                againBtn.addEventListener('click', function () {
                    successPanel.classList.add('hidden');
                    formWrap.classList.remove('hidden');
                    clearStatus();
                    clearInlineNote();
                    clearErrors();
                    reveal(formWrap);
                });
            }
        })();
    </script>
</body>

</html>

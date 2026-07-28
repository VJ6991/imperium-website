<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    {!! Helper::setMetaTags($meta) !!}
    <meta name="robots" content="index, follow" />
    <meta name="theme-color" content="#14110f" />
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

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link rel="preconnect" href="https://api.fontshare.com" crossorigin />
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@1&amp;display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            theme: {
                extend: {
                    "colors": {
                        "ink": "#14110F",
                        "cream": "#FAF7F4",
                        "brand": "#FF6B35"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "fontFamily": {
                        "headline": ["Satoshi", "sans-serif"],
                        "body": ["Satoshi", "sans-serif"],
                        "label": ["Satoshi", "sans-serif"]
                    }
                },
            },
        }
    </script>

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

        select.fld {
            appearance: none;
            -webkit-appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2378716c' stroke-width='2'%3E%3Cpath d='m6 9 6 6 6-6'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 18px;
            padding-right: 38px;
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
           they sit directly on the surface — no white tile needed. */
        .logo-mark {
            height: 34px;
            width: auto;
            object-fit: contain;
            filter: grayscale(1);
            opacity: .55;
            transition: filter .25s ease, opacity .25s ease;
        }

        .logo-mark:hover { filter: none; opacity: 1; }

        .map-frame { filter: saturate(.85) contrast(1.02); }

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
                        Let's talk about your<br class="hidden sm:block"> customer experience
                    </h1>
                    <p class="mt-6 text-white/65 text-base sm:text-lg leading-relaxed max-w-2xl">
                        Whether you're replacing an ageing PBX, moving your contact centre to the cloud, or adding AI
                        to a journey that already works — tell us where you are and we'll bring the right people.
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

                            <div class="fld-wrap">
                                <label class="fld-label" for="country">Country <span class="req">*</span></label>
                                <select class="fld" id="country">
                                    <option value="">Please select</option>
                                    <option>United Arab Emirates</option>
                                    <option>Saudi Arabia</option>
                                    <option>Qatar</option>
                                    <option>Kuwait</option>
                                    <option>Bahrain</option>
                                    <option>Oman</option>
                                    <option>India</option>
                                    <option>Singapore</option>
                                    <option>Malaysia</option>
                                    <option>United Kingdom</option>
                                    <option>United States</option>
                                    <option>Other</option>
                                </select>
                                <p class="fld-error"></p>
                            </div>

                            <div class="fld-wrap">
                                <label class="fld-label" for="companySize">Company size</label>
                                <select class="fld" id="companySize">
                                    <option value="">Please select</option>
                                    <option>1 &ndash; 50</option>
                                    <option>51 &ndash; 200</option>
                                    <option>201 &ndash; 1,000</option>
                                    <option>1,001 &ndash; 5,000</option>
                                    <option>5,000+</option>
                                </select>
                                <p class="fld-error"></p>
                            </div>

                            <div class="fld-wrap sm:col-span-2">
                                <label class="fld-label" for="topic">What can we help with? <span
                                        class="req">*</span></label>
                                <select class="fld" id="topic">
                                    <option value="">Please select</option>
                                    <option>Omnichannel contact center</option>
                                    <option>Enterprise telephony / CTI</option>
                                    <option>IVR &amp; automation</option>
                                    <option>Cloud &amp; hosted solutions</option>
                                    <option>Hospitality solutions</option>
                                    <option>Partnership enquiry</option>
                                    <option>Something else</option>
                                </select>
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
                        </div>
                    </form>
                </div>

                <!-- Side rail -->
                <aside class="flex flex-col gap-4">

                    <div class="rounded-2xl p-6 bg-ink text-white">
                        <h2 class="font-headline text-base font-bold">Prefer to call?</h2>
                        <p class="mt-1 text-[13px] text-white/55">Sales &amp; new projects</p>
                        <a href="tel:+97142443417"
                            class="mt-4 flex items-center gap-2.5 text-lg font-bold hover:text-brand transition-colors">
                            <span class="material-symbols-outlined text-brand">call</span> +971 4 244 3417
                        </a>
                        <p class="mt-1.5 text-xs text-white/45 pl-9">Sun &ndash; Thu, 9:00 &ndash; 18:00 GST</p>
                        <a href="mailto:sales@imperiumapp.com"
                            class="mt-4 flex items-center gap-2.5 text-sm font-semibold break-all hover:text-brand transition-colors">
                            <span class="material-symbols-outlined text-brand">mail</span> sales@imperiumapp.com
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
                <div class="mt-9 flex flex-wrap items-center justify-center gap-x-12 gap-y-8">
                    <img class="logo-mark" src="{{ url('images/reel%20logos/avaya.png') }}" alt="Avaya" loading="lazy">
                    <img class="logo-mark" src="{{ url('images/reel%20logos/microsft.png') }}" alt="Microsoft" loading="lazy">
                    <img class="logo-mark" src="{{ url('images/reel%20logos/aws.png') }}" alt="AWS" loading="lazy">
                    <img class="logo-mark" src="{{ url('images/reel%20logos/google%20cloud.png') }}" alt="Google Cloud" loading="lazy">
                    <img class="logo-mark" src="{{ url('images/reel%20logos/zoom.png') }}" alt="Zoom" loading="lazy">
                    <img class="logo-mark" src="{{ url('images/reel%20logos/sestek-logo-dark.png') }}" alt="Sestek" loading="lazy">
                    <img class="logo-mark" src="{{ url('images/reel%20logos/globitel.png') }}" alt="Globitel" loading="lazy">
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
                            #1, Model House, Double Tank Colony Road,<br>KK Nagar, Chennai,<br>India 600078
                        </address>
                        <div class="mt-5 pt-4 border-t border-stone-200 text-sm">
                            <a class="block font-semibold hover:text-brand transition-colors" href="tel:+914442122440">+91 44 421 22440</a>
                        </div>
                    </div>

                    <div class="card-lift rounded-2xl p-6 flex flex-col">
                        <h3 class="font-headline text-lg font-bold">Bengaluru</h3>
                        <address class="mt-3 not-italic text-sm leading-relaxed text-stone-500 flex-1">
                            #870, 1st Floor, Geethanjali House,<br>BDA Layout, New Thippassandra,<br>Bengaluru,
                            Karnataka 560075
                        </address>
                        <div class="mt-5 pt-4 border-t border-stone-200 text-sm">
                            <a class="block font-semibold hover:text-brand transition-colors" href="tel:+918041622894">+91 80 416 22894</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ===== Map ===== -->
        <section class="px-5 sm:px-8 pb-20">
            <div class="max-w-7xl mx-auto">
                <div class="rounded-2xl overflow-hidden border border-stone-200 h-[380px]">
                    <iframe class="map-frame w-full h-full" style="border:0" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" allowfullscreen
                        title="Imperium head office, Jumeirah Lakes Towers, Dubai"
                        src="https://www.google.com/maps?q=1%20Lake%20Plaza%2C%20Cluster%20T%2C%20Jumeirah%20Lakes%20Towers%2C%20Dubai&output=embed"></iframe>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer — dark anchor. Offices are omitted here; the page lists them above. -->
    <footer class="bg-[#121211]">
        <div class="relative bg-cover bg-center py-24 px-5"
            style="background-image:url('{{ asset('image/customercare-banner.png') }}')">
            <div class="absolute inset-0 bg-black/50"></div>
            <div class="relative z-10 max-w-3xl mx-auto text-center text-white">
                <h2 class="text-3xl sm:text-4xl font-light mb-3">24 x 7 Support</h2>
                <p class="text-white/80 mb-8">Experience World-class support From our expert team.</p>
                <div class="flex flex-col items-center gap-4 text-lg font-light">
                    <a href="tel:+97142443417"
                        class="inline-flex items-center gap-3 hover:text-orange-300 transition-colors"><span
                            class="material-symbols-outlined text-2xl">smartphone</span> +9714 2443417</a>
                    <a href="mailto:support@imperiumapp.com"
                        class="inline-flex items-center gap-3 hover:text-orange-300 transition-colors"><span
                            class="material-symbols-outlined text-2xl">mail</span> support@imperiumapp.com</a>
                </div>
            </div>
        </div>

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
                            viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path
                                d="M12 2.2c3.2 0 3.6 0 4.9.1 1.2.1 1.8.2 2.2.4.6.2 1 .5 1.4.9.4.4.7.8.9 1.4.2.4.3 1 .4 2.2.1 1.3.1 1.7.1 4.9s0 3.6-.1 4.9c-.1 1.2-.2 1.8-.4 2.2-.2.6-.5 1-.9 1.4-.4.4-.8.7-1.4.9-.4.2-1 .3-2.2.4-1.3.1-1.7.1-4.9.1s-3.6 0-4.9-.1c-1.2-.1-1.8-.2-2.2-.4-.6-.2-1-.5-1.4-.9-.4-.4-.7-.8-.9-1.4-.2-.4-.3-1-.4-2.2-.1-1.3-.1-1.7-.1-4.9s0-3.6.1-4.9c.1-1.2.2-1.8.4-2.2.2-.6.5-1 .9-1.4.4-.4.8-.7 1.4-.9.4-.2 1-.3 2.2-.4 1.3-.1 1.7-.1 4.9-.1zm0 1.8c-3.1 0-3.5 0-4.8.1-1.1.1-1.7.2-2.1.4-.5.2-.9.4-1.2.8-.4.3-.6.7-.8 1.2-.2.4-.3 1-.4 2.1-.1 1.3-.1 1.7-.1 4.8s0 3.5.1 4.8c.1 1.1.2 1.7.4 2.1.2.5.4.9.8 1.2.3.4.7.6 1.2.8.4.2 1 .3 2.1.4 1.3.1 1.7.1 4.8.1s3.5 0 4.8-.1c1.1-.1 1.7-.2 2.1-.4.5-.2.9-.4 1.2-.8.4-.3.6-.7.8-1.2.2-.4.3-1 .4-2.1.1-1.3.1-1.7.1-4.8s0-3.5-.1-4.8c-.1-1.1-.2-1.7-.4-2.1-.2-.5-.4-.9-.8-1.2-.3-.4-.7-.6-1.2-.8-.4-.2-1-.3-2.1-.4-1.3-.1-1.7-.1-4.8-.1zm0 3.1a4.9 4.9 0 100 9.8 4.9 4.9 0 000-9.8zm0 8.1a3.2 3.2 0 110-6.4 3.2 3.2 0 010 6.4zm5-8.3a1.15 1.15 0 11-2.3 0 1.15 1.15 0 012.3 0z" />
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
                            viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path
                                d="M6.9 8.4H3.9V21h3V8.4zM5.4 3.3C4.4 3.3 3.7 4 3.7 5s.7 1.7 1.7 1.7S7.1 6 7.1 5s-.7-1.7-1.7-1.7zM21 13.9c0-2.9-.6-5.1-4-5.1-1.6 0-2.7.9-3.1 1.7h-.1V8.4H10.9V21h3v-6.2c0-1.3.2-2.5 1.8-2.5s1.6 1.5 1.6 2.6V21h3v-7.1z" />
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

        // ---- Enquiry form ----
        (function () {
            var form = document.getElementById('ctcForm');
            var submit = document.getElementById('ctcSubmit');
            var submitText = document.getElementById('ctcSubmitText');
            var status = document.getElementById('ctcStatus');
            if (!form) { return; }

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
                    country: val('country'),
                    companySize: val('companySize'),
                    topic: val('topic'),
                    message: val('message')
                };

                var ok = true;
                var required = [
                    ['firstName', values.firstName, 'Please enter your first name.'],
                    ['lastName', values.lastName, 'Please enter your last name.'],
                    ['emailId', values.emailId, 'Please enter your work email.'],
                    ['contactNumber', values.contactNumber, 'Please enter a phone number.'],
                    ['companyName', values.companyName, 'Please enter your company name.'],
                    ['country', values.country, 'Please select your country.'],
                    ['topic', values.topic, 'Please choose what this is about.'],
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
                    var firstBad = form.querySelector('.fld-wrap.is-invalid .fld');
                    if (firstBad) { firstBad.focus(); }
                    return;
                }

                submit.disabled = true;
                submit.classList.add('is-busy');
                submitText.textContent = 'Sending…';
                setStatus('info', 'Submitting your enquiry…');

                var body = new URLSearchParams();
                body.append('meta', JSON.stringify(values));
                body.append('subject', 'Website enquiry — ' + values.topic);
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
                            setStatus('success', 'Thanks — we\'ve received your enquiry and will be in touch within one business day.');
                        } else {
                            setStatus('error', 'We could not submit your enquiry: ' + text);
                        }
                    })
                    .catch(function () {
                        setStatus('error', 'Something went wrong while submitting your enquiry. Please try again, or email sales@imperiumapp.com directly.');
                    })
                    .then(function () {
                        submit.disabled = false;
                        submit.classList.remove('is-busy');
                        submitText.textContent = 'Submit enquiry';
                    });
            });
        })();
    </script>
</body>

</html>

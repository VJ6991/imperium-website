<!DOCTYPE html>
<html lang="en" ng-app="mainApp">
<head>
	<meta charset="utf-8">
	<meta http-equiv="content-language" content="en" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="distribution" content="Global" />
	<meta name="revisit-after" content="5 days" />
	<meta name="robots" content="index, follow" />
    <meta name="google-site-verification" content="8ZS7ObIPD_HY2V1R9ViKLJ65UQhunoa8W2NXvUBbe78" />
    <meta name="msvalidate.01" content="CA0D508B252931B834659FBBED710798" />
	<link rel="shortcut icon" href="{{asset('image/fav.png')}}" type="image/png">

	<meta name="theme-color" content="#ffffff">
    @yield('meta')
    <!-- Structured data (helps search + AI answer engines understand the brand).
         Built in PHP from Seo:: so the Organization record is identical on every
         page and on the static homepage - one identity, one set of facts.
         Page-specific JSON-LD (BreadcrumbList, Service) comes from the meta
         section yielded above.
         Do NOT write Blade directives in these comments: the compiler processes
         them inside HTML comments too, so a stray directive here silently renders
         the whole meta block a second time. -->
    {!! Seo::jsonLd(Seo::organizationSchema()) !!}
    {!! Seo::jsonLd(Seo::websiteSchema()) !!}
    <style>
    .owl-item.active .single-slide-item {
        opacity: 1!important;
    }
    /* Prevent minor horizontal overflow (stray Bootstrap row/col margins) on small screens.
       Keep this on <body> only — NOT <html> — so the page's scroll container stays on the
       viewport. overflow-x:hidden on <html> makes the fixed navbar mis-size against the
       scrollbar (jump/overhang); on <body> it still clips stray overflow. Matches the
       solutions page, which has no html-level overflow. */
    body { overflow-x: hidden; max-width: 100%; }
    </style>
   <!-- Css Files -->
   <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
   <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
   <link href="{{asset('css/owl.carousel.css')}}?v=<?php echo VERSION; ?>" rel="stylesheet">
   <!-- Self-hosted fonts (Rubik, PT Sans, Satoshi) — no CDN dependency, so the pages
        always render in the correct font even offline or if a font CDN is blocked. -->
   <style>
     @font-face{font-family:'Rubik';font-style:normal;font-weight:300 700;font-display:swap;src:url('{{ asset('fonts/Rubik-400.woff2') }}') format('woff2');}
     @font-face{font-family:'PT Sans';font-style:normal;font-weight:400;font-display:swap;src:url('{{ asset('fonts/PTSans-400.woff2') }}') format('woff2');}
     @font-face{font-family:'PT Sans';font-style:normal;font-weight:700;font-display:swap;src:url('{{ asset('fonts/PTSans-700.woff2') }}') format('woff2');}
     @font-face{font-family:'Satoshi';font-style:normal;font-weight:100 900;font-display:swap;src:url('{{ asset('fonts/Satoshi-Variable.woff2') }}') format('woff2');}
   </style>
   <link href="{{asset('css/style.css')}}?v=<?php echo VERSION; ?>" rel="stylesheet">
   <link href="{{asset('css/main.css')}}?v=<?php echo VERSION; ?>" rel="stylesheet">
   <link href="{{asset('css/responsive.css')}}?v=<?php echo VERSION; ?>" rel="stylesheet">
   <link href="{{asset('css/redesign.css')}}?v=102" rel="stylesheet">
   <link href="{{asset('css/redesign-responsive.css')}}?v=3" rel="stylesheet">
   <!-- AEO content styling (TL;DR / how-it-works / FAQ) — shared with the homepage
        and contact page, see assets/css/aeo.css for why it's framework-agnostic. -->
   <link href="{{asset('css/aeo.css')}}?v=1" rel="stylesheet">
    <!-- jQuery javascript library -->

    <!-- <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> -->
    <script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>

    <script>
        window['BASE_URL'] = "{{BASE_URL}}";
        window['SERVER_URL'] = '{{SERVER_URL}}';
        window['user_id'] = "{{Config::get('IMK/user/id')}}";
        window['group'] = "{{Config::get('IMK/user/group')}}";
    </script>

   <!-- Global site tag (gtag.js) - Google Analytics -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-212453304-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-212453304-1');
</script> -->

<!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-E9HEVL8HBW"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-E9HEVL8HBW'); </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-N5FC4HF');</script>
    <!-- End Google Tag Manager -->

</head>
<body class="@yield('bodyClass', 'page-light')">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N5FC4HF"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->



  <!--===== HEADER AREA =====-->

  @include('layouts.components.navbar')
	<div class="main-container">
		<div class="">
			@yield('content')
		</div>
	</div>





    <!-- Support / contact band — mirrors the homepage and contact-page footers so every
         page reads as one site. Channels are differentiated by PURPOSE rather than shown
         as equal boxes, which tells the visitor nothing about which to pick.
         NOTE: written in plain CSS on purpose. This layout is Bootstrap-based and does NOT
         load Tailwind, so the homepage's utility classes (bg-surface-container-lowest,
         text-on-surface-variant, primary-container …) would render completely unstyled.
         Selectors are prefixed .imp-support-* to stay clear of Bootstrap. -->
    <style>
        .imp-support { position: relative; background: #0e0e0e; padding: 72px 20px; overflow: hidden; }
        .imp-support::before { content: ''; position: absolute; top: -96px; left: -128px; width: 520px; max-width: 100%; height: 320px; background: rgba(255,107,53,.10); filter: blur(130px); border-radius: 9999px; pointer-events: none; }
        .imp-support-inner { position: relative; z-index: 1; max-width: 1280px; margin: 0 auto; display: grid; grid-template-columns: 1fr; gap: 44px; align-items: start; }
        .imp-support h2 { font-family: 'Satoshi', sans-serif; font-weight: 700; color: #fff; font-size: 30px; line-height: 1.1; letter-spacing: -.02em; margin: 0; }
        .imp-support .imp-support-sub { margin: 20px 0 0; color: #D1D5DB; font-size: 16px; line-height: 1.65; max-width: 28rem; }
        .imp-support .imp-support-staffed { margin-top: 26px; display: inline-flex; align-items: center; gap: 10px; font-size: 14px; color: #D1D5DB; }
        .imp-support .imp-support-dot { width: 8px; height: 8px; border-radius: 50%; background: #34D399; display: inline-block; flex: 0 0 auto; }
        .imp-support .imp-support-brk { display: none; }
        .imp-support-rows { border-top: 1px solid rgba(255,255,255,.1); }
        .imp-support-row { display: flex; align-items: center; justify-content: space-between; gap: 24px; padding: 22px 0; border-bottom: 1px solid rgba(255,255,255,.1); text-decoration: none; transition: border-color .25s ease; }
        .imp-support-row:hover, .imp-support-row:focus { border-bottom-color: rgba(255,107,53,.4); text-decoration: none; }
        .imp-support-row .imp-support-t { display: block; color: #fff; font-weight: 700; font-size: 18px; }
        .imp-support-row .imp-support-d { display: block; color: #D1D5DB; font-size: 14px; margin-top: 4px; }
        .imp-support-row .imp-support-r { flex: 0 0 auto; text-align: right; }
        .imp-support-row .imp-support-a { display: block; color: #ff6b35; font-weight: 600; font-size: 14px; word-break: break-all; }
        .imp-support-row .imp-support-m { display: block; color: #D1D5DB; font-size: 11px; text-transform: uppercase; letter-spacing: .06em; margin-top: 4px; }
        @media (min-width: 640px) { .imp-support h2 { font-size: 36px; } .imp-support .imp-support-brk { display: block; } }
        @media (min-width: 1024px) { .imp-support { padding: 104px 32px; } .imp-support h2 { font-size: 42px; } .imp-support-inner { grid-template-columns: 0.9fr 1.1fr; gap: 72px; } }
        @media (max-width: 560px) { .imp-support-row { flex-direction: column; align-items: flex-start; gap: 6px; } .imp-support-row .imp-support-r { text-align: left; } }
    </style>
    <section class="imp-support">
        <div class="imp-support-inner">
            <div>
                <h2>Support that answers,<br class="imp-support-brk"> not a ticket queue</h2>
                <p class="imp-support-sub">Every Imperium deployment is backed by engineers who know the platform. Pick the route that fits — we'll route you to the right desk.</p>
                <div class="imp-support-staffed"><span class="imp-support-dot"></span> Support desk staffed 24 / 7, every day of the year</div>
            </div>
            <div class="imp-support-rows">
                <a class="imp-support-row" href="mailto:support@imperiumapp.com">
                    <span>
                        <span class="imp-support-t">Technical support</span>
                        <span class="imp-support-d">Already running Imperium? Raise an issue any hour.</span>
                    </span>
                    <span class="imp-support-r">
                        <span class="imp-support-a">support@imperiumapp.com</span>
                        <span class="imp-support-m">24 / 7</span>
                    </span>
                </a>
                <a class="imp-support-row" href="mailto:sales@imperiumapp.com">
                    <span>
                        <span class="imp-support-t">Sales &amp; new projects</span>
                        <span class="imp-support-d">Pricing, demos and scoping a new deployment.</span>
                    </span>
                    <span class="imp-support-r">
                        <span class="imp-support-a">sales@imperiumapp.com</span>
                        <span class="imp-support-m">Replies in 1 day</span>
                    </span>
                </a>
                <a class="imp-support-row" href="tel:+97142443417">
                    <span>
                        <span class="imp-support-t">Speak to someone</span>
                        <span class="imp-support-d">Straight through to the Dubai head office.</span>
                    </span>
                    <span class="imp-support-r">
                        <span class="imp-support-a">+971 4 244 3417</span>
                        <span class="imp-support-m">Head office</span>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <div class="subscription-area section-padding">
        <div class="container all-light">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                    </div>
                </div>
            </div>
            <!--/.row-->
            <div class="row">

                <div class="col-md-12">
                    <h3 class="address-heading">
                        Imperium Software Technologies DMCC
                    </h3>
                    <div class="address">
                        <h5> <i class="fa fa-building-o" aria-hidden="true"></i> Head Office </h5>

                        <p>
                         1504, 1 Lake Plaza,<br/> Cluster T, Jumeirah Lakes Towers,<br/> P.O.Box: 73916, Dubai, UAE</p>
                        <p>
                            <i class="fa fa-mobile" aria-hidden="true"></i> : +97142443417<br>
                            <i class="fa fa-fax sm" aria-hidden="true"></i> : +97142443419<br>
                            <i class="fa fa-envelope-o sm" aria-hidden="true"></i> : sales@imperiumapp.com
                        </p>


                        
                      
                    </div>

                    <!-- <div class="address">
                        <h5> <i class="fa fa-building-o" aria-hidden="true"></i> Dubai </h5>
                        <p>
                            P.O. Box No : 342055, Dubai Silicon Oasis, Tech Hub 2 -240,<br> Dubai, UAE.
                        </p>
                        <p>
                            <i class="fa fa-mobile" aria-hidden="true"></i> : +9714 3202737<br>
                            <i class="fa  fa-fax sm" aria-hidden="true"></i> : +9714 3202747<br>
                            <i class="fa fa-envelope-o sm" aria-hidden="true"></i> : sales@imperiumapp.com
                        </p>
                       
                    </div> -->


                    <div class="address">
                        <h5><i class="fa fa-building-o" aria-hidden="true"></i> Singapore </h5>
                        <p>
                           21 TAN QUEE LAN STREET,<br> #02-04 HERITAGE PLACE,<br> SINGAPORE 188108
                        </p>
                        <p>

                            <i class="fa fa-fax sm" aria-hidden="true"></i> : +6567730274<br>
                            <i class="fa fa-envelope-o sm" aria-hidden="true"></i> : sales@imperiumapp.com
                        </p>
                    </div>

                    <div class="address">
                        <h5> <i class="fa fa-building-o" aria-hidden="true"></i> Chennai </h5>
                        <p>
                            47/2 Ashok Nagar, 53rd Street, <br> Indira Colony, Chennai, <br> Tamil Nadu 600083.</p>
                        <p>
                            <i class="fa fa-mobile" aria-hidden="true"></i> : +91 44 421 22440<br>

                            <i class="fa fa-envelope-o sm" aria-hidden="true"></i> : sales@imperiumapp.com
                        </p>
                    </div>




                     <div class="address">
                        <h5> <i class="fa fa-building-o" aria-hidden="true"></i> Bengaluru </h5>
                        <p>
                           WMMX+H5X, Kaverappa Layout,<br/>Kadubeesanahalli,<br /> Bengaluru, Karnataka 560103
                        </p>
                        <p>
                            <i class="fa fa-mobile" aria-hidden="true"></i> : +91 80 416 22894<br>
                            <!--<i class="fa fa-fax sm" aria-hidden="true"></i> : +91 08066320450<br>-->
                            <i class="fa fa-envelope-o sm" aria-hidden="true"></i> : sales@imperiumapp.com
                        </p>
                    </div>






                </div>

            </div>
        </div>
    </div>



    <footer class="lite-footer-area">
        <style>
            /* Matched to the homepage / contact-page footer: same #121211 ground, top hairline,
               proper inline-SVG brand logos (no Font Awesome), copyright · nav · social.
               Overrides the old .lite-footer-area { background:#333 } from style.css. */
            .lite-footer-area { background-color: #121211 !important; border-top: 1px solid rgba(255,255,255,.1); padding: 24px 0; }
            .lite-footer-area p { margin: 0 !important; }
            .lite-foot-inner {
                max-width: 1270px; margin: 0 auto; padding: 0 40px;
                display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 18px;
            }
            .lite-foot-copy { color: rgba(255,255,255,.7); font-size: 14px; }
            .lite-foot-nav { display: flex; align-items: center; gap: 12px; font-size: 14px; }
            .lite-foot-nav a { color: rgba(255,255,255,.8); text-decoration: none; transition: color .3s ease; }
            .lite-foot-nav a:hover { color: #ffb488; }
            .lite-foot-nav .sep { color: rgba(255,255,255,.3); }
            .lite-foot-social { display: flex; gap: 8px; list-style: none; padding: 0; margin: 0; }
            .lite-foot-social li { display: inline-block; }
            .lite-foot-social a {
                width: 32px; height: 32px; border-radius: 12px;
                background: rgba(255,255,255,.1); color: #fff; box-shadow: none;
                display: flex; align-items: center; justify-content: center;
                transition: background-color .15s cubic-bezier(.4,0,.2,1);
            }
            .lite-foot-social a:hover { background: rgba(249,115,22,.3); }
            .lite-foot-social svg { fill: currentColor; display: block; }
            @media (max-width: 767px) {
                .lite-footer-area { text-align: center; }
                .lite-foot-inner { flex-direction: column; padding: 0 20px; }
            }
        </style>
        <div class="lite-foot-inner">
            <p class="lite-foot-copy">&copy; <?php echo date("Y"); ?> Imperium. All rights reserved.</p>
            <nav class="lite-foot-nav">
                <a href="{{ url('industry-influence') }}">Verticals</a>
                <span class="sep">|</span>
                <a href="{{ url('casestudy') }}">Case Studies</a>
            </nav>
            <ul class="lite-foot-social">
                <li><a href="https://www.facebook.com/imperiumapp" target="_blank" rel="noopener" aria-label="Facebook"><svg viewBox="0 0 24 24" style="width:16px;height:16px"><path d="M13.5 21v-8h2.7l.4-3h-3.1V8.1c0-.9.3-1.5 1.6-1.5H17V3.9c-.3 0-1.3-.1-2.4-.1-2.4 0-4 1.5-4 4.1V10H8v3h2.6v8h2.9z"/></svg></a></li>
                <li><a href="https://twitter.com/imperiumapp" target="_blank" rel="noopener" aria-label="X"><svg viewBox="0 0 24 24" style="width:14px;height:14px"><path d="M17.5 3h3l-6.6 7.6L21.7 21h-6.1l-4.3-5.6L6.3 21H3.3l7-8.1L2.6 3h6.2l3.9 5.1L17.5 3zm-1.1 16h1.7L7.7 4.8H5.9L16.4 19z"/></svg></a></li>
                <li><a href="https://www.instagram.com/imperiumsoftware/" target="_blank" rel="noopener" aria-label="Instagram"><svg viewBox="0 0 24 24" style="width:12px;height:12px"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163C8.741 0 8.332.014 7.052.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg></a></li>
                <li><a href="https://www.youtube.com/@imperiumsoftwaretechnologi9361" target="_blank" rel="noopener" aria-label="YouTube"><svg viewBox="0 0 24 24" style="width:16px;height:16px"><path d="M23 12s0-3.2-.4-4.7c-.2-.9-.9-1.5-1.7-1.7C19.4 5.2 12 5.2 12 5.2s-7.4 0-8.9.4c-.8.2-1.5.8-1.7 1.7C1 8.8 1 12 1 12s0 3.2.4 4.7c.2.9.9 1.5 1.7 1.7 1.5.4 8.9.4 8.9.4s7.4 0 8.9-.4c.8-.2 1.5-.8 1.7-1.7.4-1.5.4-4.7.4-4.7zM9.8 15.3V8.7l6.2 3.3-6.2 3.3z"/></svg></a></li>
                <li><a href="https://www.linkedin.com/company/imperium-software-technologies/" target="_blank" rel="noopener" aria-label="LinkedIn"><svg viewBox="0 0 24 24" style="width:12px;height:12px"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.225 0z"/></svg></a></li>
            </ul>
        </div>
    </footer>
    <!-- <a href="javascript:void(0)" class="chat-btn fixed" id="loginBtn"></a> -->
    <!-- clicktocall-->
    <!--<div id="chat-box"></div>
    <div class="modal fade" id="modal-call" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-body calling">
                    <div id="videoPanel" style="position: relative;">
                        <video id="rmtVideo" width="100%" height="400" autoplay></video>
                        <video id="lclVideo" width="40%" height="100" autoplay muted controls title="Local Video"></video>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    
    <!--<div class="whatsapp_float" style="z-index: 3000;">
<a href="https://wa.me/+97142443417" target="blank">
   <img src="/assets/image/Whatsapp.png" alt="" >
 </a>
</div> -->

   
<!-- JQUERY -->

<div class="modal fade" id="modal-contact-form" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-body">
                <!--contact form-->
                <div class="contact-form text-center">
                    <header class="section-header">
                        <img src="{{asset('image/support-icon.svg')}}"  alt="support icon" style="width: 120px;">
                        <h2>Contact us</h2>
                        <h3>Have any questions? Send us a message.</h3>
                    </header>
                    <form name="contactForm" id="contactForm" class="cta-form cta-light">
                        <div class="alert hidden" id="contact-message"></div>
                        <div class="form-group">
                            <input type="text" placeholder="Name *" class="form-control" name="firstName" data-validation="required" required/>
                        </div>
                        <div class="form-group">
                            <input type="email" name="emailId" class="form-control" placeholder="Email *" data-validation="email" required />
                        </div>
                        <div class="form-group">
                            <input type="text" id="contactNumber" name="contactNumber" class="form-control" placeholder="Phone *  " data-force-validation-if-hidden="true" data-validation="custom" data-validation-regexp="^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$" required/>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="8" placeholder="Message" name="message"></textarea>
                        </div>
                        <div class="form-group text-center">
                        <button type="submit" class="btn  theme-btn read-more-btn">SEND MESSAGE</button>
                        </div>
                    </form>
                </div>
                <!--contact form end-->
                <p class="contact-form-success"><i class="fa fa-check"></i><span>
                    Thanks for contacting us!</span> We will get back to you very soon.</p>
            </div>
        </div>
    </div>
</div>
<!--contact form modal end-->

 <div class="modal fade " id="modal-download-brochure" tabindex="-1" role="dialog">
        <div class="modal-dialog sm" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-body">
                    <!--contact form-->
                    <div class="contact-form text-center">
                        <header class="section-header">
                            <img src="{{asset('image/support-icon.svg')}}"  alt="support icon" style="width: 100px;">
                            <h2>Download Flyer</h2>
                        </header>
                        <form name="downlaodBrochureForm" id="downlaodBrochureForm" class="cta-form cta-light">
                            <div class="alert hidden" id="brochure-message"></div>
                            <div class="form-group">
                                <input type="text" placeholder="Name *" class="form-control" name="firstName" data-validation="required" required/>
                            </div>
                            <div class="form-group">
                                <input type="email" name="emailId" class="form-control" placeholder="Email *" data-validation="email" required />
                            </div>
                            <div class="form-group text-center">
                            <button type="submit" class="btn theme-btn read-more-btn">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                    <!--contact form end-->
                </div>
            </div>
        </div>
    </div>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.mixitup.js')}}"></script>
<script src="{{asset('js/jquery.inview.min.js')}}"></script>

<script src="{{asset('js/jquery.ajaxchimp.js')}}"></script>
<script src="{{asset('js/wow-1.3.0.min.js')}}"></script>
<script src="{{asset('js/active.js')}}?v=<?php echo VERSION; ?>"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
<script src="{{asset('js/awl-v01.min.js')}}?v=<?php echo VERSION; ?>"></script>
<script src="{{asset('js/call-widget.js')}}?v=<?php echo VERSION; ?>"></script>
<script src="{{asset('js/custom.js')}}?v=<?php echo VERSION; ?>"></script>

<!-- <script src="https://mycloudcx.com/ClicktoCall/script/peroo/peroo-chat-form.js"></script> -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#chat-box').perooChatForm();
    });
</script>
<script>

// Get the modal
$(document).ready(function() {
        $('#myModal').on('show.bs.modal', function() {
            $("#videoIframe")[0].src += "&autoplay=1";
        });
        $('#myModal').on('hidden.bs.modal', function(e) {
            var rawVideoURL = $("#videoIframe")[0].src;
            rawVideoURL = rawVideoURL.replace("&autoplay=1", "");
            $("#videoIframe")[0].src = rawVideoURL;
        });


        $('.collapse.in').prev('.panel-heading').addClass('active');
        $('#accordion, #bs-collapse')
        .on('show.bs.collapse', function(a) {
            $(a.target).prev('.panel-heading').addClass('active');
        })
        .on('hide.bs.collapse', function(a) {
            $(a.target).prev('.panel-heading').removeClass('active');
        });

        /*var pageurl = window.location.pathname;
        var checkurl = pageurl.lastIndexOf('/');
        var mainurl = pageurl.substr(checkurl, pageurl.length);
        if (mainurl === "/about") {
            $('#aboutli').addClass("active");
            $('#homeli').removeClass("active");
            }
        if (
            mainurl === "/registration" || mainurl === "/partners-avaya" ||
            mainurl === "/partners-cisco" || mainurl === "/partners-microsoft-lync") {
            $('#partnersli').addClass("active");
            $('#homeli').removeClass("active");
        }
        if (mainurl === "/contact") {
            $('#contactli').addClass("active");
            $('#homeli').removeClass("active");
            }
        if (
            mainurl === "/products-cti-solutions"   || mainurl === "/products-ivrsolutions" ||
            mainurl === "/products-sms-solutions" || mainurl === "/products-fax-server"||
            mainurl === "/products-call-reporter" || mainurl === "/products-call-reporter" ||
            mainurl === "/products-cti-crm-connecter" || mainurl === "/products-cti-outlook-connecter")
            {
            $('#productsctisolutions').addClass("active");
            $('#homeli').removeClass("active");
            }

        if (mainurl === "/inaipi") {
            $('#inaipili').addClass("active");
            $('#homeli').removeClass("active");
        }
        if (mainurl === "/inaipi") {
            $('#inaipili').addClass("active");
            $('#homeli').removeClass("active");
        }
        if (
            mainurl === "/solutions-business-center"   || mainurl === "/solutions-healthcare" ||
            mainurl === "/solutions-logistics" || mainurl === "/solutions-service-industry"||
            mainurl === "/solutions-service-industry" || mainurl === "/solutions-debt-collection")
            {
            $('#solutionsli').addClass("active");
            $('#homeli').removeClass("active");
            }*/
    });
    </script>

    <!-- navbar javascript -->
     <script>
  $(document).ready(function() {
    // Toggle menu visibility
    $(".hamburger-responsive").click(function() {
      $(".menu-responsive").toggleClass("show-responsive");
    });

    // Toggle submenu visibility
    $(".has-submenu-responsive").click(function(e) {
      e.stopPropagation(); // Prevent menu toggle when submenu is clicked
      const submenu = $(this).find(".submenu-responsive");
      submenu.stop(true, true).slideToggle(300); // Animate submenu with 300ms duration
    });

    $(".sub-drop-responsive").click(function(e) {
      e.stopPropagation(); // Prevent menu toggle when submenu is clicked
      const submenu = $(this).find(".drop-content-responsive");
      submenu.stop(true, true).slideToggle(300); // Animate submenu with 300ms duration
    });
  });
</script>
	</body>
</html>

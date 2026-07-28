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
    <!-- Structured data (helps search + AI answer engines understand the brand) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Imperium Software Technologies",
      "legalName": "Imperium Software Technologies DMCC",
      "description": "AI-powered customer experience (CX) and contact center solutions — CTI, IVR, omnichannel and enterprise telephony software.",
      "logo": "{{ asset('image/imperium-logo-orange-new.png') }}",
      "email": "sales@imperiumapp.com",
      "telephone": "+971-4-244-3417",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "1504, 1 Lake Plaza, Cluster T, Jumeirah Lakes Towers",
        "addressLocality": "Dubai",
        "addressCountry": "AE"
      },
      "sameAs": [
        "https://www.facebook.com/imperiumapp",
        "https://twitter.com/imperiumapp",
        "https://www.instagram.com/imperiumsoftware/",
        "https://www.youtube.com/@imperiumsoftwaretechnologi9361",
        "https://www.linkedin.com/company/imperium-software-technologies/"
      ]
    }
    </script>
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



    <!--====== CONTACT INFO AREA ======-->
    <div id="contactt" class="contact-info-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-left">
                        <h2>24 x 7 Support </h2>
                        <p> Experience World-class support  From our expert team.</p>
                        <div class="call-cont">
                        <div class="callsect">
                        <div class="addset">
                            <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp;
                            <span> +9714 2443417 </span>
                            </div>
                            <div class="addset">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i> &nbsp;
                             <a href="mailto:support@imperiumapp.com">support@imperiumapp.com</a>
                             </div>
                        </div>
                    </div>
                </div>
             </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div>


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
                        <h5> <i class="fa fa-building-o" aria-hidden="true"></i> India </h5>
                        <p>
                            #1, Model house Double tank colony road KK nagar, <br> Chennai, India. Pin: 600078.</p>
                        <p>
                            <i class="fa fa-mobile" aria-hidden="true"></i> : +91 44 421 22440<br>

                            <i class="fa fa-envelope-o sm" aria-hidden="true"></i> : sales@imperiumapp.com
                        </p>
                    </div>




                     <div class="address">
                        <h5> <i class="fa fa-building-o" aria-hidden="true"></i> India </h5>
                        <p>
                           #870, 1st Floor, Geethanjali House,<br/>BDA Layout, New Thippassandra,<br /> Bengaluru, Karnataka 560075
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
            .lite-footer-area p { margin: 0 !important; }
            .lite-footer-area ul { margin: 0 !important; }
            /* Footer responsive layout */
            .lite-footer-area .footer-row { display: flex; align-items: center; flex-wrap: wrap; }
            .lite-footer-area .sociallinks { text-align: center; padding: 0; }
            .lite-footer-area .sociallinks li { display: inline-block; }
            @media (max-width: 767px) {
                .lite-footer-area { padding: 25px 0 30px; text-align: center; }
                .lite-footer-area .footer-row { flex-direction: column; }
                .lite-footer-area .footer-row > [class^="col-"],
                .lite-footer-area .footer-row > [class*=" col-"] { width: 100%; margin-bottom: 15px; }
                .lite-footer-area .footer-row > [class^="col-"]:last-child,
                .lite-footer-area .footer-row > [class*=" col-"]:last-child { margin-bottom: 0; }
                .lite-footer-area .social-links,
                .lite-footer-area .sociallinks { text-align: center; display: flex; flex-wrap: wrap; justify-content: center; gap: 6px; padding: 0; }
                .lite-footer-area .social-links a { margin: 0; }
            }
        </style>
        <div class="container">
            <div class="row footer-row">
                <div class="col-md-4 ">
                    <div class="footer-text wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                        <p>&copy; <?php echo date("Y"); ?> Imperium. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <ul class="sociallinks wow fadeInRight" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                        <li><a href="{{url('industry-influence')}}">Verticals</a> |</li>
                        <li><a href="{{url('casestudy')}}">Case Studies</a></li>
                    </ul>
                </div>

                <div class="col-md-4 ">
                    <ul class="social-links wow fadeInTop animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">
                        <li><a href="https://www.facebook.com/imperiumapp" target="blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/imperiumapp" target="blank" aria-label="X"><svg viewBox="0 0 24 24" style="width:1em;height:1em;fill:currentColor;vertical-align:-0.125em;display:inline-block"><path d="M17.5 3h3l-6.6 7.6L21.7 21h-6.1l-4.3-5.6L6.3 21H3.3l7-8.1L2.6 3h6.2l3.9 5.1L17.5 3zm-1.1 16h1.7L7.7 4.8H5.9L16.4 19z"/></svg></a></li>
                        <li><a href="https://www.instagram.com/imperiumsoftware/" target="blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.youtube.com/@imperiumsoftwaretechnologi9361" target="blank"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/imperium-software-technologies/" target="blank"><i class="fa fa-linkedin"></i></a></li>

                    </ul>
                </div>




            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
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

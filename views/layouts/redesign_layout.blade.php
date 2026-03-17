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
    <style> 
    .owl-item.active .single-slide-item {
        opacity: 1!important;
    }
    </style>
   <!-- Css Files -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
   <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
   <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
   <link href="{{asset('css/owl.carousel.css')}}?v=<?php echo VERSION; ?>" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700" rel="stylesheet">
   <link href="{{asset('css/style.css')}}?v=<?php echo VERSION; ?>" rel="stylesheet">
   <link href="{{asset('css/main.css')}}?v=<?php echo VERSION; ?>" rel="stylesheet">
   <link href="{{asset('css/responsive.css')}}?v=<?php echo VERSION; ?>" rel="stylesheet">
   <link href="{{asset('css/redesign.css')}}?v=3" rel="stylesheet">
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
</head>
<style>

/* C:\Edaya\25.imperium\imperium-website\assets\fonts\Satoshi-Regular.woff */

    body{
      margin: 0;
      overflow-x: hidden;
    }
    @font-face {
      font-family: 'Satoshi';
      src: url('assets/fonts/Satoshi-Variable.woff2') format('woff2'); 
      font-style: normal;
    }
    .background-home{
      background-color: black;
    }

    .layout{
            /* background-color: #F9F5F0; */
            /* min-height: 100vh; */
            width: 100%;
            max-width: 1270px;
            margin-left: auto;
            margin-right: auto;
        }
    .v22-font{
      font-family: 'Satoshi', sans-serif !important;
    }
    @media only screen and (max-width: 1200px) {
        .layout {
            /* background-color:rgb(163, 95, 11); */
        }
    }
    @media only screen and (max-width: 800px) {
        .layout {
          /* background-color: pink; */
        }
    }
    /* @media only screen and (max-width: 640px) {
        .layout {
          background-color: yellow;
        }
    } */
  </style>
<body class="v22-font background-home">


  <!--===== navbar =====-->
    @include('layouts.components.navbar')
    <!--  -->
    <div class="main-container">
      <div class="">
        @yield('content')
      </div>
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
        </style>
        <div class="container">
            <div class="row" style="display: flex; align-items: center;">
                <div class="col-md-4 ">
                    <div class="footer-text wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                        <p>&copy; <?php echo date("Y"); ?> Imperium. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <ul class="sociallinks wow fadeInRight" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                    <li><a href="{{ url('about') }}">About</a> |</li>
                        <!-- <li><a href="{{ url('faqs') }}">Faqs</a> |</li> -->
                        <li><a href="{{ url('blog-news') }}"> Blog</a></li>
                    </ul>
                </div>

                <div class="col-md-4 ">
                    <ul class="social-links wow fadeInTop animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">
                        <li><a href="https://www.facebook.com/imperiumapp" target="blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/imperiumapp" target="blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.youtube.com/@imperiumsoftwaretechnologi9361" target="blank"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="https://plus.google.com/u/0/108354065877917080537" target="blank"><i class="fa fa-google-plus"></i></a></li>
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
	</body>
</html>

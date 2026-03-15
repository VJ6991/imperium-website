import React from "react";

/*
  This component injects the EXACT same footer HTML + CSS from the main website
  using dangerouslySetInnerHTML to bypass all React/Tailwind CSS interference.
*/

function Footer() {
  const currentYear = new Date().getFullYear();
  const baseUrl = "http://localhost:8000";

  const footerHTML = `
<style>
  @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

  #imp-main-footer {
    font-family: 'Satoshi', 'Rubik', sans-serif !important;
    line-height: 1.428571429;
    color: #424242;
    background-color: #fff;
  }

  #imp-main-footer * {
    box-sizing: border-box;
  }

  /* Basic Grid Utility */
  #imp-main-footer .container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    max-width: 1170px;
  }
  #imp-main-footer .row {
    margin-right: -15px;
    margin-left: -15px;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
  }
  #imp-main-footer .col-md-12 { width: 100%; position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; }
  #imp-main-footer .col-md-3 { width: 25%; position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; }
  #imp-main-footer .col-md-5 { width: 41.66666667%; position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; }
  #imp-main-footer .col-md-4 { width: 33.33333333%; position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; }

  @media (max-width: 991px) {
    #imp-main-footer .col-md-3, #imp-main-footer .col-md-5, #imp-main-footer .col-md-4 { width: 100%; text-align: center !important; margin-bottom: 10px; }
    #imp-main-footer .row { flex-direction: column; }
  }

  /* Footer Styling */
  #imp-main-footer .section-padding { padding: 60px 0; }
  
  #imp-main-footer #contactt {
    background: rgba(0, 0, 0, 0) url("https://imperiumapp.com/assets/image/customercare-banner.png") no-repeat center center/cover;
    position: relative;
    z-index: 1;
    color: #fff;
    padding: 120px 0;
  }
  #imp-main-footer #contactt::after {
    background: #000;
    content: "";
    height: 100%;
    left: 0;
    opacity: 0.3;
    position: absolute;
    right: 0;
    top: 0;
    width: 100%;
    z-index: -1;
  }
  #imp-main-footer #contactt h2 {
    color: #fff;
    text-align: center;
    font-size: 38px;
    font-weight: 700;
    margin-bottom: 20px;
  }
  #imp-main-footer #contactt .section-title p {
    color: #fff;
    margin-bottom: 15px;
    text-align: center;
    font-size: 20px;
  }

  #imp-main-footer .call-cont { display: block; text-align: center; color: #fff; }
  #imp-main-footer .callsect { font-size: 17px; }
  #imp-main-footer .call-cont > div { display: inline-block; margin: 20px 15px 0; text-align: left; vertical-align: middle; }
  
  #imp-main-footer .addset { padding-bottom: 12px; }
  #imp-main-footer .addset > * { display: inline-block; font-size: 21px; font-weight: 200; text-align: center; vertical-align: middle; color: #fff; text-decoration: none; }
  #imp-main-footer .addset > i { font-size: 24px; width: 37px; }

  #imp-main-footer .subscription-area { background-color: #121211; color: #fff; padding: 35px 0; }
  #imp-main-footer .address-heading { color: #fff; font-weight: 400; font-size: 24px; margin-bottom: 20px; }
  #imp-main-footer .address {
    background: rgba(255, 255, 255, 0.1);
    margin-right: 1.3%;
    min-height: 215px;
    padding: 12px;
    width: 24%;
    float: left;
    color: #fff;
  }
  #imp-main-footer .address:last-child { margin-right: 0; }
  #imp-main-footer .address h5 {
    font-size: 12px;
    font-weight: 600;
    margin: 0;
    min-height: 32px;
    padding: 0 0 10px;
    text-transform: uppercase;
    white-space: nowrap;
    color: #fff;
  }
  #imp-main-footer .address p { font-size: 13px; line-height: 20px; margin: 0 0 10px; color: #fff; }

  @media (max-width: 767px) {
    #imp-main-footer .address { width: 100%; margin-right: 0; margin-bottom: 10px; min-height: auto; }
  }

  #imp-main-footer .lite-footer-area { background-color: #333; color: #fff; padding: 25px 0; }
  #imp-main-footer .lite-footer-area p { margin: 0; color: #fff; font-size: 14px; }
  
  #imp-main-footer ul.sociallinks { margin: 0; padding: 0; list-style: none; text-align: center; }
  #imp-main-footer ul.sociallinks li { display: inline-block; }
  #imp-main-footer ul.sociallinks li a { color: #fff; margin-left: 9px; margin-right: 10px; text-decoration: none; font-size: 14px; }
  
  #imp-main-footer .social-links { list-style: none; margin: 0; padding: 0; text-align: right; }
  #imp-main-footer .social-links li { display: inline-block; }
  #imp-main-footer .social-links a {
    border: 1px solid #ddd;
    border-radius: 50%;
    color: #fff;
    display: block;
    height: 35px;
    line-height: 34px;
    margin-left: 10px;
    text-align: center;
    width: 35px;
    transition: 0.3s;
    text-decoration: none;
  }
  #imp-main-footer .social-links a:hover { background-color: #ff7400; border: 1px solid #ff7400; }
  #imp-main-footer .social-links a i { line-height: 35px; }

</style>

<div id="imp-main-footer">
    <div id="contactt" class="contact-info-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-left">
                        <h2>24 x 7 Support </h2>
                        <p> Experience World-class support from our expert team.</p>
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
                                <div class="addset">
                                    <i class="fa fa-paper-plane-o" aria-hidden="true"></i> &nbsp;
                                    <a href="${baseUrl}/contact">Drop a query </a>
                                </div>
                                <div class="addset">
                                    <i class="fa fa-question-circle" aria-hidden="true"></i> &nbsp;
                                    <a href="${baseUrl}/faqs">FAQS </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>

    <div class="subscription-area section-padding">
        <div class="container all-light">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="address-heading">
                        Imperium Software Technologies DMCC
                    </h3>
                    <div class="address">
                        <h5> <i class="fa fa-building-o" aria-hidden="true"></i> Head Office </h5>
                        <p>1504, 1 Lake Plaza,<br/> Cluster T, Jumeirah Lakes Towers,<br/> P.O.Box: 73916, Dubai, UAE</p>
                        <p>
                            <i class="fa fa-mobile" aria-hidden="true"></i> : +97142443417<br>
                            <i class="fa fa-fax sm" aria-hidden="true"></i> : +97142443419<br>
                            <i class="fa fa-envelope-o sm" aria-hidden="true"></i> : sales@imperiumapp.com
                        </p>
                    </div>

                    <div class="address">
                        <h5><i class="fa fa-building-o" aria-hidden="true"></i> Singapore </h5>
                        <p>21 TAN QUEE LAN STREET,<br> #02-04 HERITAGE PLACE,<br> SINGAPORE 188108</p>
                        <p>
                            <i class="fa fa-fax sm" aria-hidden="true"></i> : +6567730274<br>
                            <i class="fa fa-envelope-o sm" aria-hidden="true"></i> : sales@imperiumapp.com
                        </p>
                    </div>

                    <div class="address">
                        <h5> <i class="fa fa-building-o" aria-hidden="true"></i> India </h5>
                        <p>#1, Model house Double tank colony road KK nagar, <br> Chennai, India. Pin: 600078.</p>
                        <p>
                            <i class="fa fa-mobile" aria-hidden="true"></i> : +91 44 421 22440<br>
                            <i class="fa fa-envelope-o sm" aria-hidden="true"></i> : sales@imperiumapp.com
                        </p>
                    </div>

                    <div class="address">
                        <h5> <i class="fa fa-building-o" aria-hidden="true"></i> India </h5>
                        <p>#870, 1st Floor, Geethanjali House,<br/>BDA Layout, New Thippassandra,<br /> Bengaluru, Karnataka 560075</p>
                        <p>
                            <i class="fa fa-mobile" aria-hidden="true"></i> : +91 80 416 22894<br>
                            <i class="fa fa-envelope-o sm" aria-hidden="true"></i> : sales@imperiumapp.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="lite-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-text">
                        <p>&copy; ${currentYear} Imperium. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <ul class="sociallinks">
                        <li><a href="${baseUrl}/about">About</a> |</li>
                        <li><a href="${baseUrl}/blog-news"> Blog</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="social-links">
                        <li><a href="https://www.facebook.com/imperiumapp" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/imperiumapp" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.youtube.com/@imperiumsoftwaretechnologi9361" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="https://plus.google.com/u/0/108354065877917080537" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/imperium-software-technologies/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
  `;

  return (
    <div dangerouslySetInnerHTML={{ __html: footerHTML }} />
  );
}

export default Footer;

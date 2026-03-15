@extends('layouts.redesign_layout')
@section('meta')
{!!Helper::setMetaTags($meta)!!}
@stop
@section('content')
<link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
  $(function() {
    $("#tabs").tabs();
  });
</script>
<!-- css start -->

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<!-- css end -->

<!--contact form modal-->
<!--======= SLIDER AREA =======-->
<!-- <div id="home" class="lite-slides-area"> -->
<!-- albu start-->
<!-- section 1 -->
<section class="main-section layout">
  <div class="slider-parent" style="position: relative;">
    <div class="navigation-button-div">
      <button id="scroll-left"><img src="/assets/image/tabler_left.svg" alt="" /></button>
      <button id="scroll-right"><img src="/assets/image/tabler_right.svg" alt="" /></button>
    </div>

    <div class="main-div slider-container">
      <div class="main-container-index-div slick-slide-main">
        <!-- scroll one -->
        <div>
          <div class="main-container-index">
            <div class="main-container-div-1">
              <!-- <div style="position: absolute; top:0; left:0;">
                <img style="width: 100%; min-width:500px" src="/assets/image/Frame 1321316367.png" alt="">
              </div> -->
              <div>
                <div class="customer-experience-div">
                  IMPROVE CUSTOMER EXPERIENCE
                </div>
                <h1>{!! Helper::cms('home', 'slide1_heading_line1', 'Enhance CX with') !!} <br><span> {!! Helper::cms('home', 'slide1_heading_line2', 'AI Powered Solutions') !!} </span></h1>
                <h5>We provide cutting-edge telephony, omnichannel contact centers, <br class="responsive-br"> intelligent CX tools, and cloud-driven hospitality solutions.</h5>

                <a href="http://localhost:3000/cx/#/solutions" class="main-container-div-1-div-button button-know-more">Know more</a>
              </div>
            </div>
            <div class="main-container-div-2"></div>
          </div>
        </div>

        <!-- scroll two -->
        <div>
          <div class="main-container-index">
            <div class="main-container-div-1">
              <div>
                <div class="customer-experience-div">
                  IMPROVE PRODUCTIVITY
                </div>
                <h1 style="text-shadow: 4px 4px 8px rgba(0, 0, 0, 0.6);">{!! Helper::cms('home', 'slide2_heading_line1', 'Streamline Business') !!} <br><span> {!! Helper::cms('home', 'slide2_heading_line2', 'with Smart Solutions') !!}</span></h1>
                <h5>Empower operations with tailored business process automation, <br class="responsive-br">ticketing solutions, and customer engagement portals</h5>
                <a href="http://localhost:3000/cx/#/solutions" class="main-container-div-1-div-button button-know-more">Know more</a>

              </div>
            </div>
            <div class="main-container-div-2-image-2"></div>
          </div>
        </div>



        <!-- scroll button -->


      </div>
    </div>
  </div>

</section>
<!-- albu end -->
<!-- autoscroll -->
<section>
  @include('layouts.components.TrustedPartnersScroll')
</section>
<div class='main-css-div layout'>
  <div class="box-content-div">
    <div class="box-content-text">
      <h3>Empower your CX evolution with Imperium,disruption-free.</h3>
    </div>
  </div>



  <div class="tab-div-main">
    <div class="tabs">
      <div class="tab active-tab" data-tab="1">Omnichannel Contact Center</div>
      <div class="tab" data-tab="2">Hospitality Solution</div>
      <div class="tab" data-tab="3">Intelligent CX Solution</div>
    </div>
    <div class="tabs-phone tab-hidden">
      <div class="tab-dropdown">
        <select class="drop-phone">
          <option value="1" selected>Omnichannel Contact Center</option>
          <option value="2">Hospitality Solution</option>
          <option value="3">Intelligent CX Solution</option>
        </select>
      </div>
    </div>

    <div class="button-container">
      <div class="buttons active-buttons" id="buttons-1">
        <div class="tab-content-div">
          <div class="tab-screen">
            <div class="tab-screen-text">
              <h3 class="tab-text-h3">Omnichannel Contact Center – Where Every Channel Connects</h3>
              <p class="tab-text-p">A platform empowering agent to deliver seamless customer experience across all touchpoints. This innovative platform leverages AI powered solutions to revolutionize customer journey. Suitable with any PBX the platform provides flexible deployment options – On-premise & UAE hosted Cloud</p>
              <p class="tab-text-p2"><strong>Unified Customer Engagement –</strong><span class="span-tab-text-500"> Provides a seamless and consistent experience across all channels, including voice, email, chat and social media.</span></p>

              <p class="tab-text-p2"><strong>Intelligent Routing and Analytics –</strong><span class="span-tab-text-500">AI-driven routing and real-time analytics to connect customers with the best resources, boosting service efficiency. Integrates Power BI for in-depth and data-driven insights.</span>
              </p>
            </div>
            <div class="tab-image">
              <img src="/assets/image/redesign-img/tab-image-change.svg" alt="Tab 1 Image">
            </div>
          </div>
        </div>
      </div>
      <div class="buttons" id="buttons-2">
        <div class="tab-content-div">
          <div class="tab-screen">
            <div class="tab-screen-text">
              <h3 class="tab-text-h3">Cloud-Driven Hospitality Solutions</h3>
              <p class="tab-text-span">Elevate guest experiences and streamline operations with our tailored hospitality solutions:</p>
              <p class="tab-text-p"><strong>Cloud Telephony for Hotels –</strong> Ensure clear and reliable communication across the property.</p>
              <p class="tab-text-p"><strong>Lead Generation Tools –</strong> Targeted solutions to attract and engage potential guests.</p>
              <p class="tab-text-p"><strong>AI-Driven Guest Experience Platform –</strong> Personalized service and support for memorable guest interactions.</p>
              <p class="tab-text-p"><strong>Staff Management App –</strong> Optimize operations and improve team efficiency.</p>
              <p class="tab-text-p"><strong>PMS & Channel Manager Connectors –</strong> Seamlessly connect booking and property management systems for smooth operations.</p>
            </div>
            <div class="tab-image" >
              <img src="/assets/image/redesign-img/tab-new-img22.png" alt="Tab 1 Image"> 
              <!-- tab-new-img22.png -->
            </div>
          </div>
        </div>
      </div>
      <div class="buttons" id="buttons-3">
        <div class="tab-content-div">
          <div class="tab-screen">
            <div class="tab-screen-text">
              <h3 class="tab-text-h3">Intelligent CX Solutions to Delight and Engage</h3>
              <p class="tab-text-p">A platform empowering agent to deliver seamless customer experience across all touchpoints. This innovative platform leverages AI powered solutions to revolutionize customer journey. Suitable with any PBX the platform provides flexible deployment options – On-premise & UAE hosted Cloud</p>
              <p class="tab-text-p"><strong>AI-Powered Chatbots –</strong> Provide instant, 24/7 assistance with intelligent, conversational AI.
                Social Media & WhatsApp Connectors Connect where your customers are most active for real-time engagement.</p>
              <p class="tab-text-p"><strong>Outbound Dialer –</strong> Reach out proactively to customers with automated dialing solutions.</p>
              <p class="tab-text-p"><strong>Ticketing System –</strong> Organize and track customer support issues for timely resolution.</p>
              <p class="tab-text-p"><strong>Social Media Analytics –</strong> Gain insights to refine your strategy and boost engagement.</p>
              <p class="tab-text-p"> <strong>Smart Surveys –</strong> Gather valuable feedback and drive continuous improvement in customer satisfaction.</p>
            </div>
            <div class="tab-image">
              <img src="/assets/image/redesign-img/tab-new-img3.svg" alt="Tab 1 Image">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  -->
</div>
<!-- industry influence section -->
<section class="section-3 layout">
  <div class="industry-influence-div">
    <div class="industry-influence-div-heading">
      <h1 class="industry-influence-div-h1">Industry Influence</h1>
      <div class="industry-influence-div-button">
        <button><img src="/assets/image/tabler_left.svg" alt="" /></button>
        <button><img src="/assets/image/tabler_right.svg" alt="" /></button>
      </div>
    </div>
    <div class="industry-influence-scroll-main">
      <!-- image 1 -->
      <a href="http://localhost:3000/cx/#/crm-connector" class="industry-influence-scroll-card">
        <img src="/assets/image/9dc6972a748ee22d062d771adb3996fc.jpg" alt="" />
        <div class="industry-influence-scroll-card-smokeeffect">
          <div class="industry-influence-scroll-card-heading">
            <h4>Connect with customers Anytime, Anywhere </h4>
            <button class="button-know-more">Know more</button>
          </div>
        </div>
      </a>
      <!-- image 2 -->
      <a href="http://localhost:3000/cx/#/social-media-connector" class="industry-influence-scroll-card">
        <img src="/assets/image/influ2.jpg" alt="" />
        <div class="industry-influence-scroll-card-smokeeffect">
          <div class="industry-influence-scroll-card-heading">
            <h4>Streamlined Collaboration and Social media engagement </h4>
            <button class="button-know-more">Know more</button>
          </div>
        </div>
      </a>

      <!-- image 3 -->
      <a href="http://localhost:3000/cx/#/out-bound-dialer" class="industry-influence-scroll-card">
        <img src="/assets/image/influ3.jpg" alt="" />
        <div class="industry-influence-scroll-card-smokeeffect">
          <div class="industry-influence-scroll-card-heading">
            <h4>Intelligent Call Management</h4>
            <button class="button-know-more">Know more</button>
          </div>
        </div>
      </a>

      <!-- img -4 -->
      <a href="http://localhost:3000/cx/#/power-bi-reports" class="industry-influence-scroll-card">
        <img src="assets/image/redesign-img/industry-13.jpg" alt="" />
        <div class="industry-influence-scroll-card-smokeeffect">
          <div class="industry-influence-scroll-card-heading">
            <h4>Turn Data Into Action with Advanced Analytics and Automation</h4>
            <button class="button-know-more">Know more</button>
          </div>
        </div>
       </a>


    </div>
  </div>
</section>
<section class="vertical-section layout">
  <div class="vertical-container ">
    <!-- first start -->
    <div class="vertical_text">Verticals we Serve</div>
    <div class="contents-withArrow">
      <a href="https://imperiumapp.com/finance" class="arrow-div">
        <p class="arrow-div-text">Finance</p>
        <img class="arrow-1" src="/assets/image/redesign-img/arrow-img.png" />
      </a>
      <!-- <div class="arrow-div">
        <p class="arrow-div-text">Automobile</p>
        <img class="arrow-1" src="/assets/image/redesign-img/arrow-img.png" />
      </div> -->
      <a href="https://imperiumapp.com/debtcollection" class="arrow-div">
        <p class="arrow-div-text">Debt Collection</p>
        <img class="arrow-1" src="/assets/image/redesign-img/arrow-img.png" />
      </a>
      <!--  -->
      <a href="https://imperiumapp.com/businesscenter" class="arrow-div">
        <p class="arrow-div-text">Business Centre</p>
        <img class="arrow-1" src="/assets/image/redesign-img/arrow-img.png" />
      </a>
      <!--  -->
      <a href="https://imperiumapp.com/healthcare" class="arrow-div">
        <p class="arrow-div-text">Healthcare</p>
        <img class="arrow-1" src="/assets/image/redesign-img/arrow-img.png" />
      </a>
      <!--  -->
      <!-- <div class="arrow-div">
        <p class="arrow-div-text">Help Desk</p>
        <img class="arrow-1" src="/assets/image/redesign-img/arrow-img.png" />
      </div> -->

      <!--  -->
      <a href="https://imperiumapp.com/helpdesk" class="arrow-div">
        <p class="arrow-div-text">Help Desk</p>
        <img class="arrow-1" src="/assets/image/redesign-img/arrow-img.png" />
      </a>
      <a href="https://imperiumapp.com/educationsector" class="arrow-div">
        <p class="arrow-div-text">Education</p>
        <img class="arrow-1" src="/assets/image/redesign-img/arrow-img.png" />
      </a>
      <a href="https://imperiumapp.com/realestate" class="arrow-div">
        <p class="arrow-div-text">Real Estate</p>
        <img class="arrow-1" src="/assets/image/redesign-img/arrow-img.png" />
      </a>
      <!--  -->
      <a href="https://imperiumapp.com/ecommerce" class="arrow-div">
        <p class="arrow-div-text">E-Commerce</p>
        <img class="arrow-1" src="/assets/image/redesign-img/arrow-img.png" />
      </a>
      <!--  -->
      <a href="https://imperiumapp.com/banking" class="arrow-div">
        <p class="arrow-div-text">Banking</p>
        <img class="arrow-1" src="/assets/image/redesign-img/arrow-img.png" />
      </a>
      <!--  -->
      <a href="https://imperiumapp.com/insurance" class="arrow-div">
        <p class="arrow-div-text">Insurance</p>
        <img class="arrow-1" src="/assets/image/redesign-img/arrow-img.png" />
      </a>
    </div>
    <!-- first section end -->

  </div>

</section>

<section class="section-cards-2 layout">
  <div class="section-card-main-div">
    <div class="section-card-head">
      <h3 class="section-card-head-h3">Imperium Case Studies</h3>
      <a href="https://imperiumapp.com/casestudy" target="_blank" class="seeAll">See All</a>
    </div>
    <div class="section-cards-scroll">

      <a download target="_blank" href="https://imperiumapp.com/assets/pdf/Case_Study_Final_Contact_Center_Set_Up_Emirates_Hospital.pdf" class="imperium-cards">
        <img src="assets/image/redesign-img/scroll-imperium-1.svg" alt="" />
        <div class="imperium-cards-smokeeffect">
          <div class="imperium-cards-heading">
            <h4>Emirates Hospital vitalized with Avaya Contact Center set up by Imperium</h4>
            <p class="download-study-text">Download Case study</p>
          </div>
        </div>
      </a>
      <!--  -->
      <a href="https://imperiumapp.com/assets/pdf/Imperium_Concordia_Case_Study_Final.pdf" target="_blank" class="imperium-cards">
        <img src="assets/image/redesign-img/scroll-imperium-2.svg" alt="" />
        <div class="imperium-cards-smokeeffect">
          <div class="imperium-cards-heading">
            <h4>Concordia Dubai Expands On Efficiency With Imperium CMS</h4>
            <p class="download-study-text">Download Case study</p>
          </div>
        </div>
      </a>
      <!--  -->
      <a href="https://imperiumapp.com/assets/pdf/Imperium_Macemacro_success_story.pdf" download target="_blank" class="imperium-cards">
        <img src="assets/image/redesign-img/scroll-imperium-3.svg" alt="" />
        <div class="imperium-cards-smokeeffect">
          <div class="imperium-cards-heading">
            <h4>Imperium Macemacro Success</h4>
            <p class="download-study-text">Download Case study</p>
          </div>
        </div>
      </a>
      <!--  -->
      <a class="imperium-cards" href="https://imperiumapp.com/assets/pdf/Omniyat_Case_Study.pdf" target="_blank">
        <img src="assets/image/redesign-img/scroll-imperium-4.svg" alt="" />
        <div class="imperium-cards-smokeeffect">
          <div class="imperium-cards-heading">
            <h4>Omniyat Real Estate</h4>
            <p class="download-study-text">Download Case study</p>
          </div>
        </div>
      </a>
      <!--  -->
    </div>
  </div>
</section>
<section>
  <div class="layout">
    <div class="drop-down-scroll">
      <p class="section-card-head-h3">Our Esteemed Clients</p>
    </div>
  </div>
</section>
@include('layouts.components.esteemedClients')
<section class="bottom-container layout">
  <div class="bottom-main">
    <div class="bottom-box">
      <p class="bottom-box-text">Revolutionizing Your Business</p>
      <div class="bottom_box_button">
      <a class="butn butn__new" href="{{ url('contact') }}"><span>Contact Sales</span> </a> 
      </div>
    </div>
  </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
<script>
  $(function() {
    $("#tabs").tabs();
  });
</script>
<script>
  $(document).ready(function() {
    $('.tab').click(function() {
      var tabId = $(this).data('tab');

      // Switch active tab
      $('.tab').removeClass('active-tab');
      $(this).addClass('active-tab');

      // Show corresponding buttons and hide others
      $('.buttons').removeClass('active-buttons');
      $('#buttons-' + tabId).addClass('active-buttons');
    });
  });
</script>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function() {
    // Select the scroll container and buttons
    const scrollContainer = document.querySelector('.industry-influence-scroll-main');
    const scrollLeftButton = document.querySelector('.industry-influence-div-button button:nth-child(1)');
    const scrollRightButton = document.querySelector('.industry-influence-div-button button:nth-child(2)');

    // Check if elements are available
    if (scrollContainer && scrollLeftButton && scrollRightButton) {
      // Scroll left (move the scroll container to the right)
      scrollLeftButton.addEventListener('click', () => {
        scrollContainer.scrollLeft -= 380; // Adjust scroll amount if necessary
      });

      // Scroll right (move the scroll container to the left)
      scrollRightButton.addEventListener('click', () => {
        scrollContainer.scrollLeft += 380; // Adjust scroll amount if necessary
      });
    } else {
      console.error('Scroll container or buttons not found');
    }
  });
</script>
<script type="text/javascript">
  $(document).ready(function() {
    // Initialize slick carousel
    var slider = $('.slick-slide-main').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 5000, // Adjust speed as necessary
      pauseOnHover: true, // Pauses autoplay on hover
      arrows: false, // Hide default arrows
      responsive: [{
          breakpoint: 1024, // Tablet: up to 1024px
          settings: {
            slidesToShow: 1, // Show 1 slide at a time on tablets
            slidesToScroll: 1,
            autoplay: true, // Enable autoplay on tablet
            autoplaySpeed: 2000,
            arrows: false, // Hide default arrows
          }
        },
        {
          breakpoint: 768, // Mobile: up to 768px
          settings: {
            slidesToShow: 1, // Show 1 slide at a time on mobile
            slidesToScroll: 1,
            autoplay: true, // Enable autoplay on mobile
            autoplaySpeed: 2000,
            arrows: false, // Hide default arrows
          }
        },
        {
          breakpoint: 480, // Extra small mobile: up to 480px
          settings: {
            slidesToShow: 1, // Show 1 slide at a time on extra small devices
            slidesToScroll: 1,
            autoplay: true, // Enable autoplay on small mobile
            autoplaySpeed: 2000,
            arrows: false, // Hide default arrows
          }
        }
      ]
    });

    // Left arrow button functionality
    $('#scroll-left').click(function() {
      slider.slick('slickPrev');
    });

    // Right arrow button functionality (custom)
    $('#scroll-right').click(function() {
      slider.slick('slickNext');
    });
  });
</script>


<script>
  document.addEventListener('DOMContentLoaded', function() {
    const scrollContainer = document.querySelector('.industry-influence-scroll-main');
    const scrollLeftButton = document.querySelector('.industry-influence-div-button button:nth-child(1)');
    const scrollRightButton = document.querySelector('.industry-influence-div-button button:nth-child(2)');

    if (scrollContainer && scrollLeftButton && scrollRightButton) {
      scrollLeftButton.addEventListener('click', () => {
        scrollContainer.scrollLeft -= 380;
      });
      scrollRightButton.addEventListener('click', () => {
        scrollContainer.scrollLeft += 380;
      });
    } else {
      console.error('Scroll container or buttons not found');
    }
  });

  // 
  $(document).ready(function() {
    // Handle change event of the dropdown
    $('.drop-phone').change(function() {
      var tabId = $(this).val(); // Get selected tab's value

      // Show corresponding buttons and hide others
      $('.buttons').removeClass('active-buttons');
      $('#buttons-' + tabId).addClass('active-buttons');
    });
  });
</script>

@endsection
@extends('layouts.app')
@section('meta')
{!!Helper::setMetaTags($meta)!!}
@stop
@section('content')
<!--contact form modal-->
<!--======= SLIDER AREA =======-->
<div id="home" class="lite-slides-area">
   <div class="single-slide-item" style="background-image: url({{asset('image/bg-hero-1.jpg')}});">
      <div class="slide-item-table">
         <div class="slide-item-tablecell">
            <div class="container">
               <div class="row">
                  <div class="col-md-8">
                     <div class="slide-content">
                        <h1>Customize & Build Contact Center Solutions With Avaya IP Office™ Contact Center </h1>
                        <p>Our Simple & Robust Omnichannel Solutions Are Tailor Made As Per Customer's Requirement.</p>
                        <div class="slide-btn">
                           <a href="javascript:;" data-toggle="modal" data-target="#modal-contact-form" class="filled-btn">Learn more</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="single-slide-item" style="background-image: url({{asset('image/slider/slider1.jpeg')}}); opacity: 0;">
      <div class="slide-item-table">
         <div class="slide-item-tablecell">
            <div class="container">
               <div class="row">
                  <div class="col-md-8">
                     <div class="slide-content">
                        <h2>Transform The Way You Communicate! </h2>
                        <p>Enable your business applications to connect, communicate and transact using Inaipi, powered by Avaya Web – RTC Client.</p>
                        <div class="slide-btn">
                           <a href="javascript:;" data-toggle="modal" data-target="#modal-contact-form" class="filled-btn">Learn more</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="single-slide-item" style="background-image: url({{asset('image/slider/slider2.jpeg')}}); opacity: 0;">
      <div class="slide-item-table">
         <div class="slide-item-tablecell">
            <div class="container">
               <div class="row">
                  <div class="col-md-8">
                     <div class="slide-content">
                        <h2>The All-new Powerful CRM Connector Solutions From Imperium</h2>
                        <p>Imperium Connector is a powerful application enabling a multi-channel customer interaction. </p>
                        <div class="slide-btn">
                           <a href="javascript:;" data-toggle="modal" data-target="#modal-contact-form" class="filled-btn">Learn more</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="single-slide-item" style="background-image: url({{asset('image/slider/slider3.jpeg')}}); opacity: 0;">
      <div class="slide-item-table">
         <div class="slide-item-tablecell">
            <div class="container">
               <div class="row">
                  <div class="col-md-8">
                     <div class="slide-content">
                        <h2>Call Accounting Solutions With World-Class Partnerships
                        </h2>
                        <p>Imperium brings benefits of world-class partnerships to your desk and helps you reap the benefits. </p>
                        <div class="slide-btn">
                           <a href="javascript:;" data-toggle="modal" data-target="#modal-contact-form" class="filled-btn">Learn more</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- <div class="clear"></div> -->
</div>
<!--===== LOGO CAROUSEL AREA =====-->
<div class="lite-logo-carousel-area">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="logo-carousel">
               <img class="center-block" src="{{asset('img/logo-carousel/11.png')}}" alt="Partners">
              <!--  <img class="center-block" src="{{asset('img/logo-carousel/logo512.png')}}" alt="Partners">-->
               <img class="center-block" src="{{asset('img/logo-carousel/33.png')}}" alt="Partners">
               <img class="center-block" src="{{asset('img/logo-carousel/44.png')}}" alt="Partners">
               <img class="center-block" src="{{asset('img/logo-carousel/55.png')}}" alt="Partners">
               <img class="center-block" src="{{asset('img/logo-carousel/66.png')}}" alt="Partners">
               <img class="center-block" src="{{asset('img/logo-carousel/du.png')}}" alt="Partners">
            </div>
         </div>
      </div>
   </div>
</div>
<section id="service" class="service-area section-big section-padding greybg">
   <div class="container">
      <div class="section-title">
         <h2>Our Products </h2>
         <div class="row">
            <div class="col-md-12 ">
               <p>Choose our finest telecom software products to compliment your everyday business functionality</p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-12 solutionsec">
            <ul class="benefits-cta-list toppro">
               <li>
                  <div class="match-height">
                     <a href="{{url('products/telephony')}}" class="learn-more-link">
                        <div class="sol-img"><img src="{{ asset('image/products/ip-office.jpg') }}" alt="Health Care"> </div>
                        <div class="sol-content">
                           <h4>Avaya IP Office Telephony and Unified Communication</h4>
                           <!-- <p>
                             Whether you are a one man army, a mid-size startup or an enterprise level business, The Avaya IP Telephony is your ‘all in one' solution for voice and data communications....
                           </p> -->
                              More 
                              <i class="fa fa-arrow-right" aria-hidden="true"></i> 
                        </div>
                     </a>
                  </div>
               </li>
               <li>
                  <div class="match-height">
                     <a href="{{url('products/contactcenter')}}" class="learn-more-link">
                        <div class="sol-img">
                           <img src="{{ asset('img/Avaya_contact.jpg') }}" alt="Contact Center">
                           </div>
                        <div class="sol-content">
                           <h4> Avaya Contact Center Select</h4>
                           <!-- <p>With Avaya IP Office Contact Center, you can implement a comprehensive end-to-end customer service strategy to help make your business a customer's first choice...
                           </p> -->
                              More 
                              <i class="fa fa-arrow-right" aria-hidden="true"></i> 
                        </div>
                     </a>
                  </div>
               </li>
               <li>
                  <div class="match-height">
                     <a href="{{url('products/avayaaura')}}" class="learn-more-link">
                        <div class="sol-img"><img src="{{ asset('image/products/avaya-thumbnail-image.jpg') }}" alt="Web RTC"> </div>
                        <div class="sol-content">
                           <h4> Avaya Aura Communication Systems.  </h4>
                           <!-- <p>A technology that is the backbone of many stunning web-based real time communication applications. WebRTC blends the VoIP and the web to enable functionalities which are the best...
                           </p> -->
                              More 
                              <i class="fa fa-arrow-right" aria-hidden="true"></i> 
                        </div>
                     </a>
                  </div>
               </li>
               <li>
                  <div class="match-height">
                     <a href="{{ url('products') }}" class="learn-more-link">
                        <div class="sol-img"><img src="{{ asset('image/products/unified.jpg') }}" alt="Make Help Desk"> </div>
                        <div class="sol-content">
                           <h4>Imperium's Product House</h4>
                           <!-- <p>Work efficiently in a collaborative secure business environment. INAIPI offers unified communication as a tool for modern times. It establishes a 360°communication network for internal...
                           </p> -->
                              See All Products
                              <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </div>
                     </a>
                  </div>
               </li>
               <!--benefits 1-->
            </ul>
         </div>
      </div>




      
   </div>
</section>
<section class="section-padding why-cloud" id="why-cloud">
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center">
            <div class="section-title text-center">
               <h2>Why Imperium?</h2>
               <p>
                  That's because Imperium provides flexible integration solutions to contact centers. Our breadth of integration expertise continues to mature and excel in the market as we grow and expand our presence. This is embraced by the pedigree of technology and service partners we have engaged with over the years. We have extensive knowledge and experience in delivering a wide range of services across consulting, implementation, training and ongoing support. Our team of local representatives and seasoned engineers have years of experience in the local market, ensuring the highest caliber of competency in everything we do. 
               </p>
            </div>
         </div>
      </div>
      <div class="maintab">
         <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class=" carousel-indicators nav nav-tabs">
               <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
                  <a href="javascript:;">  Integration Proficiency </a>
               </li>
               <li data-target="#carousel-example-generic" data-slide-to="1">
                  <a href="javascript:;"> Implementation & Integration    </a>
               </li>
               <li data-target="#carousel-example-generic" data-slide-to="2">
                  <a href="javascript:;"> 24/7 Support </a>
               </li>
            </ul>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
               <div class="item active">
                  <div class="tab-content" id="home">
                     <div class="carouselcaption">
                        <p>Create a world-class contact center with Imperium's business consulting services. Our
                           business consultants come with abundant knowledge of various domains and they provide
                           well-balanced feedback and evaluation while delivering results focused on the client's
                           needs.
                        </p>
                        <div class="notittle"> </div>
                        <div class="text-center">
                           <img src="{{asset('image/range-services-01.png')}}" alt="Imperium's business consulting services">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="carouselcaption">
                     <div class="tab-pane" id="profile">
                        <p>Organisations are increasingly focusing on the customer experience in order to deliver
                           their stated product or service. With the rapid evolution of technology and the customer
                           expectation, organizations need to adapt their applications and services quickly
                           and easily to meet the demands of their customers.
                        </p>
                        <div class="text-center">
                           <img src="{{asset('image/impremetation.png')}}" alt="imperiumapp">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="carouselcaption">
                     <div role="tabpanel" class="tab-pane" id="messages">
                        <p>
                           When businesses experience a system outage or application issue, this leads to high revenue loss and drop in customer satisfaction
                           index with a direct impact on brand equity and value. As per global statistics, a
                           typical mid-size business experiences 14 hours of downtime each year at a cost of
                           $110,000 per hour which is more than $1.5 million in lost revenue each year.
                        </p>
                        <div class="row text-center">
                           <div class="col-sm-12">
                              <div class="inner-sec">
                                 <h4> Our Delivery Methodology </h4>
                                 <img src="{{asset('image/247.png')}}" alt="Our Delivery Methodology">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section id="Influence" class="service section-padding">
   <div class="container">
      <div class="section-title seclink text-center">
         <h2>Industry Influence</h2>
         <div class="row">
            <div class="col-sm-8 ">
               <p>Sectors we expertise</p>
            </div>
            <div class="col-sm-4 ">
               <a href="{{url('industry-influence')}}" class="pull-right theme-color">
               See More Industries
               </a>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-12 solutionsec">
            <ul class="benefits-cta-list">
               <li>
                  <a href="{{url('healthcare')}}" class="learn-more-link"> 
                     <div class="sol-img"><img src="{{ asset('image/consider_uribel_drug_for_urinary_problems.jpg') }}" alt="Health Care"> </div>
                     <div class="sol-content">
                        <h4>Health Care</h4>
                        <!-- <p>
                           Avaya IP Office & Imperium's Telemedicine & Healthcare solutions together addresses Patients / Doctors / Healthcare staffs
                           Interaction challenges in Healthcare industry. Our virtual consultation software
                           allows healthcare professionals
                        </p> -->
                        More 
                        <i class="fa fa-arrow-right" aria-hidden="true"></i> 
                     </div>
                  </a>
               </li>
               <li>
                  <a href="{{url('debtcollection')}}" class="learn-more-link">
                     <div class="sol-img"><img src="{{ asset('image/1338634_19af.jpg') }}" alt="Debt Collection"> </div>
                     <div class="sol-content">
                        <h4> Debt Collection</h4>
                        <!-- <p>Providing Customer information and tracking history is critical for a debt collector
                           where the interactions are legally bound. Avaya IP Office with Imperium Debt
                           collection provides reliable and secured environment.
                        </p> -->
                        More 
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                     </div>
                  </a>
               </li>
               <li>
                  <div class="match-height">
                     <a href="{{url('helpdesk')}}" class="learn-more-link">
                        <div class="sol-img"><img src="{{ asset('image/cs1.jpg') }}" alt="Make Help Desk"> </div>
                        <div class="sol-content">
                           <h4>Make Help Desk</h4>
                           <!-- <p>Avaya IP Office Call center suite with Imperium Service desk module offers the best
                              fit and cost-effective solution for the Customer service industry enabling them
                              to provide effective call resolution for their customers.
                           </p> -->
                           More 
                           <i class="fa fa-arrow-right" aria-hidden="true"></i> 
                        </div>
                     </a>
                  </div>
               </li>

               <li>
                  <div class="match-height">
                     <a href="{{url('businesscenter')}}" class="learn-more-link">
                        <div class="sol-img"><img src="{{ asset('image/Office-960x720.jpg') }}" alt="Business Center"> </div>
                        <div class="sol-content">
                           <h4>Business Center</h4>
                           <!-- <p>Convergent Networks supporting voice, video and data are a standard in today's competitive
                           busi-ness world and customers are looking for smarter systems to manage multi-layered
                           networks.
                           </p> -->
                           More 
                           <i class="fa fa-arrow-right" aria-hidden="true"></i> 
                        </div>
                     </a>
                  </div>
               </li>
               <!--benefits 1-->
            </ul>
         </div>
      </div>
   </div>
</section>

<div id="case-studies" class="lite-blog-area section-padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12 ">
            <div class="section-title seclink text-center">
               <h2>Imperium Case Studies</h2>
               <div class="row">
                  <div class="col-sm-8 ">
                     <p>Learn More from Companies Like Yours. Learn how we have significantly improved businesses in the region with efficiently applied solutions.</p>
                  </div>
                  <div class="col-sm-4 ">
                     <a href="{{url('casestudy')}}" class="pull-right theme-color">
                     See More Case Studies
                     </a>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-md-12">
             <div class="col-sm-4">
                 <article>
                     <div class="post_featured with_thumb hover_dots">
                         <img
                             src="{{asset('image/Office-960x720.jpg')}}"
                             alt="ICT Solution to Concordia"
                             class="wp-post-image">
                     </div>
                     <div class="post-content">
                         <h3 class="title match-height">
                             Emirates Hospital Vitalized With Avaya Contact Center Set Up By Imperium
                         </h3>
                     </div>
                     <div class="post_content entry-content">
                         <p>
                             <a class="more-link sc_button_hover_slide_left" href="{{asset('pdf/Case_Study_Final_Contact_Center_Set_Up_Emirates_Hospital.pdf')}}" download>
                             Download Case Study</a>
                         </p>
                     </div>
                 </article>
             </div>

             <div class="col-sm-4">
                 <article>
                     <div class="post_featured with_thumb hover_dots">
                         <img
                             src="{{asset('image/1338634_19af.jpg')}}"
                             alt="ICT Solution to Concordia"
                             class="wp-post-image">
                     </div>
                     <div class="post-content">
                         <h3 class="title match-height">
                            Concordia Dubai Expands On Efficiency With Imperium CMS
                         </h3>
                     </div>
                     <div class="post_content entry-content">
                         <p>
                             <a class="more-link sc_button_hover_slide_left" href="{{asset('pdf/Imperium_Concordia_Case_Study_Final.pdf')}}" download>
                             Download Case Study</a>
                         </p>
                     </div>
                 </article>
             </div>

             <div class="col-sm-4">
                 <article>
                     <div class="post_featured with_thumb hover_dots">
                         <img
                             src="{{asset('image/cs1.jpg')}}"
                             alt="ICT Solution to Concordia"
                             class="wp-post-image">
                     </div>
                     <div class="post-content">
                         <h3 class="title match-height">
                             Imperium Macemacro Success
                         </h3>
                     </div>
                     <div class="post_content entry-content">
                         <p>
                             <a class="more-link sc_button_hover_slide_left" href="{{asset('pdf/Imperium_Macemacro_success_story.pdf')}}" download>
                             Download Case Study</a>
                         </p>
                     </div>
                 </article>
             </div>
         </div>
      </div>
   </div>
</div>


<div id="blog" class="section-padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12 ">
            <div class="section-title text-center">
               <h2>What's new</h2>
               <p>Latest news and announcements on IT technology across the globe</p>
            </div>
         </div>
      </div>
      <!--/.row-->
      <!-- <div id="blog-carousel">
         <?php $count = 1; ?>
         @foreach ( $blogs as $post)
            <?php if($count > 3){
               break;
            } ?>
            <div class="item">
               <div class="single-blog home-blog">
                  @if($post->featuredImage != '/img/imageph.png' && $post->featuredImage != '')
                     <img src="{{$post->featuredImage }}" class="img-responsive" alt="{{$post->title}}">
                  @endif
                  <div class="post-content">
                     <h3 class="title">{{$post->title}}</h3>
                     <p class="blog-post-date">{{Helper::dateFormat($post->createdAt)}}</p>
                     <div class="match-height"><p>{{Helper::limit_words(strip_tags($post->body) , 40) }} </p></div>
                     <a href="{{url('blog-news/post/'. Helper::slugify($post->title) .'-'. $post->_id )}}" class="learn-more-link">
                        More 
                     <i class="fa fa-arrow-right" aria-hidden="true"></i> 
                     </a>
                  </div>
               </div>
            </div>
            <?php $count++ ?>
         @endforeach
      </div> -->

      <div>
         <?php $count = 1; ?>
         @foreach ( $blogs as $post)
            <?php if($count > 3){
               break;
            } ?>
            <div class="col-sm-4">
               <div class="single-blog home-blog">
                  @if($post->featuredImage != '/img/imageph.png' && $post->featuredImage != '')
                     <img src="{{$post->featuredImage }}" class="img-responsive" alt="{{$post->title}}">
                  @endif
                  <div class="post-content">
                     <h3 class="title">{{$post->title}}</h3>
                     <p class="blog-post-date">{{Helper::dateFormat($post->createdAt)}}</p>
                     <div class="match-height"><p>{{Helper::limit_words(strip_tags($post->body) , 40) }} </p></div>
                     <a href="{{url('blog-news/post/'. Helper::slugify($post->title) .'-'. $post->_id )}}" class="learn-more-link">
                        More 
                     <i class="fa fa-arrow-right" aria-hidden="true"></i> 
                     </a>
                  </div>
               </div>
            </div>
            <?php $count++ ?>
         @endforeach
      </div>
      
      <!--/.row -->
   </div>
   <!--/.container -->
</div>

<div class="section-padding" id="clinets">
   <div class="container">
      <div class="litelogo-carousel-area">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="logo-carousel">
                     <img class="center-block" src="{{asset('image/clients/6.png')}}" alt="clients">
                     <img class="center-block" src="{{asset('image/clients/7.png')}}" alt="clients">
                     <img class="center-block" src="{{asset('image/clients/9.png')}}" alt="clients">
                     <img class="center-block" src="{{asset('image/clients/10.png')}}" alt="clients">
                     <img class="center-block" src="{{asset('image/clients/11.png')}}" alt="clients">
                     <img class="center-block" src="{{asset('image/clients/8.png')}}" alt="clients">
                     <img class="center-block" src="{{asset('image/clients/1.png')}}" alt="clients">
                     <img class="center-block" src="{{asset('image/clients/2.png')}}" alt="clients">
                     <img class="center-block" src="{{asset('image/clients/3.png')}}" alt="clients">
                     <img class="center-block" src="{{asset('image/clients/4.png')}}" alt="clients">
                     <img class="center-block" src="{{asset('image/clients/5.png')}}" alt="clients">
                     <img class="center-block" src="{{asset('image/clients/12.png')}}" alt="clients">
                     <img class="center-block" src="{{asset('image/clients/13.png')}}" alt="clients">
                     <img class="center-block" src="{{asset('image/clients/14.png')}}" alt="clients">
                     <img class="center-block" src="{{asset('image/clients/15.png')}}" alt="clients">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection

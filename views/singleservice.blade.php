@extends('layouts.app')

@section('meta')
	{!!Helper::setMetaTags($meta)!!}
@stop

@section('content')

        <!-- Inner Page Header serction start here -->
        <div class="inner-page-header">
            <div class="container">
                <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <div class="header-page-title">
                             <h2>Single Services</h2>
                         </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <div class="header-page-locator">
                             <ul>
                                 <li><a href="{{ url('') }}">Home /</a></li>
                                 <li><a href="{{ url('services') }}">Services / </a> Single Services</li>
                             </ul>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Inner Page Header serction end here -->      
        <!-- Single services area start here -->
        <!-- Blog Area Start -->
        <div class="total-blog-area">
          <div class="container">
            <div class="row">
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="single-blog-post">
                  <div class="blog-image">
                    <a href="single.html"><img src="{{asset('img/single-services.jpg')}}" alt="family"></a>
                  </div>
                  <h2>Financial Businss Planning</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui. Ut lectus purus, commodo et tincidunt vel, interdum sed lectus.Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui. Ut lectus purus, commodo et tincidunt vel, interdum sed lectus.Sed dui lorem, adipiscing in adipiscing et, interdum nec metus.</p>  <p> Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui. Ut lectus purus, commodo et tincidunt vel, interdum sed lectus. Vestibulum adipiscing tempor nisi id elementu sadips ipsums dolores uns fugiats gravida nam elit vols nulla dolores amet untras sitsers.</p>
                  <h2>How Can We Help ?</h2>
                  <p>Help simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMake</p>
                  <div class="download">
                      <a href="#">Download PDF</a>
                  </div>
                </div>
              
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="blog-sidebar-area">
                  <div class="single-sidebar">
                    <h2>Categories</h2>
                    <div class="sidebar-category">
                      <ul>
                        <li><a href="{{ url('services/singleservice') }}">Investment Planning</a></li>
                        <li><a href="{{ url('services/singleservice') }}">Childrens Planning</a></li>
                        <li><a href="{{ url('services/singleservice') }}">Retirement Planning</a></li>
                        <li><a href="{{ url('services/singleservice') }}">Insurance Planning</a></li>
                        <li><a href="{{ url('services/singleservice') }}">Tax Planning</a></li>
                        <li><a href="{{ url('services/singleservice') }}">Commodities Trading</a></li>
                        <li><a href="{{ url('services/singleservice') }}">Mutual Funds</a></li>
                        <li><a href="{{ url('services/singleservice') }}">Wealth Management</a></li>                      
                      </ul>
                    </div>
                  </div>
                  <div class="single-sidebar">
                    <h2>testimonial</h2>
                    <div class="sidebar-testimonial">
                      <div class="single-testimonial">
                          <h3>Mr. Mack Magragor</h3>
                          <p>CEO, Advisor</p>
                          <div class="testimonial-content">
                              <p>Gimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the iy'sdard .</p>
                          </div>
                      </div>
                      <div class="single-testimonial">
                          <h3>Mr. Mack Magragor</h3>
                          <p>CEO, Advisor</p>
                          <div class="testimonial-content">
                              <p>Gimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the iy'sdard .</p>
                          </div>
                      </div>
                      <div class="single-testimonial">
                          <h3>Mr. Mack Magragor</h3>
                          <p>CEO, Advisor</p>
                          <div class="testimonial-content">
                              <p>Gimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the iy'sdard .</p>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Blog Area End -->
        <!-- Single services area end here -->
        <!-- Call to action area start here -->
        <div class="call-top-action">
                   <div class="container">
                       <div class="row">
                           <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                               <div class="subscribe-text">
                                   <h2>For Expert <span>Financial Advice</span> You Can Trust Us</h2>
                               </div>
                           </div>
                           <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                               <div class="subscribe-now">
                                   <a href="#">Subscribe Now</a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>       
        <!-- Call to action area end here --> 

@endsection
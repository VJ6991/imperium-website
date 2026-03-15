@extends('layouts.app')
@section('meta')
{!!Helper::setMetaTags($meta)!!}
@stop
@section('content')

<div class="lite-breadcroumb-area innerbanner" id="solution">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1>Industries We Serve</h1>
            <div class="breadcroumb">
               <a href="{{url('./')}}">Home</a> &gt;
               <span class="current">Industries We Serve</span>
            </div>
         </div>
      </div>
   </div>
</div>
<section id="about" class="service-area section-big section-padding service">
   <div class="container">
      <div class="topcontent">
         <div class="row">
             <div class="col-md-12 text-center">
                <div class="section-title">
                   <h2>Vertical based customized ICT solutions for a winning edge </h2>
                </div>
             </div>
         </div>
         <div class="solutionsec detailspage">
            <div class="row">
               <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="service-box">
                     <a href="{{url('healthcare')}}"  class="learn-more-link">
                        <div class="thumb">
                           <div class="serviceimg">
                              <div class="image">
                                 <img src="{{ asset('image/healthcare.jpg') }}" alt="Health Care">
                              </div>
                           </div>
                        </div>
                        <div class="servicecont">
                           <h3>Health Care</h3>
                           <p class="match-height"> "Communication is an essential element of healthcare" – Charles Grant. 
                                 Good healthcare is the right of every human, and it is a necessity for the organizations in healthcare sector to be well connected to serve humanity.
                           </p>
                           More 
                           <i class="fa fa-arrow-right" aria-hidden="true"></i> 
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="service-box">
                     <a href="{{url('debtcollection')}}"  class="learn-more-link">
                        <div class="thumb">
                           <div class="serviceimg">
                              <div class="image">
                                 <img src="{{ asset('image/1338634_19af.jpg') }}" alt="Debt Collection"> 
                              </div>
                           </div>
                        </div>
                        <div class="servicecont">
                           <h3>Debt Collection</h3>
                           <p class="match-height">Providing Customer information and tracking history is critical for a debt collector
                              where the interactions are legally bound. Avaya IP Office with Imperium Debt
                              collection provides reliable and secured environment.
                           </p>
                           More 
                           <i class="fa fa-arrow-right" aria-hidden="true"></i> 
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="service-box">
                     <a href="{{url('helpdesk')}}"  class="learn-more-link">
                        <div class="thumb">
                           <div class="serviceimg">
                              <div class="image">
                                 <img src="{{ asset('image/cs1.jpg') }}" alt="Make Help Desk">
                              </div>
                           </div>
                        </div>
                        <div class="servicecont">
                           <h3>Make Help Desk</h3>
                           <p class="match-height">Avaya IP Office Call center suite with Imperium Service desk module offers the best
                              fit and cost-effective solution for the Customer service industry enabling them
                              to provide effective call resolution for their customers.
                           </p>
                           More 
                           <i class="fa fa-arrow-right" aria-hidden="true"></i> 
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="service-box">
                     <a href="{{url('businesscenter')}}"  class="learn-more-link">
                        <div class="thumb">
                           <div class="serviceimg">
                              <div class="image">
                                 <img src="{{ asset('image/Office-960x720.jpg') }}" alt="Business Center">
                              </div>
                           </div>
                        </div>
                        <div class="servicecont">
                           <h3>Business Center</h3>
                           <p class="match-height">Convergent Networks supporting voice, video and data are a standard in today's competitive
                              busi-ness world and customers are looking for smarter systems to manage multi-layered
                              networks.
                           </p>
                           More 
                           <i class="fa fa-arrow-right" aria-hidden="true"></i> 
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="service-box">
                     <a href="{{url('logistics')}}"  class="learn-more-link">
                        <div class="thumb">
                           <div class="serviceimg">
                              <div class="image">
                                 <img src="{{ asset('image/logistic_new.jpg') }}" alt="Logistics">
                              </div>
                           </div>
                        </div>
                        <div class="servicecont">
                           <h3>Logistics</h3>
                           <p class="match-height">"The line between disorder and order lies in Logistics" - Sun Tzu.
                              A crucial sector that dramatically shapes other industries and their supply chains. Most companies outsource their logistics operations so that they can focus on their core job and improve efficiency.
                           </p>
                           More 
                           <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="service-box">
                     <a href="{{url('educationsector')}}"  class="learn-more-link">
                        <div class="thumb">
                           <div class="serviceimg">
                              <div class="image">
                                 <img src="{{ asset('image/education.jpg') }}" alt="Make Help Desk">
                              </div>
                           </div>
                        </div>
                        <div class="servicecont">
                           <h3>Education Sector</h3>
                           <p class="match-height">"Learning is experience, everything else is just information" - Albert Einstein.
                              It is at Educational institutes that this principle find home. 
                           </p>
                           More 
                           <i class="fa fa-arrow-right" aria-hidden="true"></i> 
                        </div>
                     </a>
                  </div>
               </div>

               <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="service-box">
                     <a href="{{url('ecommerce')}}"  class="learn-more-link">
                        <div class="thumb">
                           <div class="serviceimg">
                              <div class="image">
                                 <img src="{{ asset('image/ecommerce.jpg') }}" alt="E commerce">
                              </div>
                           </div>
                        </div>
                        <div class="servicecont">
                           <h3>E-Commerce</h3>
                           <p class="match-height">"If your business is not on the internet, then your business will be out of business" - Bill Gates.
                           The power of E-commerce is amplifying as we move towards a global economy. 
                           </p>
                           More 
                           <i class="fa fa-arrow-right" aria-hidden="true"></i> 
                        </div>
                     </a>
                  </div>
               </div>

               <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="service-box">
                     <a href="{{url('realestate')}}"  class="learn-more-link">
                        <div class="thumb">
                           <div class="serviceimg">
                              <div class="image">
                                 <img src="{{ asset('image/real-estate.jpg') }}" alt="real estate">
                              </div>
                           </div>
                        </div>
                        <div class="servicecont">
                           <h3>Real Estate</h3>
                           <p class="match-height"> "Don't wait to buy real estate, buy real estate and wait" - Will Roger.
                              Customer service is very crucial in Real Estate. Customers are looking for more information about the investment they plan to make and they want to be sure they get the best deal for the price. 
                           </p>
                           More 
                           <i class="fa fa-arrow-right" aria-hidden="true"></i> 
                        </div>
                     </a>
                  </div>
               </div>

               <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="service-box">
                     <a href="{{url('retail')}}"  class="learn-more-link">
                        <div class="thumb">
                           <div class="serviceimg">
                              <div class="image">
                                 <img src="{{ asset('image/retail.jpg') }}" alt="Retail">
                              </div>
                           </div>
                        </div>
                        <div class="servicecont">
                           <h3>Retail</h3>
                           <p class="match-height"> "People do not buy goods and services, they buy relations, stories and magic" - Seth Gadin. 
                              Brink and Motor stores still hold the thrill of the fashionable shopping spree. In here - instant means instant. Retail is real and out-there, proactive, thriving with energy just as much on the backend as in the front. 
                           </p>
                           More 
                           <i class="fa fa-arrow-right" aria-hidden="true"></i> 
                        </div>
                     </a>
                  </div>
               </div>

               <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="service-box">
                     <a href="{{url('banking')}}"  class="learn-more-link">
                        <div class="thumb">
                           <div class="serviceimg">
                              <div class="image">
                                 <img src="{{ asset('image/banking.jpg') }}" alt="Banking">
                              </div>
                           </div>
                        </div>
                        <div class="servicecont">
                           <h3>Banking </h3>
                           <p class="match-height"> "In Banking or insurance trust is the only thing that you can sell" - Patrix Dixon.
                              A part of the society that servers as everyone’s prerogative, the banking sector is liable for their client’s data and security. 
                           </p>
                           More 
                           <i class="fa fa-arrow-right" aria-hidden="true"></i> 
                        </div>
                     </a>
                  </div>
               </div>

               <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="service-box">
                     <a href="{{url('finance')}}"  class="learn-more-link">
                        <div class="thumb">
                           <div class="serviceimg">
                              <div class="image">
                                 <img src="{{ asset('image/finance.jpg') }}" alt="Finance">
                              </div>
                           </div>
                        </div>
                        <div class="servicecont">
                           <h3>Finance </h3>
                           <p class="match-height">“The Financial services industry is a ward of the state”.
                              Financial services is a broad field that included activities such as risk management, debt collection, business reports and financial analysis, commercial investigations, debt collection and legal support. 
                           </p>
                           More 
                           <i class="fa fa-arrow-right" aria-hidden="true"></i> 
                        </div>
                     </a>
                  </div>
               </div>

               <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="service-box">
                     <a href="{{url('insurance')}}"  class="learn-more-link">
                        <div class="thumb">
                           <div class="serviceimg">
                              <div class="image">
                                 <img src="{{ asset('image/insurance.jpg') }}" alt="Insurance">
                              </div>
                           </div>
                        </div>
                        <div class="servicecont">
                           <h3>Insurance </h3>
                           <p class="match-height">"The Insurance sector can be a huge enabler, historically, it's been able to induce changes in  
                               behavior much more effectively than government has" - Frank Kullofo.
                              A fast growing sector worldwide, the insurance firms takes up the duty to defend its customers and protect them in difficult situations. 
                           </p>
                           More 
                           <i class="fa fa-arrow-right" aria-hidden="true"></i> 
                        </div>
                     </a>
                  </div>
               </div>


            </div>
         </div>
      </div>
   </div>
</section>
@endsection


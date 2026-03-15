@extends('layouts.app')
@section('meta')
{!!Helper::setMetaTags($meta)!!}
@stop
@section('content')
<!-- Inner Page Header serction start here -->
<div class="lite-breadcroumb-area innerbanner">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1>Health Care</h1>
            <div class="breadcroumb">
               <a href="./">Home</a> &gt;
               <span class="current">Health Care</span>
            </div>
         </div>
      </div>
   </div>
</div>
<section id="about" class="service-area section-big section-padding">
   <div class="container">
      <div class="topcontent">
         <div class="row">
             <div class="col-md-12 text-center">
                <div class="section-title">
                   <h2>Imperium Telemedicine & Healthcare Solutions</h2>
                </div>
             </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <p>
                  "Communication is an essential element of healthcare" - Charles Grant 
                  <br><br>
                  Good healthcare is the right of every human, and it is a necessity for the organizations in healthcare sector to be well connected to serve humanity. With all the medical advancements, it is only fair that 
                  Imperium has had the privilege to enhance the communication infrastructure and data management systems at clinics and hospitals across the UAE. 
                  <br><br>
                  We have been offering fully customized solutions to the healthcare segment. Be it contact centers, Telephony customized reports and multi-channel support system or even a mobile consultancy system, we have it ready. We've enabled an organized way of booking, cancelling and rescheduling of appointments, for call to be routed to the correct department, and vital pieces of communication between the patients, doctors and the management, to reports and data security. Imperium software suite for health care is designed with the utmost attention to the industry’s specific needs. 
               </p>
            </div>
            <div class="col-md-6">
               <div class="telvideo">
                  <img src="{{ asset('image/healthcare.jpg') }}" alt="Health Care">
               </div>
            </div>
         </div>

         <div class="row">
           <div class="col-md-12">
             <img src="{{ asset('image/products/core_poducts/Healthcare_Imperium_Products.png') }}" alt="Health Care">
           </div>
         </div>
      </div>
   </div>
</section>
@endsection


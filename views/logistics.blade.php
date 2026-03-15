

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
            <h1>Logistics</h1>
            <div class="breadcroumb">
               <a href="{{ url('') }}">Home</a> &gt;
               <span class="current">Logistics</span>
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
                   <h2>Logistics</h2>
                </div>
             </div>
         </div>
         
         <div class="row">
            <div class="col-md-6">
               <p>
                  "The line between disorder and order lies in Logistics" - Sun Tzu.
                  <br><br>
                  A crucial sector that dramatically shapes other industries and their supply chains. Most companies outsource their logistics operations so that they can focus on their core job and improve efficiency. The Logistics industry is always on the edge as the clients demand shorter lead times and core competency. 
                  <br><br>
                  Imperium makes sure that the urgency of operations in sector is met with effective connectivity and communication between teams and as well as with clients. We implement Avaya IVR and TTS system which allow customers to track status of their shipment, avoid long queues and get instant information from specific database. 
                  <br><br>
                  We have automated work to streamline human resource and put implement a long term investment strategy for basic activities such as request for new booking, collecting shipment / Location details via an IVR which capture data on voice and then transcribes to written text. 
                  <br><br>
                  Customer service agents are benefitted with a Computer Telephony Integration which displays information about incoming calls along with case history. Whist a call back manager downloads booking requests from IVR database and allows agents to call back the customer to confirm request.
               </p>
            </div>
            <div class="col-md-6">
               <div class="telvideo">
                  <img src="{{asset('image/logistic_new.jpg')}}"  alt="Logistics">
               </div>
            </div>
         </div>

         <div class="row">
           <div class="col-md-12">
             <img src="{{ asset('image/products/core_poducts/Logistics_Imperium_Products.png') }}" alt="Logistics">
           </div>
         </div>
      </div>
   </div>
</section>
@endsection


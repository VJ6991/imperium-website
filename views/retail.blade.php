

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
            <h1>Retail</h1>
            <div class="breadcroumb">
               <a href="{{ url('') }}">Home</a> &gt;
               <span class="current">Retail</span>
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
                   <h2>Retail</h2>
                </div>
             </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <p>
                  "People do not buy goods and services, they buy relations, stories and magic" - Seth Gadin.
                  <br><br> 
                  Brink and Motor stores still hold the thrill of the fashionable shopping spree. In here - instant means instant. Retail is real and out-there, proactive, thriving with energy just as much on the backend as in the front. It' is the classic way of creating customer experience and serving them over and above. 
                  <br><br>
                  Imperium has custom telecom solutions for this industry to stay responsive to every customer-need and concerns. We offer to them a contact center with full-fledged functionality for customer service over-call and integration which would allow agent to understand where the customer is coming from, what’s his demography, purchase, immediate concern and more. For retail we encourage solution which enhance availability and reduce hassle.
               </p>
            </div>
            <div class="col-md-6">
               <div class="telvideo">
                  <img src="{{ asset('image/retail.jpg') }}" alt="Retail">
               </div>
            </div>
         </div>

         <div class="row">
           <div class="col-md-12">
             <img src="{{ asset('image/products/core_poducts/Retail_Imperium_Products.png') }}" alt="Retail">
           </div>
         </div>
      </div>
   </div>
</section>
@endsection


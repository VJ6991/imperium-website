

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
            <h1>E-Commerce</h1>
            <div class="breadcroumb">
               <a href="{{ url('') }}">Home</a> &gt;
               <span class="current">E-Commerce</span>
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
                   <h2>E-Commerce</h2>
                </div>
             </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <p>
                  "If your business is not on the internet, then your business will be out of business" - Bill Gates.
                  <br><br>
                  The power of E-commerce is amplifying as we move towards a global economy. Today, you can attain a great global presence for your business from a single location and whist your patrons are spread world-wide. The Omni-channel concept booming, brands require great logistics.
                  <br><br>
                  As your market broadens, so does the need for creating a fanatic customer interaction online and on telecom, along with being inclusive and super-responsive. 
                  <br><br>
                  Imperium grants Ecommerce businesses an impeccable communication system with multichannel capabilities and order details and business sights to help the communication center run smoothly.
               </p>
            </div>
            <div class="col-md-6">
               <div class="telvideo">
                  <img src="{{ asset('image/ecommerce.jpg') }}" alt="Ecommerce">
               </div>
            </div>
         </div>

         <div class="row">
           <div class="col-md-12">
             <img src="{{ asset('image/products/core_poducts/E-Commerce_Imperium_Products.png') }}" alt="Ecommerce">
           </div>
         </div>
      </div>
   </div>
</section>
@endsection


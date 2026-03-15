

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
            <h1>Banking</h1>
            <div class="breadcroumb">
               <a href="{{ url('') }}">Home</a> &gt;
               <span class="current">Banking</span>
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
                   <h2>Banking</h2>
                </div>
             </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <p>
                  "In Banking or insurance trust is the only thing that you can sell" - Patrix Dixon.
                  <br><br> 
                  A part of the society that servers as everyone’s prerogative, the banking sector is liable for their client’s data and security.  
                  <br><br>
                  Imperium's solution focuses on implementing a customized and secure communication center with seamless communication technology for the banking sector. We are very customer centric and understand the specific needs of our client and work flow that would fit them best. We also understand their values and vision and help them attain the same with great customer service. 
                  <br><br>
                  Imperium's venture into cloud has made VoIP and data related to it very secure with local data center in the region which makes our solution legal and extensive. 
               </p>
            </div>
            <div class="col-md-6">
               <div class="telvideo">
                  <img src="{{ asset('image/banking.jpg') }}" alt="Banking">
               </div>
            </div>
         </div>

         <div class="row">
           <div class="col-md-12">
             <img src="{{ asset('image/products/core_poducts/Banking_Imperium_Products.png') }}" alt="Banking">
           </div>
         </div>
      </div>
   </div>
</section>
@endsection


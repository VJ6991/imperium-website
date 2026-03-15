

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
            <h1>Insurance </h1>
            <div class="breadcroumb">
               <a href="{{ url('') }}">Home</a> &gt;
               <span class="current">Insurance</span>
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
                   <h2>Insurance</h2>
                </div>
             </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <p>
                  "The Insurance sector can be a huge enabler, historically, it’s been able to induce changes in behavior much more effectively than government has" - Frank Kullofo.
                  <br><br> 
                  A fast growing sector worldwide, the insurance firms takes up the duty to defend its customers and protect them in difficult situations. The communication center for an insurance firm will be buzzing with call for queries, question as the customer wants to exchange all necessary information about their claim, protection policy. Building trust is the primary aim of the sector. 
                  <br><br> 
                  Imperium has serviced major clients in finance sector to fortify their functionality and build trust. It’s by enhancing customer service availability and accuracy.   
               </p>
            </div>
            <div class="col-md-6">
               <div class="telvideo">
                  <img src="{{ asset('image/insurance.jpg') }}" alt="Insurance" height="450">
               </div>
            </div>
         </div>

         <div class="row">
           <div class="col-md-12">
             <img src="{{ asset('image/products/core_poducts/Insurance_Imperium_Products.png') }}" alt="Insurance">
           </div>
         </div>
      </div>
   </div>
</section>
@endsection




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
            <h1>Finance</h1>
            <div class="breadcroumb">
               <a href="{{ url('') }}">Home</a> &gt;
               <span class="current">Finance</span>
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
                   <h2>Finance</h2>
                </div>
             </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <p>
                  "The Financial services industry is a ward of the state".
                  <br><br> 
                  Financial services is a broad field that included activities such as risk management, debt collection, business reports and financial analysis, commercial investigations, debt collection and legal support. 
                  <br><br> 
                  With changes in regulation, rise in technology as well as demographic changes, the finance sector is bent on bringing transparency and becoming increasingly focused on customers. 
                  <br><br> 
                  Imperium offers a suite of tools which are customized for the finance sector. With years of technical expertise, we deliver Avaya solutions along with integration with 3rd party applications. We can build third party applications which as secure and intact with latest technology. Imperium has delivered an advanced debt collection system and reporting tools.  
               </p>
            </div>
            <div class="col-md-6">
               <div class="telvideo">
                  <img src="{{ asset('image/finance.jpg') }}" alt="Finance">
               </div>
            </div>
         </div>

         <div class="row">
           <div class="col-md-12">
             <img src="{{ asset('image/products/core_poducts/Finance_Imperium_Products.png') }}" alt="Finance">
           </div>
         </div>
      </div>
   </div>
</section>
@endsection


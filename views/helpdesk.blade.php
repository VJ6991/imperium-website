

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
            <h1>Make Help Desk</h1>
            <div class="breadcroumb">
               <a href="./">Home</a> &gt;
               <span class="current">Make Help Desk</span>
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
                   <h2>Imperium Help Desk Module</h2>
                </div>
             </div>
         </div>
      
         <div class="row">
            <div class="col-md-6">
               <p>
                  Avaya IP Office Call center suite with Imperium Service desk module offers the best fit and cost-effective solution for the Customer service industry enabling them to provide effective call resolution for their customers. 
               </p>
            </div>
            <div class="col-md-6">
               <div class="telvideo">
                  <img src="{{ asset('image/cs1.jpg') }}" alt="Debt Collection">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection


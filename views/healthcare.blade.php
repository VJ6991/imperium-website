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
            <h1>{{ Helper::cms('healthcare', 'banner_title', 'Health Care') }}</h1>
            <div class="breadcroumb">
               <a href="./">Home</a> &gt;
               <span class="current">{{ Helper::cms('healthcare', 'banner_title', 'Health Care') }}</span>
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
                   <h2>{{ Helper::cms('healthcare', 'section_title', 'Imperium Telemedicine & Healthcare Solutions') }}</h2>
                </div>
             </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <p>
                  {!! nl2br(Helper::cms('healthcare', 'description', 'Communication is an essential element of healthcare - Charles Grant')) !!}
               </p>
            </div>
            <div class="col-md-6">
               <div class="telvideo">
                  <img src="{{ asset(Helper::cms('healthcare', 'image', 'image/healthcare.jpg')) }}" alt="Health Care">
               </div>
            </div>
         </div>

         @php $extra_img = Helper::cms('healthcare', 'extra_image'); @endphp
         @if($extra_img)
         <div class="row">
           <div class="col-md-12">
             <img src="{{ asset($extra_img) }}" alt="Health Care Products">
           </div>
         </div>
         @endif
      </div>
   </div>
</section>
@endsection




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
            <h1>{{ Helper::cms('businesscenter', 'banner_title', 'Business Center') }}</h1>
            <div class="breadcroumb">
               <a href="./">Home</a> &gt;
               <span class="current">{{ Helper::cms('businesscenter', 'banner_title', 'Business Center') }}</span>
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
                   <h2>{{ Helper::cms('businesscenter', 'section_title', 'Imperium: Converged Network Services') }}</h2>
                </div>
             </div>
         </div>

         <div class="row">
            <div class="col-md-6">
               <p>
                  {!! nl2br(Helper::cms('businesscenter', 'description', "Convergent Networks supporting voice, video and data are a standard in today's competitive busi-ness world and customers are looking for smarter systems to manage multi-layered networks.")) !!}
               </p>
            </div>
            <div class="col-md-6">
               <div class="telvideo">
                  <img src="{{ asset(Helper::cms('businesscenter', 'image', 'image/Office-960x720.jpg')) }}" alt="Business Center">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection


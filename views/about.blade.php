@extends('layouts.app')
@section('meta')
{!!Helper::setMetaTags($meta)!!}
@stop
@section('content')
<!-- Inner Page Header section start here -->
<div class="lite-breadcroumb-area innerbanner">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1>{{ Helper::cms('about', 'main_heading', 'We Help You Connect Your Business') }}</h1>
            <div class="breadcroumb">
               <a href="{{ url('') }}">Home</a> &gt;
                  <span class="current">{{ Seo::name('about') }}</span>
            </div>
         </div>
      </div>
   </div>
</div>
<section id="about" class="service-area section-big section-padding">
   <div class="container">
      <div class="topcontent">
         <div class="row">
            <div class="col-md-7">
               <h2>Who is Imperium Software Technologies?</h2>
               <p>
                  {!! nl2br(htmlspecialchars(Helper::cms('about', 'content_paragraph_1', 'Founded in 2005, Imperium Software Technologies is a CTI and contact center software provider.'))) !!}
               </p>
            </div>
            <div class="col-md-5">
               <div class="telvideo">
                  <img src="{{ asset(Helper::cms('about', 'customer_service_image', 'image/cms/1773381706_call.jpg')) }}" alt="Imperium Software Technologies customer service and contact center team">
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="service-area section-big section-padding">
      <div class="container">
         <div class="topcontent mission">
            <div class="row">
               <div class="col-md-7">
                  <h2>{{ Helper::cms('about', 'vision_heading', 'Our Vision') }}</h2>
                  <p>
                     {!! nl2br(htmlspecialchars(Helper::cms('about', 'vision_paragraph', "Imperium's vision is to expand its reach as a prime strategic partner creating telecommunication solutions."))) !!}
                  </p>
               </div>
               <div class="col-md-5">
                  <div class="telvideo">
                     <img src="{{ asset(Helper::cms('about', 'vision_image', 'image/mission.jpg')) }}" alt="Imperium Software Technologies vision — becoming an agile cloud CX provider in the UAE and GCC">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="section-padding">
      <div class="container">
         @include('layouts.components.aeo', ['slug' => 'about'])
      </div>
   </section>
@endsection

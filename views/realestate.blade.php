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
            <h1>{{ Helper::cms('realestate', 'banner_title', 'Real Estate') }}</h1>
            <div class="breadcroumb">
               <a href="{{ url('') }}">Home</a> &gt;
               <span class="current">{{ Helper::cms('realestate', 'banner_title', 'Real Estate') }}</span>
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
                   <h2>{{ Helper::cms('realestate', 'section_title', 'Real Estate') }}</h2>
                </div>
             </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <p>
                  {!! nl2br(Helper::cms('realestate', 'description', '"Don\'t wait to buy real estate, buy real estate and wait" - Will Roger.')) !!}
               </p>
            </div>
            <div class="col-md-6">
               <div class="telvideo">
                  <img src="{{ asset(Helper::cms('realestate', 'image', 'image/real-estate.jpg')) }}" alt="real estate">
               </div>
            </div>
         </div>

         @php $extra_img = Helper::cms('realestate', 'extra_image'); @endphp
         @if($extra_img)
         <div class="row">
           <div class="col-md-12">
             <img src="{{ asset($extra_img) }}" alt="Real Estate Products">
           </div>
         </div>
         @endif
      </div>
   </div>
</section>
@endsection


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
            <h1>{{ Helper::cms('banking', 'banner_title', 'Banking') }}</h1>
            <div class="breadcroumb">
               <a href="{{ url('') }}">Home</a> &gt;
               <span class="current">{{ Helper::cms('banking', 'banner_title', 'Banking') }}</span>
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
                   <h2>{{ Helper::cms('banking', 'section_title', 'Banking') }}</h2>
                </div>
             </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <p>
                  {!! nl2br(Helper::cms('banking', 'description', '"In Banking or insurance trust is the only thing that you can sell" - Patrix Dixon.')) !!}
               </p>
            </div>
            <div class="col-md-6">
               <div class="telvideo">
                  <img src="{{ asset(Helper::cms('banking', 'image', 'image/banking.jpg')) }}" alt="Banking">
               </div>
            </div>
         </div>

         @php $extra_img = Helper::cms('banking', 'extra_image'); @endphp
         @if($extra_img)
         <div class="row">
           <div class="col-md-12">
             <img src="{{ asset($extra_img) }}" alt="Banking Products">
           </div>
         </div>
         @endif
      </div>
   </div>
</section>
@endsection

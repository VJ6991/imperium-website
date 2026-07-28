

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
            <h1>{{ Helper::cms('logistics', 'banner_title', 'Logistics') }}</h1>
            <div class="breadcroumb">
               <a href="{{ url('') }}">Home</a> &gt;
               <span class="current">{{ Helper::cms('logistics', 'banner_title', 'Logistics') }}</span>
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
                   <h2>{{ Helper::cms('logistics', 'section_title', 'Logistics') }}</h2>
                </div>
             </div>
         </div>
         
         <div class="row">
            <div class="col-md-6">
               <p>
                  {!! nl2br(Helper::cms('logistics', 'description', '"The line between disorder and order lies in Logistics" - Sun Tzu.')) !!}
               </p>
            </div>
            <div class="col-md-6">
               <div class="telvideo">
                  <img src="{{ asset(Helper::cms('logistics', 'image', 'image/logistic_new.jpg')) }}"  alt="Logistics">
               </div>
            </div>
         </div>

         @php $extra_img = Helper::cms('logistics', 'extra_image'); @endphp
         @if($extra_img)
         <div class="row">
           <div class="col-md-12">
             <img src="{{ asset($extra_img) }}" alt="Logistics Products">
           </div>
         </div>
         @endif
      </div>
   </div>
</section>
@endsection


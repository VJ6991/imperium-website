

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
            <h1>{{ Helper::cms('ecommerce', 'banner_title', 'E-Commerce') }}</h1>
            <div class="breadcroumb">
               <a href="{{ url('') }}">Home</a> &gt;
               <span class="current">{{ Helper::cms('ecommerce', 'banner_title', 'E-Commerce') }}</span>
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
                   <h2>{{ Helper::cms('ecommerce', 'section_title', 'E-Commerce') }}</h2>
                </div>
             </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <p>
                  {!! nl2br(Helper::cms('ecommerce', 'description', '"If your business is not on the internet, then your business will be out of business" - Bill Gates.')) !!}
               </p>
            </div>
            <div class="col-md-6">
               <div class="telvideo">
                  <img src="{{ asset(Helper::cms('ecommerce', 'image', 'image/ecommerce.jpg')) }}" alt="Ecommerce">
               </div>
            </div>
         </div>

         @php $extra_img = Helper::cms('ecommerce', 'extra_image'); @endphp
         @if($extra_img)
         <div class="row">
           <div class="col-md-12">
             <img src="{{ asset($extra_img) }}" alt="Ecommerce Products">
           </div>
         </div>
         @endif
      </div>
   </div>
</section>
@endsection


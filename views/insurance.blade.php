@extends('layouts.app')
@section('meta')
{!!Helper::setMetaTags($meta)!!}
@stop
@section('content')
<style>
  /* The insurance hero image is portrait (1051x1576); in a half-width column it
     renders very tall, leaving a big empty gap beside the short description and
     pushing the products graphic far down. Cap its height and vertically centre
     the description so the row stays compact. */
  #about .service-two-col { display: flex; flex-wrap: wrap; align-items: center; }
  #about .telvideo img { width: 100%; height: 420px; object-fit: cover; object-position: center; display: block; }
  @media (max-width: 767px) {
    #about .service-two-col { display: block; }
    #about .telvideo img { height: auto; }
  }
</style>
<!-- Inner Page Header serction start here -->
<div class="lite-breadcroumb-area innerbanner">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1>{{ Helper::cms('insurance', 'banner_title', 'Insurance') }}</h1>
            <div class="breadcroumb">
               <a href="{{ url('') }}">Home</a> &gt;
                  <a href="{{ url('industry-influence') }}">Verticals</a> &gt;
                  <span class="current">{{ Seo::name('insurance') }}</span>
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
                   <h2>{{ Helper::cms('insurance', 'section_title', 'Insurance') }}</h2>
                </div>
             </div>
         </div>
         <div class="row service-two-col">
            <div class="col-md-6">
               <p>
                  {!! nl2br(Helper::cms('insurance', 'description', '"The Insurance sector can be a huge enabler, historically, it’s been able to induce changes in behavior much more effectively than government has" - Frank Kullofo.')) !!}
               </p>
            </div>
            <div class="col-md-6">
               <div class="telvideo">
                  <img src="{{ asset(Helper::cms('insurance', 'image', 'image/insurance.jpg')) }}" alt="Insurance">
               </div>
            </div>
         </div>

         @php $extra_img = Helper::cms('insurance', 'extra_image'); @endphp
         @if($extra_img)
         <div class="row">
           <div class="col-md-12">
             <img src="{{ asset($extra_img) }}" alt="Insurance Products">
           </div>
         </div>
         @endif
      </div>
   </div>
</section>
@endsection

@extends('layouts.app')
@section('meta')
{!!Helper::setMetaTags($meta)!!}
@stop
@section('content')

<div class="lite-breadcroumb-area innerbanner" id="solution">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1>Industries We Serve</h1>
            <div class="breadcroumb">
               <a href="{{url('./')}}">Home</a> &gt;
               <span class="current">Industries We Serve</span>
            </div>
         </div>
      </div>
   </div>
</div>
<section id="about" class="service-area section-big section-padding service">
   <div class="container">
      <div class="topcontent">
         <div class="row">
             <div class="col-md-12 text-center">
                <div class="section-title">
                   <h2>Vertical based customized ICT solutions for a winning edge </h2>
                </div>
             </div>
         </div>
         <div class="solutionsec detailspage">
            <div class="row d-flex flex-wrap" style="display: flex; flex-wrap: wrap;">
                @foreach($verticals as $v)
                <div class="col-md-4 col-sm-6 col-xs-12 d-flex" style="display: flex; margin-bottom: 30px;">
                   <div class="service-box match-height w-100" style="display: flex; flex-direction: column; width: 100%;">
                      <a href="{{ url($v['link']) }}"  class="learn-more-link" style="flex-grow: 1; display: flex; flex-direction: column;">
                         <div class="thumb">
                            <div class="serviceimg">
                               <div class="image">
                                  <img src="{{ asset($v['image']) }}" alt="{{ $v['title'] }}" style="width: 100%; height: 200px; object-fit: cover;">
                               </div>
                            </div>
                         </div>
                         <div class="servicecont" style="flex-grow: 1; display: flex; flex-direction: column;">
                            <h3 style="min-height: 50px;">{{ $v['title'] }}</h3>
                            <p class="match-height" style="flex-grow: 1;">
                                {{ Helper::limit_words($v['description'], 30) }}
                            </p>
                            <div style="margin-top: auto; padding-top: 10px;">
                                More 
                                <i class="fa fa-arrow-right" aria-hidden="true"></i> 
                            </div>
                         </div>
                      </a>
                   </div>
                </div>
                @endforeach
            </div>
         </div>
   </div>


            </div>
         </div>
      </div>
   </div>
</section>
@endsection


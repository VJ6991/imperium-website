

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
            <h1>Education Sector</h1>
            <div class="breadcroumb">
               <a href="{{ url('') }}">Home</a> &gt;
               <span class="current">Education Sector</span>
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
                   <h2>Education</h2>
                </div>
             </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <p>
                  "Learning is experience, everything else is just information" - Albert Einstein
                  <br><br>
                  It is at Educational institutes that this principle find home. 
                  Across the world, school, colleges, universities are considered prestigious hubs where learning of great values and knowledge takes place. 
                  <br><br>
                  That is why, Imperium strives to empower the education sector with the best of communication facilities that shall help them reach out and become accessible to everyone. Moreover we want them to host the best of technological advancements of the era so that sector offers multi-channel experiences and the ease of communication to their students and patrons.
                  <br><br> 
                  ICT solutions forms the backbone of a huge organization such as a school or university where priority is to connect a huge community seamlessly. 
               </p>
            </div>
            <div class="col-md-6">
               <div class="telvideo">
                  <img src="{{ asset('image/education.jpg') }}" alt="Education">
               </div>
            </div>
         </div>

         <div class="row">
           <div class="col-md-12">
             <img src="{{ asset('image/products/core_poducts/Education_Imperium_Products.png') }}" alt="Education">
           </div>
         </div>
      </div>
   </div>
</section>
@endsection


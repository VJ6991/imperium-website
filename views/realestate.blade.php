

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
            <h1>Real Estate</h1>
            <div class="breadcroumb">
               <a href="{{ url('') }}">Home</a> &gt;
               <span class="current">Real Estate</span>
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
                   <h2>Real Estate</h2>
                </div>
             </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <p>
                  "Don't wait to buy real estate, buy real estate and wait" - Will Roger.
                  <br><br>
                  Customer service is very crucial in Real Estate. Customers are looking for more information about the investment they plan to make and they want to be sure they get the best deal for the price. 
                  <br><br>
                  In order to win their trust, real estate sector needed to be back on a sturdy and reliable communication center.
                  <br><br>
                  Imperium offers real-time and multichannel communication solutions to real estate brokers. These solutions from Avaya are sturdy and all-rounder in terms of skill-based routing to the agent, call transfer, recording, social media and unified communication tools. Imperium compliments a real estate business center with applications for the ease of customers and agents. 
                  <br><br>
                  These include customer's information on a pop up when a call comes. Reaching customers instantly via social media, voice, video, instant chat.  
                  <br><br>                  
                  This experience for customers helps them form a very good relationship over telecom and be sure of their purchase.
               </p>
            </div>
            <div class="col-md-6">
               <div class="telvideo">
                  <img src="{{ asset('image/real-estate.jpg') }}" alt="real estate">
               </div>
            </div>
         </div>

         <div class="row">
           <div class="col-md-12">
             <img src="{{ asset('image/products/core_poducts/Real-Estate_Imperium_Products.png') }}" alt="Real Estate">
           </div>
         </div>
      </div>
   </div>
</section>
@endsection


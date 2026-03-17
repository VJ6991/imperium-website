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
                 <h1>{{ Helper::cms('debtcollection', 'banner_title', 'Debt Collection System in Dubai') }}</h1>
                 <div class="breadcroumb">
                   <a href="{{ url('') }}">Home</a> &gt;
                   <span class="current">{{ Helper::cms('debtcollection', 'banner_title', 'Debt Collection System') }}</span>
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
                   <h2>{{ Helper::cms('debtcollection', 'section_title', 'Imperium Debt Management Services') }}</h2>
                </div>
             </div>
          </div>
      
         <div class="row">
            <div class="col-md-6">
               <p>
                  {!! nl2br(Helper::cms('debtcollection', 'description', 'Providing Customer information and tracking history is critical for a debt collector where the interactions are legally bound. Avaya IP Office with Imperium Debt collection provides reliable and secured environment for Debt collection agencies to manage their day-today operations and reporting.')) !!}
               </p>
            </div>
            <div class="col-md-6">
               <div class="telvideo">
                  <img src="{{ asset(Helper::cms('debtcollection', 'image', 'image/1338634_19af.jpg')) }}" alt="Debt Collection">
               </div>
            </div>

            <div class="col-md-12 overview">
               <ul>
                  @php
                    $features = Helper::cms('debtcollection', 'features', '');
                    $features_array = array_filter(explode("\n", $features));
                  @endphp
                  @foreach($features_array as $feature)
                    <li>{{ ltrim(trim($feature), '-') }}</li>
                  @endforeach
                  @if(empty($features_array))
                  <li>
                     Auto upload of Banking data inputs which can be defined separate for each Bank/organization
                  </li>
                  <li>
                     Secure, modular and vertical hierarchy data management ensure each collection team data can be managed separately as per financial institutional requirements
                  </li>
                  <li>
                     Easy and custom format excel reporting for data-exchange with Banks to provide periodical reports on performance and communications
                  </li>
                  <li>
                     Screen-pop with complete financial history and interaction history provides the necessary information to enhance their collection portfolio and make efficient progress in tracking defaulted customers
                  </li>
                  @endif
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection


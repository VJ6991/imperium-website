@extends('layouts.app')

@section('meta')
	{!!Helper::setMetaTags($meta)!!}
@stop

@section('content')

	<div class="inner-page-header">
            <div class="container">
                <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <div class="header-page-title">
                             <h2>1031 RESOURCES</h2>
                         </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <div class="header-page-locator">
                             <ul>
                                 <li><a href="{{ url('') }}">Home /</a> 1031 Resources</li>
                             </ul>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Inner Page Header serction end here -->
        <!-- About Page content area start here -->
        <div class="about-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="about-title-area"></P>
                        <li>
                            <a href="{{ url('resources/guide') }}">1031 Guide</a>
                        </li>
                        <li><a href="{{ url('resources/faq') }}">Did You Know? [FAQ]</a></li>
                        <li><a href="{{ url('resources/calculator') }}">45/180 Day Calculator</a></li>
                        <li><a href="{{ url('resources/gainCalculator') }}">Gain Calculator</a></li>
                         <li><a href="{{ url('resources/roiCalculator') }}">ROI Calculator</a></li>
                          <li><a href="{{ url('resources/vesting') }}">Vesting Wizard</a></li>
                            <p>  </p>
                        </div>
                    </div>
                </div>
                <div class="row feature-image">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center acurate">
                        <div class="about-featured-image">
                    
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 acurate">
                        <div class="about-main-content">
                       
                        </div>
                    </div>
                </div>
               
                </div>
            </div>
        </div> <HR>
@endsection
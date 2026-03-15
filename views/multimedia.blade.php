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
                             <h2>1031 MULTIMEDIA</h2>
                         </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <div class="header-page-locator">
                             <ul>
                                 <li><a href="{{ url('') }}">Home /</a> 1031 Multimedia</li>
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
                            <li><a href="{{ url('videos/whyExchange') }}">Why Exchange?</a></li>
                            <li><a href="{{ url('videos/equity') }}">Equity and Gain</a></li>
                            <li><a href="{{ url('videos/likekind') }}">Like Kind Defined</a></li>
                            <li><a href="{{ url('videos/history') }}">1031 History</a></li>
							 <li><a href="{{ url('videos/logistics') }}">1031 Logistics</a></li>
							 <li><a href="{{ url('videos/dst') }}">DSTs</a></li>
                            <li><a href="{{ url('videos/deferred') }}">Deferred 1031</a></li>
                            <li><a href="{{ url('videos/reverse') }}">Reverse 1031</a></li>
                            <li><a href="{{ url('videos/improvement') }}">Improvement 1031</a></li>
							 <li><a href="{{ url('videos/personalproperty') }}">Personal Property</a></li>
                            <li><a href="{{ url('videos/idrules') }}">ID Rules</a></li>
                            <li><a href="{{ url('videos/idissues') }}">ID Issues</a></li>
                            <li><a href="{{ url('videos/timeconstraints') }}">1031 Timing</a></li>
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
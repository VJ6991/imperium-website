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
                             <h2>CAPITAL GAIN CALCULATOR</h2>
                         </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <div class="header-page-locator">
                             <ul>
                                 <li><a href="{{ url('' )}}">Home /</a> Gain Calculator</li>
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
                       
<section class="home section grey-section section-padding-bottom section-home-padding-top">
		
			<div class="container">
				<div class="sixteen columns">
					<div class="section-title">
						
					</div>
				</div>
				


                <style>
                          .calculator {
                            width: 100%;
                            border: none;
                            overflow: hidden;
                          }
                        </style>
                        <object data="../1031/index.html" height="400" class="calculator">
                          <embed src="../1031/index.html" height="400" class="calculator"></embed>Error: Embedded data could not be displayed.
                        </object>

		</section>	
<HR>	
                    </div>
                </div>
            </div>
        </section> 


@endsection
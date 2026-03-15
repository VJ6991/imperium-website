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
                            <h2>REVERSE EXCHANGES</h2>
                            <p>  </p>
                        </div>
                    </div>
                </div>
                <div class="row feature-image">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center acurate">
                        <div class="about-featured-image">
                         <img src="{{asset('img/5.jpg')}}" width="400"  alt="" title="" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 acurate">
                        <div class="about-main-content">
                           <CENTER><iframe src="https://player.vimeo.com/video/225331651" width="400" height="270" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							</CENTER>
                        </div>
                    </div>
                </div>
               
                </div>
            </div>
        </div> <HR>

@endsection
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
                <h1>404</h1>
                <div class="breadcroumb">
                    <a href="{{ url('') }}">Home</a> &gt;
                    <span class="current">404</span>
                </div>
            </div>
        </div>
    </div>
</div>

	<!-- MAIN CONTENT START HERE -->
	<section class="service-area section-big section-padding">

		<!-- ABOUT SECTION -->
		<div id="about" class="padd-tb-70x90 bg-gray-light">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<img class="" src="{{asset('image/404-error-page.png')}}" alt="404">
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
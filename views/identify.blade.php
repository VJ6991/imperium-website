@extends('layouts.app')

@section('meta')
	{!!Helper::setMetaTags($meta)!!}
@stop

@section('content')

        <!-- Inner Page Header serction start here -->
        <div class="inner-page-header">
            <div class="container">
                <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <div class="header-page-title">
                             <h2>ONLINE IDENTIFICATION</h2>
                         </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <div class="header-page-locator">
                             <ul>
                                 <li><a href="index.html">Home /</a> Online ID</li>
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
                    body { text-align: left; }
                    li { list-style: inherit; }
                    .input-box { margin-top: 8px; max-width: 400px; }
                    .wizard-input-cont button, .wizard-input-cont button:disabled {
                        background-color: #7cc34f !important;
                        text-shadow: 0 1px #6a9267;
                        border-color: #6a9267 !important;
                        color: #fff;
                        -webkit-transition: background-color 500ms ease-out;
                        -moz-transition: background-color 500ms ease-out;
                        -o-transition: background-color 500ms ease-out;
                        transition: background-color 500ms ease-out;
                    }
                    .wizard-input-cont button:hover {
                        background-color: #76dc36;
                    }
                    .wizard-input-cont button:focus {
                        color: #fff;
                    }
                    .wizard-input-cont textarea:focus, .wizard-input-cont input:focus {
                        color: #222;
                    }
                </style>
                <div class="container wizard-input-cont" style="padding-bottom: 100px;">
                    <div class="row">
                        <div class="col-md-12">
						
                            <h2>THE ONLINE IDENTIFICATION PROCESS </h2>
							
							
                            <p>Welcome to the online identification process. We built this online approach as a convenience for Exchangers who are short on time or have a limited ability or access to get their property identification submitted through normal channels
                                like mail or overnight delivery. At this point you probably realize that the most difficult part of any 1031 Exchange is locating, securing and identifying your candidate or target properties. This is because the 45 day time period
                                moves quickly and often it is just difficult to locate a property or properties which will fit your need. </p>
                        </P>
						
						
						   <div class="row" style="margin-top: 25px">
                        <div class="col-md-12">
                            <h4>Our online identification tool </h4>
                        </div>
                        <div class="col-md-6">
                            <p>Fill out the nearby form so we can send you a link to the online identification tool, together with a unique code. You will need this code in the next step to serve as the equivalent of your digital signature. So, submit the form and let's
                                get started with your identification process. </p>
                        </div>

                        <div id="identification-request-form" class="col-md-6">



                            <!-- <form data-toggle="validator" role="form" class="bootstrap-form-with-validation"> -->
                                    <form name="onlineid" id="onlineid">
                                            <div class="alert hidden input-box" id="onlineid-message"></div>

                                <div class="form-group input-box">
                                  <input class="form-control" type="text" name="name"  data-validation="required"  placeholder="Name" required>
                                </div>

                                  <div class="form-group input-box">
                                  <input class="form-control" type="email"  data-validation="required"  name="email" 
                                  placeholder="Email" required>

                                </div>
                                <div class="form-group text-center input-box">
                                    <button class="btn btn-primary theme-btn" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 30px; margin-bottom: 30px;">
                        <div class="col-md-12">
                          <iframe src="https://player.vimeo.com/video/225461555" width="640" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>


                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h5>So let's recap identification a little bit, shall we?</h5>
                            <ul>
                                <li>First, you must identify within 45 days of the closing of your exchange or Relinquished Property </li>
                                <li>Your identification must be in writing and submitted in a timely manner </li>
                                <li>Most Exchangers identify to their facilitator, but it is possible to identify to an appropriate third party and the rules for those parties are listed elsewhere under identification rules </li>
                                <li>When you identify you must use one of two identification rules or one exception </li>
                                <li>The first rule is the three property rule in which you can identify up to three properties of any value </li>
                                <li>The second rule is the 200 percent rule. You can identify more than three, but the total aggregate value of the property you identify cannot exceed 200 percent of the property you sold </li>
                                <li>The exception is known as the 95 percent exception. Meaning, you can identify more than three properties, and properties valued at more than 200 percent of the property you sold, but when you do, you must acquire at least 95 percent
                                    of the total value of property identified. So it might as well be the 100 percent exception, correct? </li>
                                <li>Whatever property you acquire must be a property that you previously identified </li>
                                <li>If you fail to identify within 45 days, your exchange proceeds will be returned to you on the 46th day </li>
                                <li>If you identify within the 45 days period, but fail to acquire a Replacement Property, your exchange funds will be returned to you after your 180th day </li>
                                <li>If you are still within your 45 day identification period, you can revoke a previous identification and re-identify new property </li>
                            </ul>
                        </div>
                    </div>
                 
                    </div>
                </div>
		</section>	
<HR>
            </div>
        </div>
    </div>
</section> 

@endsection
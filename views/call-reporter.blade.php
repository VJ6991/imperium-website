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
                    <h1>Imperium Call Reporter </h1>
                    <br>
                    <!-- <a href="javascript:;" data-toggle="modal" data-target="#modal-download-brochure-2" class="filled-btn">Download Brochure</a> -->
                </div>
            </div>
        </div>
    </div>

    <section id="about" class="service-area section-big section-padding">
        <div class="container">
            <div class="topcontent" style="padding-top:0">
                <div class="row">
                    <div class="col-md-12">



                    <!-- <h2 style=" margin-bottom: 6px;color: #ef7d01;">$28 Billion</h2>
                    <p style="font-size: 20px;">Is an estimated loss telecom industries faced in 2018 due to Toll Fraud.</p>
                        <br/>
                        <p><b style=" font-weight: 400; font-size: 23px;">Problems Your Business Might Face</b></p>
                    </div>
                    <div class="col-md-12">
                        <p>
                        An all-powerful web based call reporting system designed to discover toll fraud attackers and provide you an intricate analytical overview of your business telephony systems.
                        </p> -->


<!-- <p> $28 Billion is an estimated loss telecom industries faced in 2018 due to Toll Fraud. </p> -->

<h2 class="callreporte"> An all-powerful web based call reporting system designed to discover toll fraud attackers and provide you an intricate analytical overview of your business telephony systems. </h2>

<h2>  Problems Your Business Might Face</h2>





                        <div style="display: -ms-flexbox;display: flex;-ms-flex-wrap: wrap; flex-wrap: wrap;">	
	   		<div class="inner-box">
                   <img src="{{ asset('image/Data-Tracking.png') }}" class="title-pic">	
	   			<h6>Data Tracking</h6>
	   			<p>Businesses need to monitor its telephony data plans for controlled budgeting and to minimize any foreseeable loses. Having call transparency data over missed calls is very important for a business.</p>
	   		</div>	
	   		<div class="inner-box">
                   <img src="{{ asset('image/UnfilteredCalls.png') }}"
                    class="title-pic">	
	   			<h6>Unfiltered Calls</h6>
	   			<p>Businesses might fall a victim of heavy pipeline of calls to attend, in such situations it is imperative to have a filtration system to provide you a segregation of unanswered and outbound calls.</p>
	   		</div>	
	   		<div class="inner-box">
                   <img src="{{ asset('image/Toll-Fraud.png')}}" class="title-pic">	
	   			<h6>Toll Fraud</h6>
	   			<p>If you are building a voice application, then you could be the target of toll fraud, Toll fraud attacks happen in a variety of ways, majority exploit a compromised VoIP server to generate large numbers of calls to high calling rate markets.</p>
	   		</div>	
	   		<div class="inner-box">
                   <img  src="{{ asset('image/Providing-Analysis.png')}}" class="title-pic">	
	   			<h6>Providing Analysis</h6>
	   			<p>It is important for any business to understand the progress of their call activities with the help of analytics to benchmark and track their productivity.</p>
	   		</div>	
	   </div>










                        <div class=" overview newview">
                            <h3>
                            QUICK REMEDIATION: 
                            </h3>
                            <ul>
                                <li>
                                Provides your business analysis of the number of missed calls and helps provide complete call transparency and helps you set a budget for cost efficiency.
                                </li>
                                <li>
                                Real time call log archival reports, quick search for call logs and filtration to empower effective productivity for call agents.
                                </li>
                                <li>
                                Imperium Call Reporter has a powerful Toll Fraud system to detect threats and attackers and alerts the system against them.
                                </li>
                                <li>
                                Generates customized reports for productivity analysis for each department along with ad hoc and scheduled analysis results.
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-md-5">
                        <img src="{{ asset('image/products/social-media.png') }}" alt="social media">
                    </div> -->
                    
                        <!-- <img class="pull-right img-responsive" src="{{ asset('image/products/cm.jpg') }}"  alt="Imperium"> -->

                </div>
            </div>
        </div>
    </section>
@endsection


<div class="modal fade " id="modal-download-brochure-2" tabindex="-1" role="dialog">
    <div class="modal-dialog sm" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-body">
                <!--contact form-->
                <div class="contact-form text-center">
                    <header class="section-header">
                        <img src="{{asset('image/support-icon.svg')}}"  alt="support icon" style="width: 100px;">
                        <h2>Download Flyer</h2>
                    </header>
                    <form name="downloadBrochure" id="downloadBrochure" class="cta-form cta-light">
                        <div class="alert hidden" id="brochure-message"></div>
                        <input type="hidden" name="pdfFile" value="Social-media.pdf">
                        <div class="form-group">
                            <input type="text" placeholder="Name *" class="form-control" name="firstName" data-validation="required" required/>
                        </div>
                        <div class="form-group">
                            <input type="email" name="emailId" class="form-control" placeholder="Email *" data-validation="email" required />
                        </div>
                        <div class="form-group text-center">
                        <button type="submit" class="btn theme-btn read-more-btn">SUBMIT</button>
                        </div>
                    </form>
                </div>
                <!--contact form end-->
            </div>
        </div>
    </div>
</div>
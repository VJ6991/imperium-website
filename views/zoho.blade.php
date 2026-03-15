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
                    <h1>Imperium ZOHO Connector</h1>
                    <br>
                    <a href="javascript:;" data-toggle="modal" data-target="#modal-download-brochure-2" class="filled-btn">Download Brochure</a>
                </div>
            </div>
        </div>
    </div>


    <section id="about" class="service-area section-big section-padding">
        <div class="container">
            <div class="topcontent">
                <div class="row">
                    <div class="col-md-12">
                         <h2>AN IMPERIUM SOLUTION FOR ZOHO CRM</h2>
                    </div>
                    <div class="col-md-7">
                        <p>
                          Take your business to a whole new level of customer engagement with personalized customer service on the go. Imperium bring you Voice as Service for your ZOHO CRM.
                          <br><br>
                          Imperium's Zoho CRM Connector is a supreme CTI solution designed specifically for ZOHO CRM to be integrated with Avaya Communication systems.  
                        </p>
                        <h2>
                            A POWERFUL INTEGRATION SOLUTION NOW AVAILABLE ON ZOHO MARKETPLACE
                        </h2>
                        <p>
                            A well designed system that allows you to make voice calls from within your CRM platform, the Imperium ZOHO CRM connector is built with strong APIs. A unified integrator that allows you to bank on the power of your ZOHO CRM.<br><br>
                            Access your ZOHO CRM and Avaya Communication systems on a single interface and get multi-channel capable with voice, video and chat available on desktop, mobile and universal platforms. 
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('image/products/ZOHO.jpg') }}" alt="ZOHO">
                    </div>
                    
                    <div class="col-md-12 overview">
                        <h3>
                           IMPERIUM ZOHO CONNECTOR IS UNIQUE
                        </h3>
                        <ul>
                            <li>
                             Built on latest web RTC platform
                            </li>
                            <li>
                              Enables real time voice and video communication on a softphone
                            </li>
                            <li>
                               Available for Mobile CTI client
                            </li>
                            <li>
                              Captures and syncs business insights and call logging with ZOHO CRM
                            </li>
                            <li>
                               Screen pop-up with customer data and call notifications with in CRM
                            </li>
                            <li>
                               Unified application that allows seamless access to data and call annotation
                            </li>
                            <li>
                                Supports integration with thin client on web browser
                            </li>
                            <li>
                                Offers desktop notification for incoming and outgoing calls, detailed screen pop up with historic data of the customer on call
                            </li>
                            <li>
                                Provides quick call managing options such as call answering, hold, retrieve held call, transfer call to another contact or telephone number, view call history and list of missed calls
                            </li>
                        </ul>
                    </div>

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
                        <input type="hidden" name="pdfFile" value="ZOHO.pdf">
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
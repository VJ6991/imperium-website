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
                          Covert your web traffic into immediate footfall and sales using the robust Inaipi Click-to-Call service on Cloud. It's a functional tool that opens up multiple channels on your website for customers to connect to your helpdesk on the go, on your website.<br><br>
                          The Inaipi Click-to-Call service built on Avaya WebRTC links your VoIP to your website and quickly enables browser-based real time communication via video, voice and web conferencing capabilities.
                          <br><br>
                          Your customers can call you with a click and enquire, place orders or ask for support without the hassle of dialing a new number. These calls would land on an agent desk who can answer the phone on a regular telephony or even a softphone.  
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('image/products/INAIPI_Click-to-Call_2.jpg') }}" alt="Click to call">
                    </div>
                    
                    <div class="col-md-12 overview">
                        <h3>
                           BENEFITS
                        </h3>
                        <ul>
                            <li>
                             Get multiple channels without purchasing additional telephone lines
                            </li>
                            <li>
                              On web browser and independent of any software downloads or Plugins for callers 
                            </li>
                            <li>
                               AvVoice-mail collection service can be enabled in case of limitation in agents' availability 
                            </li>
                            <li>
                              Potential customers who like your website / the product or service you offer online can call you on the spot to place orders without loss of engagement 
                            </li>
                            <li>
                               Unlimited number of calls can be made from desktop client or from mobile phone
                            </li>
                            <li>
                               Have Iniapi Click-to-Call set-up at your workplace in maximum 2 days
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
                        <input type="hidden" name="pdfFile" value="INAIPI_Click to Call_2.pdf">
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
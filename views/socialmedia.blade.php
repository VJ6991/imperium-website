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
                    <h1>Social Media Integrator</h1>
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
                         <h2>Social Media Integrator</h2>
                    </div>
                    <div class="col-md-7">
                        <p>
                          Connect with your customer in a single go. The Imperium social media integrator places all your business social media touch points on a single interface that is easy to manage. Customer service agents can respond to customer queries and assist customers from platforms such as Facebook, LinkedIn, Instagram, Twitter while still on call. Create a complete customer experience most effectively by being where you customer are. A reliable solution for Avaya IPOCC and ACCS from a certified Avaya DevConnect Technology partner. 
                        </p>
                        <div class=" overview">
                            <h3>
                               HIGHLIGHTS
                            </h3>
                            <ul>
                                <li>
                                 All social media channels Integrated with Avaya IPO, IPOCC and ACCS
                                </li>
                                <li>
                                   Notifications for customer queries from all channels and all routes 
                                </li>
                                <li>
                                   Basic control in IPO, IPOCC and ACCS for chats
                                </li>
                                <li>
                                   Full control from Imperium CEP for Comments and post reply
                                </li>
                                <li>
                                   Switching from social media channel to conventional channel based on customer request.
                                </li>
                                <li>
                                   Predefined AI Chabot can be enabled
                                </li>
                                <li>
                                   Advanced skill based privileges for agents which are customizable
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('image/products/social-media.png') }}" alt="social media">
                    </div>
                    
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
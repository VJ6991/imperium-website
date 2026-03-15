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
                    <h1>Imperium Customer Experience Portal - ICEP</h1>
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
                         <h2>Imperium Customer Experience Portal - ICEP</h2>
                    </div>
                    <div class="col-md-7">
                        <p>
                          An all-in-one work space platform to handle every type of business communication for your customer service center. The ICEP lends you the benefit for an Omni-present customer service leading to a full-filling customer experience. <br><br>
                          The elegance and simplicity of ICEP application allows an agent to provide proactive and customized services and establish a deeper level of engagement with each customer regardless of the channel.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('image/products/icep.png') }}" alt="ICEP">
                    </div>
                    
                        <!-- <img class="pull-right img-responsive" src="{{ asset('image/products/cm.jpg') }}"  alt="Imperium"> -->
                    <div class="col-md-12 overview">
                        <h3>
                           HIGHLIGHTS AND FEATURES
                        </h3>
                        <ul>
                            <li>
                             Agent-customer interaction for AVAYA IPOCC
                            </li>
                            <li>
                               Omni Channel Ready
                            </li>
                            <li>
                               Ticketing System with 360* Customer view 
                            </li>
                            <li>
                               BI Reporting / QM / Real time monitoring
                            </li>
                            <li>
                               Customer Profiling with Mini CRM
                            </li>
                            <li>
                               Connectors – API to integrate business applications 
                            </li>
                            <li>
                               Customized work-flow and process for industries such as healthcare, Insurance, Real Estate, Service Sector and more.
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
                        <input type="hidden" name="pdfFile" value="ICEP.pdf">
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
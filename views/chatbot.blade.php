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
                    <h1>Chatbot</h1>
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
                         <h2>Chatbot</h2>
                    </div>
                    <div class="col-md-7">
                        <p>
                          Customer Support of the era is edging towards virtual chats and artificial intelligence to support the customers at fast pace. The Imperium Chatbot is conversational agent designed to serve as a support system for your customer on any digital platform. It stimulates a conversation with customers based on the customer availability and case history. <br><br>
                          It's a pre-trained pop up with brand language and information for visitors on website or social media page. It understands the requirement of the customer and suggest industry specific solution and knowledge. The bot can undertake complex reasoning without human intervention. It can suggest solutions as well and direct to the connect functionality and follow up on customer activities. 
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('image/products/chatbot.jpg') }}" alt="chatbot">
                    </div>
                    
                        <!-- <img class="pull-right img-responsive" src="{{ asset('image/products/cm.jpg') }}"  alt="Imperium"> -->
                    <div class="col-md-12 overview">
                        <h3>
                           FEATURES
                        </h3>
                        <ul>
                            <li>
                             Conversational Maturity 
                            </li>
                            <li>
                               Omni-capable - converse and retains data and context for a seamless experiences. seamlessly across every channel 
                            </li>
                            <li>
                               Free to Explore
                            </li>
                            <li>
                               Escalate to connect with live Agent over Voice/Video
                            </li>
                            <li>
                               Pre-Trained
                            </li>
                            <li>
                               Integrated with CRM and Customer Service Portal 
                            </li>
                            <li>
                               Resonate with brand's customers
                            </li>
                            <li>
                                Purpose specific functionality 
                            </li>
                            <li>
                                Exit to Connect to live agent
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
                        <input type="hidden" name="pdfFile" value="CHATBOT.pdf">
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
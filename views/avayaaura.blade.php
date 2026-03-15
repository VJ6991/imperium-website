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
                    <h1>Avaya Aura Communication Systems. </h1>
                    <p>
                       A technology that is the backbone of many stunning web-based real time communication applications.
                    </p>
                    <br>
                    <a href="javascript:;" data-toggle="modal" data-target="#modal-download-brochure" class="filled-btn">Download Flyer</a>
                </div>
            </div>
        </div>
    </div>


    <section id="about" class="service-area section-big section-padding">
        <div class="container">
            <div class="topcontent">
                <div class="row">
                    <div class="col-md-7">
                        <p>
                            Imperium has been a premium DevConnect Technology Partner of Avaya and follows best implementation practices to serve Avaya Aura solutions to our esteemed clients. These include Avaya Aura IPT and Avaya Aura Contact Center. 
                            <br><br> 
                           The Avaya Aura Platform provides the real-time foundation for Team and Customer Engagement solutions, and it is the key enabling layer in the Avaya enterprise architecture. 
                            <br><br>
                           It helps businesses simplify complex communications networks, reduces infrastructure costs and quickly delivers voice, video, mobility, collaboration, messaging, IM/presence, web applications and more. The session-based architecture of the Avaya Aura Platform combines openness, centralized administration and granular control to create a solution where active participation, pervasive collaboration and quality experiences can take place across the enterprise.

<br><br>
                         It adds powerful new capabilities to existing Avaya solutions, including session management that enables multi-vendor hardware and software to communicate across the enterprise network. The Avaya Aura Platform orchestrates a wide array of communications applications and systems by decoupling applications from the network. As a result, services and applications can be deployed to users depending on what they need rather than by where they work.


<br><br>
                         Finally, it enables the multimodal solutions necessary for success in today’s Era of Engagement.  These include customer engagement, mobility solutions, conferencing, multimedia messaging and the unified Avaya Communicator client experience.















                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('image/products/webrtc3.png') }}">
                    </div>
                    
               
                </div>
            </div>
        </div>
    </section>





 <div class="modal fade " id="modal-download-brochure" tabindex="-1" role="dialog">
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
                        <form name="downlaodBrochureFormInaipi" id="downlaodBrochureFormInaipi" class="cta-form cta-light">
                            <div class="alert hidden" id="brochure-message"></div>
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










@endsection
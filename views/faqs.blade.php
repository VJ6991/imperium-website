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
                    <h1>Faqs</h1>
                    <div class="breadcroumb">
                        <a href="{{ url('') }}">Home</a> &gt;
                        <a href="javascript:;">Faqs</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="service-area section-big section-padding">
    <div class="container">
        <div class="topcontent">
            <div class="row">
                <div class="col-md-12">
                    <h2>
                        Frequently Asked Questions </h2>

                    <div class="faqs">
                        <div class="faq-q">
                            <span>1</span> What is VOIP?
                        </div>
                        <div class="faq-ans">
                            <p> VOIP or voice over internet protocol is a technology that allows you to make calls through broadband internet connection over traditional telephone line.
                            </p>
                        </div>
                    </div>



                    <div class="faqs">
                        <div class="faq-q">
                            <span>2</span> How does VOIP work?
                        </div>
                        <div class="faq-ans">
                            <p> With VOIP, analog voice calls are converted into packets of data. These packets travel like any other type of data, such as e-mail over the public internet and any private internet protocol network. Using a VoIP service,
                                you can call to landline or cell phones. </p>
                        </div>
                    </div>

                    <div class="faqs">
                        <div class="faq-q">
                            <span>3</span> What equipments do I need to use VO IP efficiently?
                        </div>
                        <div class="faq-ans">
                            <p> <strong>  To use VOIP efficiently for your business, some of the important equipments include: </strong></p>
                            <ul>
                                <li>a. Analog telephone adapter </li>
                                <li> b. Telephone sets</li>
                                <li> c. VOIP routers </li>
                                <li> d. PC handsets</li>
                            </ul>
                        </div>
                    </div>


                    <div class="faqs">
                        <div class="faq-q">
                            <span>4</span> Can VOIP integrat with various business applications to improve my customer service?
                        </div>
                        <div class="faq-ans">
                            <p>Yes, of course. By using VOIP technology, one can greatly cut down the business communication cost. Additionally, when integrated with leading business applications such oracle, JD Edwards, Microsoft dynamics and Salesforce
                                CRM it leads to an incomparable customer service. </p>
                        </div>
                    </div>





                    <div class="faqs">
                        <div class="faq-q">
                            <span>5</span> What is a call accounting software?
                        </div>
                        <div class="faq-ans">
                            <p>Call Accounting software is a telecommunication software that helps you to record calls, detect inbound and outbound calls, abandoned calls , call routing and other activities. </p>
                        </div>
                    </div>




                    <div class="faqs">
                        <div class="faq-q">
                            <span>6</span> VOIP is limited only to call center businesses?
                        </div>
                        <div class="faq-ans">
                            <p>VOIP can be used in almost all industries. This technology mainly aims at improving the customer service and business interaction. Employee productivity is another important benefit to be considered </p>
                        </div>
                    </div>





                    <div class="faqs">
                        <div class="faq-q">
                            <span>7</span> What is CTI? How it is helpful for my agents?
                        </div>
                        <div class="faq-ans">
                            <p>Computer telephony integration (CTI) is a technology that coordinates telephone and computer for effective interaction. Implementing CTI technology in your business, provides a single point of interface that helps the agents
                                to make calls, answer calls, transfer and caller number identification efficiently .</p>
                        </div>
                    </div>






                </div>
            </div>
        </div>
    </div>
</section>

        <!-- About Page content area end here --> 

@endsection
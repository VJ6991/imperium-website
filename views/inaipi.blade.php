@extends('layouts.app')

@section('meta')
	{!!Helper::setMetaTags($meta)!!}
@stop

@section('content')


<div class="lite-breadcroumb-area innerbanner" id="cloudbanner">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Inaipi</h1>
            <div class="breadcroumb">
                <a href="{{ url('') }}">Home</a> &gt;

                <span class="current">Inaipi</span>
            </div>
        </div>
    </div>
</div>
</div>



<section id="about" class="service-area section-big section-padding">
        <div class="container">
            <div class="topcontent">
                <div class="row">
                    <div class="col-md-12">
                        <div class="subsec">
                            <h2> A Business module for Cloud Transformation </h2>

                        </div>
                        <img class="right-img avayaimg" src="{{asset('image/avaya.png')}}"  alt="Imperium">
                        <p>
                            INAIPI is a multi-faceted user management platform designed to elevate the way you function on Cloud. 
                            <br><br>
                            Manage all your Cloud operation tools seamlessly on a single platform. Inaipi enables you to move to an advanced level of communication.
                            <br><br> 
                            A user management system that collates, automates, deploys and monitors essential cloud services for your business. 
                            <br><br>
                            It's bring unique visibility for users and better control over cloud communications. 
                            <br><br>
                            Directly place orders, pay for services, get licenses, manage your cloud account subscription, usage and spending, communicate internally and a lot more, all on a single Interface. 
                            <br><br>
                            Dedicated and Well Managed Service Team with 24x7 helpdesk and an 800 INAIPI number.
                        </p>
                        <p>
                            <a href="http://www.inaipiapp.com/" target="_blank">
                                <button class="filled-btn">
                                    Know More
                                </button>
                            </a>
                        </p>
                        <p> &nbsp;</p>
                        <!-- <h2> Highlights </h2>

                        <div class="overview">
                            <ul class="list1">
                                <li>One smart app that is intuitive, secure and seamlessly integrates information from applications to multiple devices.</li>
                                <li>Enable instant, easy and relevant communication, anywhere, anytime and with any network! </li>
                                <li>Prioritize your communication for your service request. </li>
                                <li>Consumer Interaction cost &ndash; effective &amp; simple.</li>
                                <li>Unify &ndash; Talk, Text &amp; video Discover a new style of work.</li>


                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- <section class="service-area section-big section-padding  service">
        <div class="container">
            <div class="topcontent">
                <div class="row">
                    <div class="col-md-12">
                        <h2> Solutions For Every Industry Domain </h2>

                        <p> Experience feature-rich Imperium solutions for different industries such as Business Centers, Logistics, Health Care, Debt Collection and Service Industry. </p>
                        <div class="overview">
                            <ul class="list1">
                                <li><b>Healthcare </b>
                                    <p> Avaya Ip Office &amp; Imperium together addresses Customer Interaction Challenges in Healthcare.</p>
                                </li>
                                <li><b>Business Centre </b>
                                    <p>Imperium BCM is a feature-rich and cost-effective application designed exclusively for operator postions in the executive suites / businesscentre industry. </p>
                                </li>
                                <li><b>Service Industry </b>
                                    <p>Avaya IP Office Call center suite with Imperium Service desk module offers the best fit and cost-effective solution for the Customer service industry enabling efficient and effective call resolution for customers.</p>
                                </li>
                                <li><b>Logistics</b>
                                    <p>Avaya IVR &amp; TTS system enables customers to track status of their shipment avoiding long queues and read outs the information from specific database.</p>
                                </li>


                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> -->

@endsection
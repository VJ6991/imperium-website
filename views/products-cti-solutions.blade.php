@extends('layouts.app')

@section('meta')
	{!!Helper::setMetaTags($meta)!!}
@stop

@section('content')

    <!-- Inner Page Header serction start here -->
    <div class="lite-breadcroumb-area cti-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>CTI Solutions</h1>
                    <!-- <div class="breadcroumb">
                        <a href="index.html">Home</a> &gt;
                        <a href="javascript:;">Products</a> &gt;
                        <span class="current">Cti-Solutions</span>
                    </div> -->
                    <p>
                       Imperium CTI Solutions provides a single point of access to all the mission-critical applications and media control functionalities. 
                    </p>
                    <br>
                    <a href="javascript:;" data-toggle="modal" data-target="#modal-download-brochure" class="filled-btn">Download Brochure</a>
                </div>
            </div>
        </div>
    </div>

	<section id="about" class="service-area section-big section-padding">
        <div class="container">
            <div class="topcontent">
                <div class="row">
                    <div class="col-md-12">
                        <h2> Imperium CTI Solutions </h2>
                        <p>
                            Imperium CTI Solutions provides a single point of access to all the mission-critical applications and media control functionalities like call control, caller number identification, screen pop- up, answer calls, make calls, transfer, hold required by the
                            agent/users for effectively and efficiently completing a customer interaction.
                        </p>
                        <img class="right-img" src="{{asset('image/avaya-big.jpg')}}"  alt="Imperium">
                        <p>
                            Imperium CTI solutions provides the user with single interface, single system and one solution instead of switching around from one application to another application as it happens in may contact centers today.
                        </p>

                        <p>
                            CTI solutions from Imperium integrates directly with telephone infrastructure and Agent’s desktop providing less hassle and more control for agent to feed all the necessary information directly to where it needs to go.

                        </p>

                        <p>
                            Our CTI Solutions software provides you the best contact center platform to reduce average handle time, increase first call resolution, maximize agent productivity and drives to measurable outcomes.
                        </p>
                        <p>

                            Imperium CTI solutions gives you a complete integrated desktop solution that leads a better way to manage every customer interaction with faster resolution.
                        </p>
                        <div class="big-img">
                            <img src="{{asset('image/imperiummain')}}" alt="Imperium">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<section id="service" class="service-area section-big section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2> OUR CTI Products Overview </h2>
                    </div>
                </div>
            </div>
            <div class="topcontent">
                <div class="row">
                    <div class="col-md-6">
                        <div class="overview padright">
                            <h3> Imperium CRM Connect ( IMCC ) </h3>
                            <ul>
                                <li>
                                    Improves productivity through time saved not having to search for customer contact details, create customer activity records, or manually dial numbers. </li>
                                <li> Users click to dial customers, colleagues and partners directly from customer records (including client case and customer opportunity records), and sales leads. </li>
                                <li>
                                    A log of inbound and outbound calls can be generated automatically. </li>
                            </ul>

                            <div class="know-more kright">
                                <a href="products-cti-crm-connecter">  know more <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="overview padlet">
                            <h3>Imperium Outlook CTI Connector ( IMOC ) </h3>
                            <ul>
                                <li>

                                    Enhance your MS-Outlook experience using IMOC unified desktop CTI application. Convert your outlook into a powerful multi-channel application.
                                </li>


                                <li> Desktop toast pop-up notification for incoming &amp; outgoing calls giving contextual information about the customer.
                                </li>

                                <li> Intuitive Call log Window allowing users to review the incoming/outgoing &amp; missed call summary. </li>

                            </ul>

                            <div class="know-more kright">
                                <a href="products-cti-outlook-connecter">  know more <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
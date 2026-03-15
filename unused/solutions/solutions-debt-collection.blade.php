@extends('layouts.app')

@section('meta')
	{!!Helper::setMetaTags($meta)!!}
@stop

@section('content')
<div class="lite-breadcroumb-area innerbanner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Debt Collection</h1>
                    <div class="breadcroumb">
                        <a href="index.html">Home</a> &gt;
                        <a href="javascript:;">Solutions</a> &gt;
                        <span class="current">Debt Collection</span>
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
                        <h2>
                            Automate and Improve your customer Interaction with Avaya IPO &amp; Imperium</h2>
                        <p>Providing Customer information and tracking history is critical for a debt collector where the interactions are legally bound. Avaya IP Office with Imperium Debt collection provides reliable and secured environment for Debt collection
                            agencies to manage their day-today operations and reporting. </p>

                        <div class="overview">
                            <ul class="icon-list">
                                <li>Auto upload of Banking data inputs which can be defined separate for each Bank/organization
                                </li>
                                <li>Secure, modular and vertical hierarchy data management ensure each collection team data can be managed separately as per financial institutional requirements</li>
                                <li>Easy and custom format excel reporting for data-exchange with Banks to provide periodical reports on performance and communications</li>
                                <li>Screen-pop with complete financial history and interaction history provides the necessary information to enhance their collection portfolio and make efficient progress in tracking defaulted customers</li>
                            </ul>
                            <div class="download know-more ">
                                <a href="http://www.imperiumapp.com/pdf/Imperiumfordebtcollection.pdf" target="blank">
                                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download Brochure
                                </a>
                            </div>



                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>







    <section id="service" class="service-area section-big section-padding">
        <div class="container">
            <div class="topcontent">
                <div class="row">
                    <div class="col-md-6">
                        <div class="overview padright">
                            <h3>IVR Service </h3>
                            <ul>
                                <li>Fix or Cancel Appointments </li>
                                <li>Lists Departments in the hospitals</li>
                                <li>Lists facilities provided by hospital</li>
                                <li>Doctors in the Divisions</li>
                                <li>Phone Numbers and Addresses</li>
                                <li>Records Complains of Customers</li>
                                <li>SMS Reminders</li>

                            </ul>

                        </div>
                    </div>






                    <div class="col-md-6">
                        <div class="overview padlet">
                            <h3>Operator Service</h3>
                            <ul>
                                <li>Appointments Scheduler</li>
                                <li>Screen-Pop with patient history</li>
                                <li>Schedule appointments based on Doctors availability</li>
                                <li>Missed Call notification</li>
                                <li>Call Back Services </li>
                                <li>Reporting</li>


                            </ul>

                        

                        </div>
                    </div>
                </div>
            </div>
    </div></section>


    <section  class="service-area section-big section-padding">
        <div class="container">
            <div class="topcontentt">
                <div class="row">
    <div class="know-more text-center">
                                <strong>  More Information <i class="fa fa-handshake-o" aria-hidden="true"></i>
 </strong> &nbsp;

                                <a href="contact">  Get In Touch With Us  </a>
                            </div>
                            </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@extends('layouts.app')

@section('meta')
	{!!Helper::setMetaTags($meta)!!}
@stop

@section('content')


<div class="lite-breadcroumb-area innerbanner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Logistics</h1>
                    <div class="breadcroumb">
                        <a href="index.html">Home</a> &gt;
                        <a href="javascript:;">Solutions</a> &gt;
                        <span class="current">Logistics</span>
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
                            Avaya IP Office &amp; Imperium for Round the Clock Customer Service.</h2>


                        <div class="overview">
                            <ul class="icon-list">
                                <li>Avaya IVR &amp; TTS system enables customers to track status of their shipment avoiding long queues and read outs the information from specific database. </li>
                                <li>Using Avaya IVR customer can request for a new booking and system will collect shipment/location details. It also provides a reference number for the booking done.</li>
                                <li>Agent CTI interface displays important information about incoming calls along with case history. </li>
                                <li>Call Back Manager downloads booking requests from IVR database and will allow agents to call back the customer to confirm request.</li>
                            </ul>
                            <div class="download know-more ">
                                <a href="http://www.imperiumapp.com/pdf/ImperiumforlOGISTICS.pdf" target="blank">
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
    </div>
</section>




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
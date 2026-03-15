@extends('layouts.app')

@section('meta')
	{!!Helper::setMetaTags($meta)!!}
@stop

@section('content')

<div class="lite-breadcroumb-area innerbanner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Service Industry</h1>
                    <div class="breadcroumb">
                        <a href="index.html">Home</a> &gt;
                        <a href="javascript:;">Solutions</a> &gt;
                        <span class="current">Service Industry</span>
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
                            Enhance your customer Interaction with Avaya IPO &amp; Imperium.</h2>

                        <div class="overview">
                            <ul class="icon-list">
                                <li>Agent screen-pop provides detailed call history and case history created for the customer, along with the latest status enabling the agent to address the customer issue immediately.</li>
                                <li>Supervisor dash board provides the necessary statistical information on the call and case category and agent performance for the day.</li>
                                <li>Enhanced integrated reporting provides additional information on the CCR reporting that includes the case details and customer details as well.</li>
                                <li>Preview campaign enables the agents to follow-up on customer complaints and issues effectively.
                                </li>
                            </ul>
                            <div class="download know-more ">
                                <a href="http://www.imperiumapp.com/pdf/Imperiumforserviceindustry.pdf" target="blank">
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
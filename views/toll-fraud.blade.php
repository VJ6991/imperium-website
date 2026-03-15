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
                    <h1>Toll Fraud Protection</h1>
                    <p>
                       The imperium Toll fraud protection system is a unique tool which monitors the usage pattern of your telephony system and detects anomalies in outbound calls if any. It takes inputs from the system and maps the usage trend which can also be pre-defined according to office hours.
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
                         <h2>Imperium: Toll Fraud Protection System</h2>
                    </div>
                    <div class="col-md-7">
                        <p>
                            The imperium Toll fraud protection system is a unique tool which monitors the usage pattern of your telephony system and detects anomalies in outbound calls if any. It takes inputs from the system and maps the usage trend which can also be pre-defined according to office hours. It then implements artificial intelligence in monitoring behavioral pattern of outbound calls consistently during the peak times of the day. For instance, if the office is working from 9 am to 6 pm and in rare cases office has been running till 9 or 10 pm, the Toll Fraud feature will detect any deviation from standard practice resulting into below actions:
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img class="pull-right img-responsive" src="{{ asset('image/products/cm.jpg') }}"  alt="Imperium">
                    </div>

                    <div class="col-md-12 overview">
                        <h3>Fraud Alerts</h3>
                        <ul>
                            <li>
                                On noticing a fluctuation in the call usage trend, the Call Reporter will send alerts to the system administrator for quick actions. 
                            </li>
                        </ul>
                        <h3>Call Barring</h3>
                        <ul>
                            <li>
                                If necessary, the Call reporter can be used to block all activity for a particular phone which may be prone to suspicious activities. 
                            </li>
                        </ul>
                        <h3>Call Reports</h3>
                        <ul>
                            <li>
                                Not just alerts, but the Call Reporter can generate accurate and real time reports about daily, monthly and yearly inbound calls, out bound calls, call duration and billing. These serve as completed historic call data that can help conduct regular checkups and analyze critical situations in a better manner. 
                            </li>
                        </ul>
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
                        <form name="downlaodBrochurecrmToll_Fraud" id="downlaodBrochurecrmToll_Fraud" class="cta-form cta-light">
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







    <!-- <section id="service" class="service-area section-big section-padding">
        <div class="container">
            <div class="topcontent">
                <div class="row">
                    <div class="col-md-12">
                        <h2> Highlights </h2>

                        <div class="overview">
                            <ul>
                                <li>User/Admin/Reporting Interface</li>
                                <li>Contact Management: Contacts to have the following fields Name, Gender, Number,Profession, and Category (Normal or VIP or VVIP, etc.) Nationality, Address, Country</li>
                                <li>Phonebook support</li>
                                <li>Database lookup</li>
                                <li>Contact import from Excel, CSV or text file</li>
                                <li>Contact import from external DB or via web services</li>
                                <li>Sender IDsupport</li>
                                <li>Personalized Bulk Messages</li>
                                <li>Tracking: SMS Gateway to keep track of the sent SMS, User who sent the SMS, Recipient, time stamp and keywords</li>
                                <li>Scheduling the SMS</li>
                                <li>Multi-language support</li>
                                <li>Integration with third-party applications and Database</li>
                                <li>Fully Customizable solution</li>
                                <li>Reporting</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
@endsection
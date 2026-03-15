@extends('layouts.app')

@section('meta')
    {!!Helper::setMetaTags($meta)!!}
@stop

@section('content')

        <!-- Inner Page Header serction start here -->
    <div class="lite-breadcroumb-area innerbanner cm-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Call Management System</h1>
                    <p>
                       The Call Management system for Avaya IPO and IPOCC entails call reporting, real-time call management, Toll Fraud protection system and Budget control system.
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
                         <h2>Imperium: Call Management Service</h2>
                    </div>
                    <div class="col-md-7">
                        <p>
                            The Call Management system for Avaya IPO and IPOCC entails call reporting, real-time call management, Toll Fraud protection system and Budget control system.
                            <br><br>
                            It’s is Imperium's top notch and holistic software built on top of Avaya solutions as a value added product. Imperium CMS helps you leverage the potential of your telephony system of best results.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img class="pull-right img-responsive" src="{{ asset('image/products/call-management.jpg') }}"  alt="Imperium">
                    </div>

                    <div class="col-md-12 overview">
                        <h3>
                            Here is how: 
                        </h3>
                        <ul>
                            <li>
                                Web based Application
                            </li>
                            <li>
                                Improve your Employee productivity
                            </li>
                            <li>
                                Maximize ROI
                            </li>
                            <li>
                                Dash board on Trunk Utilizations, Missed calls, Long duration calls, Expensive calls.
                            </li>
                            <li>
                                Reports which gives more transparency to your telephony usage
                            </li>
                            <li>
                                Reduce and control your Cost on telephony
                            </li>
                            <li>
                                Single Interface to Monitor Multiple branch activities.
                            </li>
                            <li>
                                Predefined Reports Templates on Branch, Users, and Trunk Activities.
                            </li>
                            <li>
                                Email alerts on Top Calls by Cost by Duration.
                            </li>
                            <li>
                                Distribute reports via email.
                            </li>
                            <li>
                                Track Emergency calls, suspicious call activities.
                            </li>
                            <li>
                                Easily expandable with optional functionalities that adds value and grow with your business needs
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
                        <form name="downlaodBrochureForm" id="downlaodBrochureForm" class="cta-form cta-light">
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
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
                    <h1>Call Back Assist Module</h1>
                    <p>
                       A brilliant addition to upgrade your contact center and business communication center, Imperium's Call-back Assist is a versatile tool that restores missed opportunities of customer service. 
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
                     <div class="col-md-12 text-center">
                        <div class="section-title">
                           <h2>Imperium Call Management System</h2>
                        </div>
                     </div>
                </div>
                
                <div class="row">
                    <div class="col-md-7">
                        <p>
                            A brilliant addition to upgrade your contact center and business communication center, Imperium's Call-back Assist is a versatile tool that restores missed opportunities of customer service. 
                            <br><br>
                            A contact center is bound to have abandoned calls but that needn't limit your capability to assist every customer who reaches out to your enterprise.
                            <br><br>
                            The Call-back Assist module is designed to regularly monitor dropped calls and collate a list of those customers. As and when agents are available, the list goes through an automated outbound calling process supported by an IVR which then routes the connected calls to those agents with all customer details. 
                            <br><br>
                            The Callback Assist also offers customers with IVR option for receiving callbacks based on their position in the queue. This way, your customer service remains impeccable and versatile to handle any situation.  It's a powerful, fully functional method to execute the through that every caller matters. 
                        </p>
                    </div>
                    <div class="col-md-5"> 
                        <img class="pull-right img-responsive" src="{{ asset('image/products/call-back.jpg') }}"  alt="Imperium">
                    </div>
                    <div class="col-md-12 overview">
                        <h2>
                            Automated Dial-back System for Missed Calls Scheduled Call-Backs for Customers 
                        </h2>

                        <h3>
                            The Callback Assist is ideal for:
                        </h3>

                        <ul>
                            <li>
                                Time-efficient Work-flow.
                            </li>
                            <li>
                                Efficiency in Time and Call Management
                            </li>
                            <li>
                                Channelizing and segregating calls based on urgency and availability 
                            </li>
                            <li>
                                Satisfactory customer experience and resolution rate
                            </li>
                            <li>
                                Recovering lost business and goodwill opportunity
                            </li>
                            <li>
                                Leveling call traffic by shifting peak call volumes to non-peak times
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
                        <form name="downlaodBrochurecrmCallBack" id="downlaodBrochurecrmCallBack" class="cta-form cta-light">
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
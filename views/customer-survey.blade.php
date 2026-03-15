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
                    <h1>Customer Survey Module</h1>
                    <p>
                      The Imperium Customer Survey Module is a multi-level application designed to conduct automated post-call survey for analyzing customer service quality and customer satisfaction.
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
                         <h2>Imperium Customer Survey App</h2>
                    </div>
                    <div class="col-md-7">
                        <p>
                           The Imperium Customer Survey Module is a multi-level application designed to conduct automated post-call survey for analyzing customer service quality and customer satisfaction.  Once a call is completed by an agent, the Imperium Customer Survey Module kicks in and directs the call to Avaya IPOCC IVR through an enabled integration. The IVR conducts scripted survey over the call and the input is processed and stored as customer survey reports in the CSM database.
                           <br><br> 
                           The product also allows for seamless integrated with an SMS service provider so that the customer can take the survey when it is convenient. The Imperium Customer Survey Module can initiate two types of SMS service. One where the survey in sent to the customer as a message that he can respond to. The CMS keeps a tab on the data received via push and pull SMS and the number of customer responses received. In other route the customer receives a URL link via SMS that can take him to an online portal for the survey. 
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img class="pull-right img-responsive" src="{{ asset('image/products/survey.png') }}"  alt="Imperium">
                    </div>
                    <div class="col-md-12">
                        The CSM report includes the collective survey results and statistics in a comprehensive format accessible on web-browser user Interface as well as sent via emails. Regular email notification with complete survey details are sent about specific customers who were unsatisfied with the customer service provided to them. In addition, the product supports integration with third party database and applications for businesses to gather their data in a holistic manner. 
                        <br><br>
                        Imperium's Customer Survey Module is an organized way of collating customer response post customer service for enhancing the way a company interacts with its customer. 
                    </div>
                </div>
            </div>
        </div>
    </section>

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
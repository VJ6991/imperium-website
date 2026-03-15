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
                    <h1>Push / Pull Notification </h1>
                    <p>
                       Imperium's Push / Pull Notification offers individualized and bulk messages which can be pushed to mobile devices. 
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
                    <div class="col-md-7">
                        <p>
                            Imperium’s Push / Pull Notification offers individualized and bulk messages which can be pushed to mobile devices. All you need to do is to select the recipient or group, type the message and the message gets sent immediately.
                            <br><br>
                            This solution is available in different variants such as web based system, window based client application and as an Outlook Plug-in which enables sending instant messages from Microsoft Outlook itself.
                            <br><br>
                            Our Push / Pull Notification Solution is feature-rich and cost-effective solution that can be integrated with CTI Solutions, CRM Solutions, Appointment systems, Business applications, Microsoft Outlook, Contact Managers and IVR systems, etc. enabling the Agents/Users to send SMS instantly to the Customer’s from within the application itself which increases the Agent’s productivity and Call Center’s efficiency.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('image/products/push.png') }}">
                    </div>
                    
                        <!-- <img class="pull-right img-responsive" src="{{ asset('image/products/cm.jpg') }}"  alt="Imperium"> -->
                    <div class="col-md-12 overview">
                        <h3>
                            Highlights
                        </h3>
                        <ul>
                            <li>
                                User/Admin/Reporting Interface
                            </li>
                            <li>
                                 Contact Management: Contacts to have the following fields Name, Gender, Number, Profession, and Category (Normal or VIP or VVIP, etc.) Nationality, Address, Country
                            </li>
                            <li>
                                Phonebook support
                            </li>
                            <li>
                                Database lookup
                            </li>
                            <li>
                                Contact import from Excel, CSV or text file
                            </li>
                            <li>
                                Contact import from external DB or via web services
                            </li>
                            <li>
                                Sender IDsupport
                            </li>
                            <li>
                                Personalized Bulk Messages
                            </li>
                            <li>
                                Tracking: SMS Gateway to keep track of the sent SMS, User who sent the SMS, Recipient, time stamp and keywords
                            </li>
                            <li>
                                Scheduling the SMS
                            </li>
                            <li>
                                Multi-language support
                            </li>
                            <li>
                                Integration with third-party applications and Database
                            </li>
                            <li>
                                Fully Customizable solution
                            </li>
                            <li>
                                Reporting
                            </li>
                        </ul>
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
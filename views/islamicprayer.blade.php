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
                    <h1>Islamic Prayer</h1>
                    <p>
                      Automate Prayer announcement for your colleagues with Imperium.
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
                         <h2>Islamic Prayer Announcement Module</h2>
                    </div>
                    <div class="col-md-7">
                        <p>
                          Automate Prayer announcement for your colleagues with Imperium.
                            <br>
                          
                            We promote a kind of workplace culture that makes everyone that they belong. What better than spiritual well-being at work. 
                            <br>
                            The all new Imperium Islamic Prayer announcement module helps you to record your prayers on your telephone system which is then automatically played at the appropriate time. 
                            <br>
                            It’s is an attractive and useful application for Muslim colleagues to benefit from at work place. <br>
                            Imperium has gone the extra mile to enable you to create a great work life balance at your office. 
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('image/products/islamicprayer.png') }}">
                    </div>
                    
                        <!-- <img class="pull-right img-responsive" src="{{ asset('image/products/cm.jpg') }}"  alt="Imperium"> -->
                    <div class="col-md-12 overview">
                        <h3>
                           Key Features:
                        </h3>
                        <ul>
                            <li>
                             Prayer call and announcement with precise prayer timings based on server time zone.
                            </li>
                            <li>
                               Supports each city worldwide 
                            </li>
                            <li>
                               If required the prayer time can also be changed instantly by Administrators
                            </li>
                            <li>
                               Web based Admin interface to view and modify the announcement timings and status of prayer announcement
                            </li>
                            <li>
                               Supports Avaya 96xx,14xx, 16xx series Phones
                            </li>
                            <li>
                               Announcements can be made to all the users in the network or to a selected group of users based on client preference
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
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
                    <h1>HR and Payroll Software Dubai </h1>
                    <p>
                      This system maintains the Employee Attendance and Payroll Details.
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
                           <h2>Imperium HRMS Payroll Software</h2>
                        </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <p>
                           This system maintains the <b>Employee Attendance and Payroll Details</b> in the custom build application environment to analyze, verify, validate and report for operational and statistical purposes of your business. 
                            <br><br>
                           The HRMS Payroll application developed by our team is a multi-tier web-based application which can be hosted anywhere for online access for internal users and customers alike. 
                            <br><br>
                           The application provides the necessary interface for the staff and customers with the respective privilege to amend and add the necessary information to ensure the data is verified and certified true in the due course.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('image/products/cm.jpg') }}">
                    </div>
                    
                        <!-- <img class="pull-right img-responsive" src="{{ asset('image/products/cm.jpg') }}"  alt="Imperium"> -->
                    <div class="col-md-12 overview">
                        <h3>
                          The system gives 
                        </h3>
                        <ul>
                            <li>
                                Efficiency of Administration
                            </li>
                            <li>
                                 Reduced cost and automation of process 
                            </li>
                            <li>
                               Easy data collection and management
                            </li>
                            <li>
                               Maintaining Employee Records and keeping track of Insurance and privileges, Time off and sick leaves and more.
                            </li>
                            <li>
                               Quick access to information 
                            </li>
                            <li>
                               Processing of documents and steps for HR functionality 
                            </li>
                            <li>
                               Holistic Reports and Data Analysis 
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
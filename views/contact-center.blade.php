@extends('layouts.app')

@section('meta')
    {!!Helper::setMetaTags($meta)!!}
@stop

@section('content')

        <!-- Inner Page Header serction start here -->
    <div class="lite-breadcroumb-area innerbanner contact-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Avaya Contact Center Select </h1>
                    <p>
                       Imperium offers a multi-channel contact center on Cloud that is smooth and scalable to meet the needs of a flourishing business. 
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
                            Imperium offers a robust, multichannel contact center solution Platform on Cloud that is smooth and scalable to meet the needs of a flourishing business.  
                            <br><br>
                            Avaya Contact Center Select is a context-sensitive, multichannel contact solution that enables businesses to improve customer experiences; increase customer lifetime value and revenue; and anticipate, automate and accelerate customer interactions while improving agent efficiency to reduce cost. Every agent has inbound and outbound voice capabilities.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img class="pull-right img-responsive" src="{{ asset('image/products/call-center-inner.png') }}"  alt="Imperium">
                    </div>
                    <div class="col-md-12">
                        <p>
                            <b>Key Benefits for your Business with Avaya Contact Center Select</b>
                            <ul class="ulcontent">
                                <li>
                                    <b>Agent Efficiency:</b> Improve agent productivity with features such as Skill-based routing of customer inquiries, voice and screen recording, support quality management, live monitoring and employee coaching in a scalable, flexible, PCI compliant architecture.
                                </li>
                                <li>
                                    <b>Administrative Effectiveness:</b> Common, web-based administration capabilities for contact center supervisors and managers help reduce configuration complexity, eliminate duplication, reduce errors and lower implementation time and cost along with unified reporting to enhance productivity and decrease the complexity of the system. 
                                </li>
                                <li>
                                    <b>Security, Scalability and Architecture:</b>  Avaya Contact Center Select can be architected to help ensure business continuity during unforeseen disruptions.
                                </li>
                                <li>
                                    <b>Deliver Exceptional Customer Experiences:</b> Enhance the value of every interactionby delivering consistent, personalized service and identify cross selling and up-selling opportunities. Create stronger customer relationships by enabling every employee to be a customer advocate, to provide exceptional customer service across the entire business.
                                </li>
                            </ul>
                        </p>
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
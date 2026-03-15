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
                    <h1>SMS Solutions</h1>
                    <div class="breadcroumb">
                        <a href="{{ url('') }}">Home</a> &gt;
                        <a href="javascript:;">Products</a> &gt;
                        <span class="current">SMS-Solutions</span>
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
                        <div class="subsec">
                            <h2>Imperium SMS Solutions </h2>

                        </div>

                        <p>

                            Imperium SMS Solutions Imperium SMS Solutions provides a computer based system, wherein individualized and bulk messages can be sent to mobile devices. All you need to do is to select the recipient or group, type the message and the message gets sent
                            immediately.
                        </p>
                    
                        <img class="right-img" src="{{asset('image/avaya-big.jpg')}}"  alt="Imperium">
                        <p>
                            Our Imperium SMS Solutions are available in different variants as Web based system, Window based Client application and as anOutlook Plug-in which enables sending SMS from Microsoft Outlook itself. </p>





                        <p>
                            Our SMS Solution is a feature-rich and cost-effectivesolution that can be integrated with CTI Solutions, CRM Solutions, Appointment systems, Business applications, Microsoft Outlook, Contact Managersand IVR systems, etc. enabling the Agents/Users to send
                            SMS instantly to the Customer’s from within the application itself which increases the Agent’s productivity and Call Center’s efficiency.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>








    <section id="service" class="service-area section-big section-padding">
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
</section>






@endsection
@extends('layouts.app')

@section('meta')
	{!!Helper::setMetaTags($meta)!!}
@stop

@section('content')
    <!-- Inner Page Header serction start here -->
    

    <div class="lite-breadcroumb-area innerbanner" id="partnerbanner" style="    background-image: url({{asset('image/partners.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Cisco</h1>
                <div class="breadcroumb">
                    <a href="{{ url('') }}">Home</a> &gt;
                    <a href="javascript:;">Partners</a> &gt;
                    <span class="current">Cisco</span>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="about" class="service-area section-big section-padding">
<div class="container">
    <div class="topcontent">
        <div class="row">
            <div class="col-md-8">
                <div class="subsec">
                    <h2>Imperium Partner: Cisco Call Accounting</h2>

                </div>

                <p>
                    Imperium is the proven leader when it comes to Call Accounting for Cisco Unified Communications Manager, Cisco Unified Communications Manager Business Edition, Cisco Unified Communications Manager Express, as well as Cisco Hosted Collaboration Solution.
                </p>
                <p> &nbsp;</p>

                <h3> Imperium Call Accounting provider offer these valuable features: </h3>

                <div class="overview">
                    <ul class="icon-list" style="text-align: justify;">
                        <li><strong>Ring Time and Abandoned Summary</strong> &ndash; Reflects how calls are being managed. This report can be generated on the department level and includes total number of inbound calls, total and average inbound duration,
                            number and percentage of calls not answered and average ring time.] </li>
                        <li><strong>Average Ring Time by Hour</strong> &ndash; Indicates average ring time by hour as well as total number of calls. High average ring times may indicate potential staffing or training concerns. </li>
                        <li><strong>Traffic Analysis</strong> &ndash; This new analysis indicates locations that are under-trunked and over-trunked and include busy hour, total calls, calls blocked due to trunk or equipment failure, number of configured
                            trunks, optimal number of trunks and the net. </li>
                        <li><strong>Ring Time Detail</strong> &ndash; Shows if calls are being answered in a timely manner. Similar to an extension detail report, ring times for each call received as well as internal calls are provided. </li>
                        <li><strong>Abandoned Calls by Hour</strong>&ndash; Hourly abandoned information is provided with total number of calls providing insight into call trends and facilitates correction of under or over-staffing concerns. A graphic
                            representation is included with the text information. </li>
                        <li><strong>Transferred Calls Report </strong>- Reflects all transferred calls and includes all legs of the call with "transferred from" and "transferred to" information. Each leg of the call indicates duration, as well as
                            any cost associated. </li>
                    </ul>
                </div>










            </div>



            <div class="col-md-4 sidesec">
            <div class="box-content">

                    <h3>PARTNER | CISCO </h3>
                <img class="right-img" src="{{asset('image/Cisco_logo.png')}}"  alt="Imperium">
</div>

                <div class="box-content">

                    <h4> Become a reseller </h4>
                    <p>
                        Becoming a reseller for Imperium products brings with it a host of benefits and we invite you to be a part of our success. Please fill in the application form below and our Imperium representative will contact you to discuss our alliance.
                    </p>

                    <p class="text-right">
                        <a href="registration">Click here to register </a> </p>


                </div>


            </div>


        </div>
    </div>
</div>
</section>







@endsection
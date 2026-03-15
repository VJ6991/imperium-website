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
                <h1>Microsoft Lync</h1>
                <div class="breadcroumb">
                    <a href="{{ url('') }}">Home</a> &gt;
                    <a href="javascript:;">Partners</a> &gt;
                    <span class="current">Microsoft Lync</span>
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
                            <h2>Imperium &amp; Microsoft Lync Server</h2>

                        </div>

                        <p>
                            Microsoft&reg; Lync&trade; Server is the most advanced cloud communications product available on the market today. It will expand your communications options, reduce your costs and enable your enterprise to run more efficiently, but how will you know if you are
                            taking full advantage of the technology? How will you monitor calling activity by your employees to guard against misuse? How will you manage your Lync Server network to ensure you have enough capacity at critical network choke
                            points? How will you leverage the information on how your employees communicate to improve business processes and run more efficiently.
                        </p>
                        <p> &nbsp;</p>

                        <h3> Benefits: </h3>

                        <div class="overview">
                            <ul class="icon-list">
                                <li>Where are calls coming from? Where are we making calls to?</li>
                                <li>How is my network performing? Do I have any blockage?</li>
                                <li>Do I need more bandwidth capacity? If so, where do I need it?</li>
                                <li>How are my employees handling customer calls?</li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-md-4 sidesec">


                        <div class="box-content bgwh">

                            <h4> PARTNER | MICROSOFT LYNC </h4>
                            <p>
                         

                                <img class="right-img" src="{{asset('image/ms_lync.gif')}}"  alt="Imperium">


                            </p>




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
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
                    <h1>CTI Solutions</h1>
                    <div class="breadcroumb">
                        <a href="{{ url('') }}">Home</a> &gt;
                        <a href="javascript:;">Products</a> &gt;
                        <span class="current">CTI-Solutions</span>
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
                            <h2>
                                Imperium Outlook CTI Connector &ndash; IMOC</h2>
                        </div>
                        <img class="right-img" src="{{ asset('image/avaya-big.jpg') }}" alt="Imperium">
                        <p>
                            Imperium Outlook CTI Connector is a powerful application which enables MS-Outlook as a multi-channel customer interaction tool. The IMOC allows Outlook to integrate with Avaya IP office’s real time communication capabilities and enables SMS/FAX services
                            within the Outlook application.
                        </p>
                        <p>
                            The IMOC application enables the users to create a contact when an email is received, the user while reading an email can call the contact, send an SMS/FAX to the email contact instantly.
                        </p>

                        <div class="big-img">
                            <img src="{{asset('image/outlook -image.jpg')}}" alt="Imperium">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="service-area section-big section-padding  service">
        <div class="container">
            <div class="topcontent">
                <div class="row">
                    <div class="col-md-12">
                        <h2> Key Features &amp; Benefits </h2>
                        <div class="overview">
                            <ul>
                                <li>
                                    Enhance your MS-Outlook experience using IMOC unified desktop CTI application. Convert your outlook into a powerful multi-channel application.</li>

                                <li>
                                    Voice /<a href="products-sms-solutions"> SMS </a>/<a href="products-fax-server"> FAX</a> services is extended to all contact information pages of outlook, allowing the users to access these services anywhere
                                    within outlook application.
                                </li>

                                <li>
                                    Desktop toast pop-up notification for incoming &amp; outgoing calls giving contextual information about the customer.</li>

                                <li>
                                    Intuitive Call log Window allowing users to review the incoming/outgoing &amp; missed call summary. </li>

                                <li>
                                    Ability for users to call the contact / create a contact directly from the log summary.</li>

                                <li>
                                    Activity tracker to track all Call/SMS/ FAX related to a particular contact. The application allows users to enter &amp; track notes for both incoming &amp; outgoing calls.
                                </li>
                                <li>
                                    360 degree integration capability with any third party ERP/CRM database which enables click to open for CRM records related to Caller ID, such as a contact record opportunities/ order list or a note/activity record containing information from pervious
                                    calls with the customer.
                                </li>
                            </ul>

                          
                            <div class="overview explore">

                                <ul>
                                    <li class="column">
                                        <img class="myImg" id="myImg2"  src="{{asset('image/outlook-image1.png')}}" alt="" >
                                    </li>
                                    <li class="column">
                                        <img id="myImg3"  class="myImg" src="{{asset('image/outlook-image1.png')}}" alt="" >
                                    </li>

                                    <li class="column">
                                        <img id="myImg4"  class="myImg" src="{{asset('image/outlook-image1.png')}}" alt="" >
                                    </li>



                                </ul>
                            </div>








                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <section class="service-area section-big section-padding ">
        <div class="container">
            <div class="topcontent">
                <div class="row">
                    <div class="col-md-12">
                        <h2> Explore More </h2>
                        <div class="overview explore">
                            <ul>
                                <li class="column">
                                    <img class="myImg"  id="myImg"   src="{{asset('image/imcc_architecture1.png')}}" alt="Outlook Connect - Architecture" alt="Outlook Connect - Architecture" >
                                    <p>Outlook Connect - Architecture </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- The Modal -->
<div id="myModal" class="modall">
  <!-- The Close Button -->
  <span class="closee" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
  <!-- Modal Content (The Image) -->
  <img class="modall-content" id="img01">

  <div id="caption"></div>
</div>





<script>
var modal = document.getElementById('myModal');
var img = document.getElementById('myImg');
var img2 = document.getElementById('myImg2');
var img3 = document.getElementById('myImg3');
var img4 = document.getElementById('myImg4');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

img2.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

img3.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}


img4.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}



var span = document.getElementsByClassName("close")[0];
span.onclick = function() { 
    modal.style.display = "none";
}
</script>



@endsection
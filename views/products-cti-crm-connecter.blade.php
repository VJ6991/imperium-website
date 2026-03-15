@extends('layouts.app')

@section('meta')
	{!!Helper::setMetaTags($meta)!!}
@stop

@section('content')

 
 <!--===== BREADCROUMB AREA =====-->
 <div class="lite-breadcroumb-area innerbanner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>CTI Solutions</h1>
                    <div class="breadcroumb">
                        <a href="{{ url('') }}">Home</a> >
                        <a href="javascript:;">Products</a> >
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



 <!-- <img id="myImg" src="https://www.w3schools.com/howto/img_fjords.jpg" alt="Trolltunga, Norway" width="300" height="200">

<div id="myModal" class="modal">
  <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div> 

 -->




<script>

// var modal = document.getElementById('myModal');

// var img = document.getElementById('myImg');
// var modalImg = document.getElementById("img01");
// var captionText = document.getElementById("caption");
// img.onclick = function(){
//     modal.style.display = "block";
//     modalImg.src = this.src;
//     captionText.innerHTML = this.alt;
// }


// var span = document.getElementsByClassName("close")[0];


// span.onclick = function() { 
//     modal.style.display = "none";
// }

</script>











                            <h2> Imperium CRM Connect – IMCC</h2>
                        </div>
                        <img class="right-img" src="http://www.imperiumapp.com/images/avaya-big.jpg" alt="Imperium">
                        <p>
                            Today's Customer service representative are multi-tasking, handling basic customer service inquires taking request/complaints, booking appointments etc. As a result, demand is steadily growing for tools that enable agents to effectively multi-task.
                        </p>


                        <p>
                            The IMCC is a powerful desktop application integrates Avaya's real-time communications capabilities with leading Business Applications like Microsoft CRM/Dynamics, JD-Edwards, and Salesforce to improve productivity & enhance customer services
                        </p>

                        <div class="big-img">
                            <img  src="{{asset('image/crmpartners.jpg')}}" alt="Imperium">

                           

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="service-area section-big section-padding imgbg">
        <div class="container">
            <div class="topcontent">
                <div class="row">
                    <div class="col-md-12">
                        <h2> Product Highlights </h2>

                        <div class="overview">
                            <ul>

                                <li>
                                    Improves productivity through time saved not having to search for customer contact details, create customer activity records, or manually dial numbers.</li>

                                <li>
                                    Users click to dial customers, colleagues and partners directly from customer records (including client case and customer opportunity records), and sales leads.</li>

                                <li>
                                    A log of inbound and outbound calls can be generated automatically.</li>

                                <li>
                                    Missed calls, call duration, and annotated notes are also included within the client record for easy retrieval at any time</li>

                                <li>
                                    Users can click to call from the contact list and CRM customer records, for incoming & outgoing calls a desktop toast pop-up notification contextual information about the customer and gives the user the option to Hold or Release the call / Transfer the
                                    call / Enter notes during the call / Generate an activity record in the CRM database that includes automatically populated call details / View call history & missed calls.</li>

                                <li>
                                    Enhances customer service by presenting the customer number or name and company within the toast pop-up. Users can greet the customer by name, click to open the customer record, and access relevant customer information, facilitating more personalized,
                                    well-informed conversations.</li>


                            </ul>
                        </div>
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
                        <h2> Key Features & Benefits </h2>


                        <div class="overview">
                            <ul>
                                <li>
                                    Click to Dial from contact lists and customer records that contain phone numbers
                                </li>
                                <li>
                                    Automatic Call Logging of inbound and outbound calls stores call history within the client record, including call duration and missed calls.</li>

                                <li>
                                    Call Annotation allows a user to enter personal notes during a call and stores the notes in the record along with call detail such as time and date.</li>

                                <li>
                                    Call Duration automatically captures conversation time for inbound and outbound calls, rounds it to the nearest minute, and stores it in the customer record.</li>

                            </ul>

                            <div class="download know-more ">
                                <a href="http://www.imperiumapp.com/pdf/ImperiumCTIConnectFinal.pdf" target="blank">
                                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download Brochure
                                </a>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="service-area section-big section-padding">
        <div class="container">
            <div class="topcontent">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Desktop Notifications </h2>
                        <div class="overview">


                            <ul>


                                <li>
                                    Presents incoming and outgoing calls the user makes or receives from associated devices.
                                </li>
                                <li>
                                    Displays caller name and company information retrieved from the CRM Database.</li>
                                <li>
                                    Offers click to open for CRM records related to Caller ID, such as a contact record, opportunities/ orders list, lead, or a notes/activity record containing information from previous calls with the customer.</li>
                                <li>
                                    Enables remote phone answer or redirect to alternative number directly from the desktop computer</li>

                                <li>Provides call handling options including: answer incoming call, release call before or after answering, initiate call, place call on hold, retrieve held call, transfer call to another contact or telephone number, view call
                                    history and list of missed calls. </li>
                            </ul>

                            <div class="download know-more ">
                                <a href="http://www.imperiumapp.com/pdf/ImperiumCTIConnectFinal.pdf" target="blank">
                                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download Brochure
                                </a>
                            </div>


                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="service-area section-big section-padding service">
        <div class="container">
            <div class="topcontent">
                <div class="row">
                    <div class="col-md-12">
                        <h2> Explore More </h2>
                        <div class="overview explore">

                            <ul>

                                <li class="column">
                                    <img id="myImg2"  class="myImg" src="{{asset('image/imcc_architecture.png')}}"
                                    alt="CRM - Architecture"
                                     />
                                    <p>CRM - Architecture </p>
                                </li>


                                <li class="column">
                                    <img  id="myImg"  class="myImg" src="{{asset('image/imcc_flow.png')}}" 
                                    alt="CRM - Flow" />
                                    <p>CRM - Flow </p>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






 <!-- Trigger the Modal -->

<!-- The Modal -->
<div id="myModal" class="modall">
  <!-- The Close Button -->
  <span class="closee" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
  <!-- Modal Content (The Image) -->
  <img class="modall-content" id="img01">
  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div> 



<script>
var modal = document.getElementById('myModal');
var img = document.getElementById('myImg');
var img2 = document.getElementById('myImg2');
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

var span = document.getElementsByClassName("close")[0];
span.onclick = function() { 
    modal.style.display = "none";
}
</script>


@endsection
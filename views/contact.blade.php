@extends('layouts.app')
@section('meta')
{!!Helper::setMetaTags($meta)!!}
@stop
@section('content')
<!--===== BREADCROUMB AREA =====-->
<div class="lite-breadcroumb-area innerbanner" id="contactbanner">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1>Contact</h1>
            <div class="breadcroumb">
               <a href="https://imperiumapp.com">Home</a> >
               <span class="current">Contact</span>
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
                  <h2>Reach us</h2>
                  <div class="alert hidden" id="contact-message"></div>
               </div>
               <div class="contactform">
                  <div class="contact-form-area">
                     <!--<form name="enquiryForm" id="contactForm1" class="cta-signup-form">-->
                     <!--   <div class="alert hidden" id="contact-message"></div>-->
                     <!--   <div class="row">-->
                     <!--      <div class="col-md-6">-->
                     <!--         <div class="form-group">-->
                     <!--            <input type="text" placeholder="First Name" class="form-control" name="firstName" data-validation="required" required/>-->
                     <!--         </div>-->
                     <!--      </div>-->
                     <!--      <div class="col-md-6">-->
                     <!--         <div class="form-group">-->
                     <!--            <input type="text" placeholder="Company Name" class="form-control" name="companyName" data-validation="required" required/>-->
                     <!--         </div>-->
                     <!--      </div>-->
                     <!--      <div class="col-md-6">-->
                     <!--         <div class="form-group">-->
                     <!--            <input type="email" id="emailId" name="emailId" class="form-control" placeholder="Email ID" data-validation="email" required />-->
                     <!--         </div>-->
                     <!--      </div>-->
                     <!--      <div class="col-md-6">-->
                     <!--         <div class="form-group">-->
                     <!--            <input type="text" placeholder="Designation" class="form-control" name="designation" data-validation="required" required/>-->
                     <!--         </div>-->
                     <!--      </div>-->
                     <!--      <div class="col-md-12">-->
                     <!--         <div class="form-group">-->
                     <!--            <input type="text" id="contactNumber" name="contactNumber" class="form-control" placeholder="Contact Number" data-force-validation-if-hidden="true" data-validation="custom" data-validation-regexp="^[0-9]{6,12}$" required/>-->
                     <!--         </div>-->
                     <!--      </div>-->
                     <!--      <div class="col-md-12">-->
                     <!--         <div class="form-group">-->
                     <!--            <textarea id="form_message" name="message" class="form-control" placeholder="Interested in" rows="7"></textarea>-->
                     <!--         </div>-->
                     <!--      </div>-->
                     <!--      <div class="col-md-12">-->
                     <!--         <input class="filled-btn" value="Submit" type="submit">-->
                     <!--      </div>-->
                     <!--   </div>-->
                     <!--</form>-->
                     
                     <div class="contactform">
    <div class="contact-form-area">
        <div class="form-group">
            <input type="text" id="firstName" class="form-control" placeholder="First Name" required />
        </div>
        <div class="form-group">
            <input type="text" id="companyName" class="form-control" placeholder="Company Name" required />
        </div>
        <div class="form-group">
            <input type="email" id="emailId" class="form-control" placeholder="Email ID" required />
        </div>
        <div class="form-group">
            <input type="text" id="designation" class="form-control" placeholder="Designation" required />
        </div>
        <div class="form-group">
            <input type="text" id="contactNumber" class="form-control" placeholder="Contact Number" required />
        </div>
        <div class="form-group">
            <textarea id="message" class="form-control" placeholder="Interested in" rows="7" required></textarea>
        </div>
        <div class="form-group">
            <button id="submitContactForm" class="filled-btn">Submit</button>
        </div>
    </div>
</div>

                  </div>
                  <br>
                  <br>
               </div>
               <div class="addresssec">
                  <h4> Feel free to contact us. Listed below our company addresses and contact details. </h4>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="addressset">
                           <div class="topbar">
                              <h3> <i class="fa fa-building-o" aria-hidden="true"></i> Head Office </h3>
                           </div>
                           <div class="mainadress">
                              <p> <i class="fa fa-map-marker" ></i> :
                                 <span> 1504, 1 Lake Plaza,Cluster T, Jumeirah Lakes Towers,P.O.Box: 73916, Dubai, UAE </span>
                                 <br>
                                 <i class="fa fa-mobile" aria-hidden="true"></i> : +97142443417<br>
                                 <i class="fa  fa-fax sm" aria-hidden="true"></i> :  +97142443419<br>
                                 <i class="fa fa-envelope-o sm" aria-hidden="true"></i> : <a href="mailto:sales@imperiumapp.com ">  sales@imperiumapp.com  </a>
                              </p>
                           </div>
                        </div>
                     </div>
                     <!-- <div class="col-md-6">
                        <div class="addressset">
                           <div class="topbar">
                              <h3> <i class="fa fa-building-o" aria-hidden="true"></i> Dubai  </h3>
                           </div>
                          
                           <div class="mainadress">
                              <p> <i class="fa fa-map-marker" ></i> :
                                 <span> P.O. Box No : 342055, Dubai Silicon Oasis, Tech Hub 2 -240,Dubai, UAE.  </span>
                                 <br>
                                 <i class="fa fa-mobile" aria-hidden="true"></i> : +9714 3202737<br>
                                 <i class="fa  fa-fax sm" aria-hidden="true"></i> : +9714 3202747<br>
                                 <i class="fa fa-envelope-o sm" aria-hidden="true"></i> : <a href="mailto:sales@imperiumapp.com"> sales@imperiumapp.com </a>
                              </p>
                           </div>
                        
                        
                        
                        </div>
                        </div> -->
                     <div class="col-md-6">
                        <div class="addressset">
                           <div class="topbar">
                              <h3><i class="fa fa-building-o" aria-hidden="true"></i> Singapore  </h3>
                           </div>
                           <div class="mainadress">
                              <p>
                                 <i class="fa fa-map-marker" ></i> :
                                 <span> 21 TAN QUEE LAN STREET,
#02-04 HERITAGE PLACE,
SINGAPORE 188108</span>  <br/>
                                 <i class="fa  fa-fax sm" aria-hidden="true"></i> : +6567730274<br>
                                 <i class="fa fa-envelope-o sm" aria-hidden="true"></i> : <a href="mailto:sales@imperiumapp.com"> sales@imperiumapp.com  </a>
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="addressset">
                           <div class="topbar">
                              <h3><i class="fa fa-building-o" aria-hidden="true"></i>  India   </h3>
                           </div>
                           <div class="mainadress">
                              <p>
                                 <i class="fa fa-map-marker" ></i>:
                                 <span> 47/2 Ashok Nagar, 53rd Street, Indira Colony,Chennai, TamilNadu 600083.</span>  <br/>
                                 <i class="fa fa-mobile" aria-hidden="true"></i> :+91 44 421 22440<br>
                                 <i class="fa fa-envelope-o sm" aria-hidden="true"></i> : <a href="mailto:sales@imperiumapp.com">  sales@imperiumapp.com  </a>
                              </p>
                           </div>
                        </div>
                     </div>


                     <div class="col-md-6">
                        <div class="addressset">
                           <div class="topbar">
                              <h3><i class="fa fa-building-o" aria-hidden="true"></i>  India   </h3>
                           </div>
                           <div class="mainadress">
                               <p>
                                            <i class="fa fa-map-marker"></i>:
                                            <span> Imperium Software Technologies,
                                                #870, 1st Floor, Geethanjali House,BDA Layout, New Thippassandra, Bengaluru, Karnataka 560075</span> <br />
                                            <i class="fa fa-mobile" aria-hidden="true"></i> :+91 80 416 22894<br>
                                            <i class="fa fa-envelope-o sm" aria-hidden="true"></i> : <a
                                                href="mailto:sales@imperiumapp.com"> sales@imperiumapp.com </a>
                                        </p>
                           </div>
                        </div>
                     </div>









                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--===== GOOGLE MAP AREA ======-->
<div class="contact-location-area">
   <div class="container-fluid">
      <div class="row">
         <div id="map" style="width: 100%; height: 400px;"></div>
      </div>
      <!--/.row-->
   </div>
   <!--/.container-->
</div>
<style>
   #contact {
   display: none;
   }
   #contactt {
   display: none;
   }
   .subscription-area {
   display: none;
   }
</style>
<script>
 $(document).ready(function () {
    // When the submit button is clicked
    $("#submitContactForm").on("click", function (event) {
        event.preventDefault(); // Prevent the default behavior
        
        // Collect the values from the input fields
        var firstName = $("#firstName").val();
        var companyName = $("#companyName").val();
        var emailId = $("#emailId").val();
        var designation = $("#designation").val();
        var contactNumber = $("#contactNumber").val();
        var message = $("#message").val();
        
        var blockedDomains = ["gmail.com", "outlook.com", "hotmail.com", "yahoo.com"];
        var emailDomain = emailId.split("@")[1]?.toLowerCase();
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
         
         if (blockedDomains.includes(emailDomain)) {
            alert("Please use your company email address. Personal email addresses are not allowed.");
            return;
         }

          if (!emailPattern.test(emailId)) {
            alert("Please enter a valid email address.");
            return;
         }
         
        // Check if required fields are filled
        if (!firstName || !companyName || !emailId || !designation || !contactNumber || !message) {
            alert("Please fill in all required fields.");
            return;
        }

        // Clean the contact number (remove unwanted characters)
        contactNumber = contactNumber.replace(/[-() ]+/g, ""); // Clean up the number
        
        // Disable the submit button to prevent multiple submissions
        $("#submitContactForm").prop('disabled', true);

        // Show a message to the user
        $("#contact-message").removeClass('hidden').addClass('alert-success').html('Submitting your form...');

        // Prepare the data for submission
        var leadData = {
            firstName: firstName,
            companyName: companyName,
            emailId: emailId,
            designation: designation,
            contactNumber: contactNumber,
            message: message
        };

        // Define the API key
        var apiKey = "1mper1umapp2023";

        // Perform the AJAX request
        $.ajax({
            url: 'https://inaipi.ae/imperiumapp/email.php', // Your target URL here
            type: 'POST',
            headers: {
                "X-Auth-Key": apiKey // Include the API key in the headers
            },
            contentType: 'application/x-www-form-urlencoded',
            crossDomain: true, // Enable cross-domain requests if necessary
            data: {
                meta: JSON.stringify(leadData), // Send form data as a JSON string
                subject: "Enquiry Form Submission", // Replace with dynamic subject if needed
                message: message // Send the message field data
            },
            success: function (res) {
                console.log(res); // Log the response to the console

                // Re-enable the submit button after the request completes
                $("#submitContactForm").prop('disabled', false);

                // Reset the input fields
                $("#firstName, #companyName, #emailId, #designation, #contactNumber, #message").val('');

                // Show success or error message
                if (res === 'Email sent successfully!') {
                    $("#contact-message").removeClass('alert-warning').addClass('alert-success').html('Data submitted successfully, our team will connect with you shortly!');
                } else {
                    $("#contact-message").removeClass('alert-success').addClass('alert-warning').html('Error: ' + res);
                }
            },
            error: function (xhr, status, error) {
                console.log(error); // Log the error for debugging

                // Re-enable the submit button in case of error
                $("#submitContactForm").prop('disabled', false);

                // Display an error message
                $("#contact-message").removeClass('alert-success').addClass('alert-warning').html('An error occurred while submitting your form. Please try again.');
            }
        });
    });
});

</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbeNGQFa2QdvVU40M6Fc8JH6m5__tkaYk&sensor=false&extension=.js?v=3.exp&signed_in=true&libraries=places"></script>
<script src="{{asset('js/customgoogle-map.js?v=1.3.6')}}"></script>
@endsection
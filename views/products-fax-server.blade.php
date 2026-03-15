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
                    <h1>Fax Server</h1>
                    <div class="breadcroumb">
                        <a href="{{ url('') }}">Home</a> &gt;
                        <a href="javascript:;">Products</a> &gt;
                        <span class="current">Fax-Solutions</span>
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
                            Imperium Fax Server</h2>
                    </div>
                    <p>

                        Fax is still the most trusted platform for the secure and legal exchange of documents and information in the modern world. Millions of faxes are sent and received by people and organizations each day. Leverage your PBX resources and reduce costs with
                        a FOIP solution with Imperium Faxserver.
                    </p>
                    <div class="big-img">
                        <img src="{{asset('image/IMPERIUMFAXDIAGRAM.jpg')}}" alt="Imperium">
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
                <h2> Key Features &amp; Benefits </h2>

                <div class="overview">
                    <ul>
                        <li>Send and Receive Faxes like email.</li>
                        <li>Avoid unnecessary printing and reduce consumable costs.</li>
                        <li>Precise tracking of Fax Communications.</li>
                        <li>Improved customer response time.</li>
                        <li>Freedom in sending/receiving fax, anytime, anywhere.</li>
                        <li>Direct faxes to respective user / departments using DID Routing </li>
                        <li>Maintain a non-alterable legal image in digital format.</li>
                        <li>Secure, confirmed document delivery and accountability</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</section>



@endsection
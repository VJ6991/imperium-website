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
                    <h1>IVR Solutions</h1>
                    <div class="breadcroumb">
                        <a href="{{ url('') }}">Home</a> &gt;
                        <a href="javascript:;">Products</a> &gt;
                        <span class="current">IVR-Solutions</span>
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
                        <h2> Interactive Voice Response Solutions </h2>
                        <h3> Leverage The Potential To Serve Customers The Best Way... </h3>
                    </div>
                    <img class="right-img" src="{{asset('image/avaya-big.jpg')}}"  alt="Imperium">
                    <p>
                        An IVR System enables customer-centric businesses to leverage the potential of the voice and speech enablement technologies to increase deployment of self service automation to serve a multitude of customers - global, international, and multi-lingual.
                        Further, IVR System gives the organizations to speech enable new services and web applications across their IT infrastructure.
                    </p>
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
                <h2> Highlights </h2>

                <div class="overview">
                    <ul>
                        <li>Intended to service high call volumes, reduce cost and improve the customer experience, 24x 7. </li>

                        <li>Eliminates the need for queuing and live agent, thereby allowing quick resolution time for queries.
                        </li>
                        <li>Enabling IVR System translates into more time for agents to deal with complex interactions, avoiding basic inquiries that mostly require toggle responses ( Yes/No) or customer details.</li>

                        <li>Enables customer prioritization, depending on individual customers and their service status. Prioritization could also be based on the DNIS and call reason.</li>

                        <li> Logging of call details information in database for auditing, performance report, and future IVR system enhancements.</li>

                        <li> Imperium CTI application allows a contact center or organization to gather information about the caller as a means of directing the inquiry to the appropriate agent.</li>

                        <li> Enables transfering information about the individual customer and the IVR dialog from the IVR to the agent desktop using a screen-pop, making for a more effective and efficient service.</li>
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
                        <h2>IVR Benefits </h2>
                        <p>IVR solution enables CC agents to spend quality time on making successful business interactions.</p>

                        <div class="overview">
                            <ul>
                                <li><b>Automation of operations </b>
                                    <p> IVR takes care of callers seeking account balances, process transactions, balance transfers, flight timings, or just promotional schemes. </p>
                                </li>
                                <li><b>Efficient management of agent workforce </b>
                                    <p>Reduces the need for additional expenses on staffing and training.</p>
                                </li>
                                <li><b>IVR Designer </b>
                                    <p>With IVR designer, configuration of call flows on-the-fly for end-to-end caller experience is easy and simple. Intuitive drag and drop abilities are an added advantage as they do not require knowledge of complicated
                                        programming constructs.</p>
                                </li>
                                <li><b>3rd-Party Database Integration</b>
                                    <p>Ability to integrate with third party databases allows agents to obtain the relevant and accurate information quickly. </p>
                                </li>
                                <li><b>Reduced Wait Time</b>
                                    <p>IVR enables reduction of caller wait times with the help of flexible call queue management. Accurate information to callers on estimated wait-times offers them the choice of calling back at a specific time and hence
                                        saves time during their busy schedule. </p>
                                </li>
                                <li><b>Call Que Monitoring</b>
                                    <p>Supervisors can monitor and manage call queues to ensure that agents are uniformly distributed across queues. </p>
                                </li>
                                <li><b>Real-Time and Updated Information </b>
                                    <p>IVR reduces the dependency of humans for information retrieval and record searching, ensuring higher productivity and allocations of resources for more critical tasks. </p>
                                </li>



                            </ul>
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
                        <h2>IVR Platforms </h2>
                        <p>Avaya Voice Portal, Avaya VMPRO &amp; ACCS </p>


                    </div>
                </div>
            </div>
        </div>
    </section>







@endsection
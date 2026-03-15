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
                    <h1>Budget Control System  </h1>
                    <p>
                       Telecommunication is known to incur the highest business expense upsetting the fiscal plan of your enterprise.
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
                    <div class="col-md-12">
                         <h2>Imperium Budget Control Module</h2>
                    </div>
                    <div class="col-md-7">
                        <p>
                            Telecommunication is known to incur the highest business expense upsetting the fiscal plan of your enterprise. The Imperium Budget Control module is the ideal solution to this. It impose a definite and well-structure budget mechanism on your Telephone system to strategically enhance budget planning. <br>
                            There are no unforeseen expenses or additional bills to pay. This system itself instills efficiency in performance of the agents, better operational goals and lends a lot more accountability, transparency on telephony usage and costs. <br>
                            Imperium Call Budgeting can protect your business from the threat of toll fraud and internal phone abuse through real-time alerts on all possible users.
                            
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('image/products/cm.jpg') }}">
                    </div>
                    
                        <!-- <img class="pull-right img-responsive" src="{{ asset('image/products/cm.jpg') }}"  alt="Imperium"> -->
                    <div class="col-md-12 overview">
                        <h3>
                            Key Features & Benefits
                        </h3>
                        <ul>
                            <li>
                                Budget analysis reports to optimize the allocation and overall budget.
                            </li>
                            <li>
                                Alerts based on real time usage.
                            </li>
                            <li>
                                Email alert to the user and concerned department upon reaching the allocated call limit.
                            </li>
                            <li>
                                Blocks extension based on budget.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
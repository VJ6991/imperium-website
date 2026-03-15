@extends('layouts.app')

@section('meta')
    {!!Helper::setMetaTags($meta)!!}
@stop

@section('content')
    <div class="lite-breadcroumb-area innerbanner" id="partnerbanner" style="    background-image: url({{asset('image/partners.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>ListenIQ</h1>
                <div class="breadcroumb">
                    <a href="{{ url('') }}">Home</a> &gt;
                    <a href="javascript:;">Partners</a> &gt;
                    <span class="current">ListenIQ</span>
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
                    <h2>Imperium Partner: ListenIQ</h2>
                </div>
                <p>
                    We have partnered with ListenIQ to deliver advanced social listening, reputation intelligence, and analytics capabilities. Through this collaboration, organizations can monitor digital conversations, analyze customer sentiment, and uncover actionable insights from real-time data. This enables businesses to make informed decisions, strengthen brand reputation, and enhance customer engagement across the digital ecosystem.
                </p>
                <p> &nbsp;</p>
            </div>
            
            <div class="col-md-4 sidesec">
            <div class="box-content">
                    <h3>PARTNER | LISTENIQ </h3>
                <img class="right-img" src="{{asset('image/listeniq.png')}}"  alt="ListenIQ">
            </div>

                <div class="box-content">
                    <h4> Become a reseller </h4>
                    <p>
                        Becoming a reseller for Imperium products brings with it a host of benefits and we invite you to be a part of our success. Please fill in the application form below and our Imperium representative will contact you to discuss our alliance.
                    </p>
                    <p class="text-right">
                        <a href="{{url('registration')}}">Click here to register </a> </p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection

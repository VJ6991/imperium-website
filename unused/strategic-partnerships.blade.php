@extends('layouts.app')

@section('meta')
    {!!Helper::setMetaTags($meta ?? ['title' => 'Strategic Partnerships | Imperium', 'description' => 'Transforming Customer Experience Through Strategic Partnerships.'])!!}
@stop

@section('content')
<style>
/* Custom Layout for Strategic Partnerships matching UX */
.sp-hero {
    position: relative;
    background-image: url('{{ asset('image/partners.png') }}'); /* Fallback / standard hero image */
    background-size: cover;
    background-position: center;
    padding: 100px 0;
    color: #fff;
    text-align: center; /* Changed from left to center */
}
/* Overlay for hero */
.sp-hero::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(0, 0, 0, 0.6);
}

.sp-hero-container {
    position: relative;
    z-index: 2;
    max-width: 1100px;
    margin: 0 auto;
    padding: 0 20px;
}

.sp-hero-title {
    font-size: 46px;
    font-weight: 400; /* Match Case Studies */
    margin-bottom: 20px;
    color: #ffffff; /* Explicitly forced white */
    text-transform: capitalize;
}

.hero h1 {
    font-size: 46px; /* Match Case Studies */
    font-weight: 400; /* Match Case Studies */
    margin-bottom: 20px;
    color: #ffffff;
    text-transform: capitalize;
}

.sp-intro {
    padding: 60px 20px;
    max-width: 1100px;
    margin: 0 auto;
}

.sp-intro p {
    font-size: 16px; /* Match Case Studies Breadcroumb */
    color: #ffffff;
    max-width: 800px;
    margin: 0 auto;
}

.sp-intro-text {
    font-size: 18px;
    line-height: 1.7;
    color: #4a4a4a;
    font-family: 'PT Sans', sans-serif;
}

.sp-partner-row {
    padding: 50px 20px;
    border-bottom: 1px solid #eaeaea;
    transition: background 0.3s ease;
    background: #fff;
    font-family: 'PT Sans', sans-serif;
}

.sp-partner-row:last-child {
    border-bottom: none;
}

.sp-partner-row:hover {
    /* Gradient orange on hover to match screenshot */
    background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(255,237,218,1) 100%);
}

.sp-partner-content {
    max-width: 1100px;
    margin: 0 auto;
    text-align: left;
}

.sp-logo-wrapper {
    margin-bottom: 15px;
}

.sp-logo {
    max-height: 35px;
    display: inline-block;
}

.sp-text {
    font-size: 15px; /* Match Case Studies global body font */
    line-height: 24px; /* Match Case Studies global body line height */
    color: #424242; /* Match Case Studies global body color */
    margin-bottom: 30px;
}

.sp-section-title {
    text-align: center;
    font-size: 38px; /* Match Case Studies .section-title h2 */
    font-weight: 700; /* Match Case Studies .section-title h2 */
    text-transform: capitalize; /* Match Case Studies .section-title h2 */
    color: #212121; /* Match Case Studies global header color */
    margin-bottom: 50px;
}

.sp-action {
    text-align: center;
    margin-top: 20px;
}

.btn-explore {
    background-color: #ef933a;
    color: #fff !important;
    padding: 10px 30px;
    border-radius: 4px;
    font-weight: bold;
    font-size: 16px;
    text-decoration: none;
    display: inline-block;
    border: none;
    transition: background-color 0.3s;
    box-shadow: 0 4px 10px rgba(239, 147, 58, 0.3);
}

.btn-explore:hover {
    background-color: #e0821c;
    color: #fff;
}
</style>

<div class="sp-hero">
    <div class="sp-hero-container">
        <h1 class="sp-hero-title">Transforming Customer Experience<br>Through Strategic Partnerships</h1>
        <div class="sp-intro" style="padding: 20px 0 0 0;">
            <p class="sp-intro-text" style="color: #ffffff; font-size: 16px;">
                At Imperium, we believe in the power of collaboration to deliver cutting-edge solutions that redefine customer experience. Our strategic partnerships with industry leaders enable us to offer unparalleled services and solutions to our clients. Explore our key partnerships:
            </p>
        </div>
    </div>
</div>

<!-- Avaya -->
<div class="sp-partner-row">
    <div class="sp-partner-content">
        <div class="sp-logo-wrapper">
            <img src="{{ asset('image/partner_new_avaya.png') }}" alt="Avaya" class="sp-logo" style="max-height: 40px;">
        </div>
        <p class="sp-text">
            As an Avaya DevConnect Technology Partner, Diamond Partner, and APS Delivery Partner, we are at the forefront of delivering innovative communication solutions. Our partnership allows us to sell Avaya solutions- IP Telephony, UC and CC solutions, while Avaya also resells our groundbreaking solutions to their global partner community. Together, we are driving the future of customer engagement.
        </p>
        <div class="sp-action">
            <a href="javascript:;" class="btn-explore">Explore more</a>
        </div>
    </div>
</div>

<!-- Mondee -->
<div class="sp-partner-row">
    <div class="sp-partner-content">
        <div class="sp-logo-wrapper">
            <img src="{{ asset('image/partner_new_mondee.png') }}" alt="Mondee" class="sp-logo" style="max-height: 35px;">
        </div>
        <p class="sp-text">
            As a Development Partner and System Integrator for Mondee's advanced AI Chatbot solutions, we are pushing the boundaries of AI-driven customer engagement. Our collaboration ensures businesses can leverage cutting-edge chatbot technology to offer personalized, efficient, and seamless customer experiences.
        </p>
        <div class="sp-action">
            <a href="javascript:;" class="btn-explore">Explore more</a>
        </div>
    </div>
</div>

<!-- Konnect Insights -->
<div class="sp-partner-row">
    <div class="sp-partner-content">
        <div class="sp-logo-wrapper">
            <img src="{{ asset('image/partner_new_konnect.png') }}" alt="KONNECT INSIGHTS" class="sp-logo" style="max-height: 30px;">
        </div>
        <p class="sp-text">
            Our partnership with Konnect Insights allows us to offer an all-in-one social media engagement platform that unifies customer care and market insights. This powerful platform enables businesses to monitor, manage, and engage with their audience across multiple channels, ensuring a cohesive and responsive customer experience.
        </p>
        <div class="sp-action">
            <a href="javascript:;" class="btn-explore">Explore more</a>
        </div>
    </div>
</div>

<!-- inaipi -->
<div class="sp-partner-row">
    <div class="sp-partner-content">
        <div class="sp-logo-wrapper">
            <img src="{{ asset('image/partner_new_inaipi.png') }}" alt="inaipi" class="sp-logo" style="max-height: 40px;">
        </div>
        <p class="sp-text">
            We deliver Inaipi's innovative cloud, digital contact center solutions, UCaaS, CCaaS, and SaaS offerings. This partnership enables us to provide our clients with advanced, flexible, and scalable solutions that enhance customer interactions and streamline operations.
        </p>
        <div class="sp-action">
            <a href="javascript:;" class="btn-explore">Explore more</a>
        </div>
    </div>
</div>

<!-- Edaya -->
<div class="sp-partner-row">
    <div class="sp-partner-content">
        <div class="sp-logo-wrapper">
            <img src="{{ asset('image/partner_new_edaya.png') }}" alt="edaya" class="sp-logo" style="max-height: 40px;">
        </div>
        <p class="sp-text">
            We have partnered with Edaya to bring exceptional hospitality solutions that elevate guest experiences. Through this collaboration, we offer state-of-the-art technology that enhances every touchpoint of the guest journey, ensuring satisfaction and loyalty in the hospitality industry.
        </p>
        <div class="sp-action">
            <a href="https://edaya.com" target="_blank" class="btn-explore">Explore more</a>
        </div>
    </div>
</div>

<!-- ListenIQ -->
<div class="sp-partner-row">
    <div class="sp-partner-content">
        <div class="sp-logo-wrapper">
            <img src="{{ asset('image/listeniq.png') }}" alt="ListenIQ" class="sp-logo" style="max-height: 20px;">
        </div>
        <p class="sp-text">
            We have partnered with ListenIQ to deliver advanced social listening, reputation intelligence, and analytics capabilities. Through this collaboration, organizations can monitor digital conversations, analyze customer sentiment, and uncover actionable insights from real-time data. This enables businesses to make informed decisions, strengthen brand reputation, and enhance customer engagement across the digital ecosystem.
        </p>
        <div class="sp-action">
            <a href="https://listeniq.edayaapp.com/" target="_blank" class="btn-explore">Explore more</a>
        </div>
    </div>
</div>

@endsection

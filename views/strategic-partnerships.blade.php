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

@if(isset($partnerships) && !empty($partnerships))
    @foreach($partnerships as $partner)
    <!-- {{ $partner['title'] }} -->
    <div class="sp-partner-row">
        <div class="sp-partner-content">
            <div class="sp-logo-wrapper">
                <img src="{{ asset($partner['logo']) }}" alt="{{ $partner['title'] }}" class="sp-logo" style="max-height: 40px;">
            </div>
            <p class="sp-text">
                {{ $partner['description'] }}
            </p>
            <div class="sp-action">
                <a href="{{ (strpos($partner['link'], 'http') === 0) ? $partner['link'] : url($partner['link']) }}" 
                   class="btn-explore" 
                   @if(strpos($partner['link'], 'http') === 0) target="_blank" @endif>
                   Explore more
                </a>
            </div>
        </div>
    </div>
    @endforeach
@else
    <div class="container text-center py-5">
        <p class="text-muted">No partners found. Manage them in the CMS.</p>
    </div>
@endif

@endsection

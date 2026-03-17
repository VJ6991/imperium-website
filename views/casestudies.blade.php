@extends('layouts.app') @section('meta') {!!Helper::setMetaTags($meta)!!} @stop
@section('content')
<!-- Inner Page Header serction start here -->
<div class="lite-breadcroumb-area innerbanner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Imperium Case Studies</h1>
                <div class="breadcroumb">
                    <a href="{{ url('') }}">Home</a>
                    &gt;
                    <span class="current">Imperium Case Studies</span>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="about" class="service-area section-big section-padding">
    <div class="container">

        <div class="section-title seclink text-center">
            <h2>Imperium Case Studies</h2>
            <p>
                Learn More from Companies Like Yours. Learn how we have significantly improved businesses in the region with efficiently applied solutions.
            <!-- Providing Customer information and tracking history is critical for a debt
                collector where the interactions are legally bound. Avaya IP Office with
                Imperium Debt collection provides reliable and secured environment for Debt
                collection agencies to manage their day-today operations and reporting.Providing
                Customer information and tracking history is critical for a debt collector where
                the interactions are legally bound. Avaya IP Office with Imperium Debt
                collection provides reliable and secured environment for Debt collection
                agencies to manage their day-today operations and reporting. -->
            </p>
        </div>
        <div class="topcontent" id="pagecontainer">
            <ul class="row d-flex flex-wrap" style="display: flex; flex-wrap: wrap; list-style: none; padding: 0;">
                @foreach($casestudies as $cs)
                <li class="col-sm-6 blogcolm d-flex" style="display: flex; margin-bottom: 30px;">
                    <article class="w-100" style="display: flex; flex-direction: column; width: 100%; border: 1px solid #eee; padding: 15px; background: #fff;">
                        <div class="post_featured with_thumb hover_dots">
                            <img
                                src="{{ url($cs['image']) }}"
                                alt="{{ $cs['title'] }}"
                                class="wp-post-image"
                                style="width: 100%; height: 200px; object-fit: cover;">
                        </div>
                        <div class="post_header entry-header">
                            <h2 class="post_title entry-title match-height" style="min-height: 60px; margin-top: 15px;">
                                {{ $cs['title'] }}
                            </h2>
                        </div>
                        <div class="post_content entry-content" style="flex-grow: 1; display: flex; flex-direction: column;">
                            <div class="post_content_inner" style="flex-grow: 1;">
                                <p class="match-desc" style="min-height: 80px;">{{ Helper::limit_words($cs['description'], 30) }}</p>
                            </div>
                            <p style="margin-top: auto; padding-top: 15px;">
                                <a class="more-link sc_button_hover_slide_left" href="{{ url($cs['pdf']) }}" download>
                                Download Case Study</a>
                            </p>
                        </div>
                    </article>
                </li>
                @endforeach
            </ul>
        </div>
    </section>

    @endsection
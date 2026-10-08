@extends('layouts.app')

@section('content')
    <!-- Hero Video -->
    <section id="home" data-section="home" class="hero-video">
        <video autoplay muted loop id="heroVideo">
            <source src="{{ asset('assets/videos/gts-1.mp4') }}" type="video/mp4">
        </video>
        <div class="video-overlay"></div>
    </section>

    <!-- Include Section Blades -->
    @include('pages.aboutus')
    @include('pages.services')
    @include('pages.fleets')
    @include('pages.contactus')
    @include('pages.footer')
@endsection

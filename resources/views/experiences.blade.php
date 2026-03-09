@extends('layouts.app')

@section('content')

    @include('partials.navbar')

    <div style="
        position: fixed;
        bottom: -52%;
        left: 50%;
        transform: translateX(-50%);
        width: 100%;
        z-index: 0;
        pointer-events: none;
        opacity: 0.5;
    ">
        <img src="{{ asset('assets/wave2.png') }}" alt="" style="width: 100%; display: block;">
    </div>

    <div style="
        position: fixed;
        top: -5%;
        left: 50%;
        transform: translateX(-50%);
        width: 100%;
        z-index: 1;
        pointer-events: none;
    ">
        <img src="{{ asset('assets/experience-gradient.png') }}" alt="" style="width: 100%; display: block;">
    </div>

    <div style="position: relative; z-index: 2;">
        <div class="container py-5" style="padding-top: 160px !important;">
            <div class="row align-items-center">
                <div class="col-md-2"></div>

                <div class="col-md-3">
                    <h1 style="color: #ffffff; font-size: 30px; font-weight: 700;">Experiences</h1>
                    <p style="color: #ffffff; font-size: 18px; font-weight: 600;">Last updated March 9, 2026</p>
                    <p style="color: rgba(255,255,255,0.75); font-size: 12px; line-height: 1.6;">
                        Learn all about my recent selected projects,
                        collaborating with regional, national, and
                        international brands across different fields.
                    </p>
                </div>

                <div class="col-md-2"></div>

                <div class="col-md-3">
                    <h2 style="color: #ffffff; font-size: 18px; font-weight: 700;">Behance Portfolio</h2>
                    <p style="color: rgba(255,255,255,0.75); font-size: 12px; line-height: 1.6;">
                        Visit my Behance portfolio for indepth balabla
                    </p>
                </div>

                <div class="col-md-2"></div>
            </div>
        </div>

        @foreach($experiences as $experience)
            <hr style="border-color: rgba(255,255,255,0.15); margin: 0 0 16px;">
            <h3 style="color: #ffffff; font-size: 18px; font-weight: 600; margin: 0 0 10px;">{{ $experience->experience }}</h3>
            <p style="color: rgba(255,255,255,0.75); font-size: 14px; line-height: 1.6; margin: 0;">
                {{ $experience->placement }} | {{ $experience->eventname }} | {{ $experience->monthyear }}
            </p>
        @endforeach
    </div>

@endsection
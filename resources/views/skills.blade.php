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
        <img src="{{ asset('assets/skills-gradient.png') }}" alt="" style="width: 100%; display: block;">
    </div>

    <div style="position: relative; z-index: 2;">

        {{-- Header Section --}}
        <div class="container py-5" style="padding-top: 160px !important;">
            <div class="row align-items-center">
                <div class="col-md-2"></div>

                <div class="col-md-3">
                    <h1 style="color: #ffffff; font-size: 30px; font-weight: 700;">{{ $pageHeader->header }}</h1>
                    <p style="color: #ffffff; font-size: 18px; font-weight: 600;">Last updated {{ $pageHeader->updated_date }}</p>
                    <p style="color: rgba(255,255,255,0.75); font-size: 12px; line-height: 1.6;">{{ $pageHeader->subheader }}</p>
                </div>

                <div class="col-md-2"></div>

                <div class="col-md-3">
                    <h2 style="color: #ffffff; font-size: 18px; font-weight: 700;">{{ $pageHeader->cta_header }}</h2>
                    <p style="color: rgba(255,255,255,0.75); font-size: 12px; line-height: 1.6;">{{ $pageHeader->cta_subheader }}</p>
                </div>

                <div class="col-md-2"></div>
            </div>
        </div>

        {{-- Skills Grid --}}
        <div class="container pb-5">
            <div class="row">

                <div class="col-md-2"></div>

                <div class="col-md-8">
                    <div class="row g-3">

                        @foreach($skills as $skill)
                        <div class="col-md-6">
                            <div style="
                                border: 1px solid rgba(255,255,255,0.15);
                                border-radius: 20px;
                                padding: 24px;
                                height: 100%;
                                background-color: rgba(66, 66, 66, 0.13);
                                backdrop-filter: blur(20px);
                                -webkit-backdrop-filter: blur(20px);
                            ">
                                <img src="{{ asset('assets/' . $skill->logo) }}" alt="{{ $skill->name }}" style="width: 40px; height: 40px; object-fit: contain; margin-bottom: 16px;">
                                <h3 style="color: #ffffff; font-size: 18px; font-weight: 600; margin: 0 0 10px;">{{ $skill->name }}</h3>
                                <p style="color: rgba(255,255,255,0.75); font-size: 14px; line-height: 1.6; margin: 0;">{{ $skill->description }}</p>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

                <div class="col-md-2"></div>

            </div>
        </div>

    </div>

@endsection
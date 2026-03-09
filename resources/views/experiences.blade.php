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

        @foreach($experiences as $experience)
            <div class="container pb-5 px-3 px-md-0">
                <div class="row">

                    <div class="col-md-2"></div>

                    <div class="col-md-8">
                        <div class="d-flex align-items-start gap-3">

                            <div class="d-none d-md-flex flex-row align-items-center gap-2" style="padding-top: 4px; min-width: 100px;">
                                <span style="color: rgba(255,255,255,0.75); font-size: 13px; white-space: nowrap;">{{ $experience->monthyear }}</span>
                                <span style="color: rgba(255,255,255,0.75); font-size: 16px;">◉</span>
                            </div>

                            <div style="
                                border: 1px solid rgba(255,255,255,0.15);
                                border-radius: 20px;
                                overflow: hidden;
                                width: 100%;
                                background-color: rgba(66, 66, 66, 0.13);
                                backdrop-filter: blur(20px);
                                -webkit-backdrop-filter: blur(20px);
                            ">
                                <div style="padding: 20px;">

                                    <div class="d-flex d-md-none align-items-center gap-2 mb-2">
                                        <span style="color: rgba(255,255,255,0.75); font-size: 13px;">{{ $experience->monthyear }}</span>
                                        <span style="color: rgba(255,255,255,0.75); font-size: 16px;">◉</span>
                                    </div>

                                    <h3 style="color: #ffffff; font-size: 22px; font-weight: 700; margin: 0 0 16px;">{{ $experience->experience }}</h3>
                                    <hr style="border-color: rgba(255,255,255,0.15); margin: 0 0 16px;">
                                    <p style="color: rgba(255,255,255,0.75); font-size: 15px; line-height: 1.6; margin: 0 0 16px;">{{ $experience->placement }}</p>
                                    <hr style="border-color: rgba(255,255,255,0.15); margin: 0 0 16px;">
                                    <p style="color: rgba(255,255,255,0.75); font-size: 15px; margin: 0;">{{ $experience->eventname }}</p>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        @endforeach

    </div>

@endsection
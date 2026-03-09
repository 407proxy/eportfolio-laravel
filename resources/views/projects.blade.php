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
        <img src="{{ asset('assets/projects-gradient.png') }}" alt="" style="width: 100%; display: block;">
    </div>

    <div style="position: relative; z-index: 2;">
        <div class="container py-5" style="padding-top: 160px !important;">
            <div class="row align-items-center">
                <div class="col-md-2"></div>

                <div class="col-md-3">
                    <h1 style="color: #ffffff; font-size: 30px; font-weight: 700;">Projects</h1>
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

        @foreach($projects as $project)
            <div class="container pb-5">
                <div class="row">

                    <div class="col-md-2"></div>

                    <div class="col-md-8">
                        <div class="d-flex align-items-start gap-3">

                            <div class="d-flex flex-row align-items-center gap-2" style="padding-top: 4px; min-width: 100px;">
                                <span style="color: rgba(255,255,255,0.75); font-size: 13px; white-space: nowrap;">{{ $project->year }}</span>
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
                                <img src="{{ asset('images/project.png') }}" alt="Project" style="width: 100%; height: 300px; object-fit: cover;">

                                <div style="padding: 20px;">
                                    <h3 style="color: #ffffff; font-size: 28px; font-weight: 700; margin: 0 0 16px;">{{ $project->projectname }}</h3>
                                    <hr style="border-color: rgba(255,255,255,0.15); margin: 0 0 16px;">
                                    <p style="color: rgba(255,255,255,0.75); font-size: 15px; line-height: 1.6; margin: 0 0 16px;">
                                        Learn all about my recent selected projects, collaborating with regional, national,
                                        and international brands across different fields.
                                    </p>
                                    <hr style="border-color: rgba(255,255,255,0.15); margin: 0 0 16px;">
                                    <p style="color: rgba(255,255,255,0.75); font-size: 15px; margin: 0;">{{ $project->organization }}</p>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        @endforeach

    </div>
@endsection
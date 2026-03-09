@extends('layouts.app')

@section('content')

<style>
    @keyframes spin {
        from { transform: rotate(0deg); }
        to   { transform: rotate(360deg); }
    }

    .bg-circle {
        animation: spin 12s linear infinite;
        transform-origin: center center;
    }

    .contact-btn {
        background-color: rgba(66, 66, 66, 0.13);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255,255,255,0.15);
        border-radius: 16px;
        color: #ffffff;
        text-decoration: none;
        padding: 20px;
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 15px;
        font-weight: 500;
        transition: background-color 0.2s, border-color 0.2s;
    }

    .contact-btn:hover {
        background-color: rgba(66, 66, 66, 0.30);
        border-color: rgba(255,255,255,0.3);
        color: #ffffff;
    }

    .contact-btn .icon {
        font-size: 20px;
        line-height: 1;
    }
</style>

<div class="min-vh-100 text-white d-flex align-items-center px-4 px-md-5 ps-md-5"
style="position: relative; z-index: 3;">
    <div class="row w-100">
        <div class="col-12 col-md-5 ps-5" style="padding-left: 8% !important;">

            <img src="{{ asset($info->image) }}" alt="Logo" width="40" class="mb-4">

            <div class="mt-5"></div>

            <div class="mb-4">
                <h1 class="text-white mb-0" style="font-size: clamp(1.618rem, 2.43vw, 2.1rem);">
                    {{ $pageHeader->header }}</h1>
                <div class="mt-2"></div>

                <p class="text-white mb-0" style="font-size: clamp(1rem, 1.5vw, 1.3rem); color: rgba(255,255,255,0.75) !important;">
                    {{ $pageHeader->subheader }}
                </p>
            </div>

            <a href="{{ route('home') }}"
            class="text-white mt-2 d-inline-block"
            style="font-size: clamp(1rem, 1.5vw, 1.3rem); text-decoration: underline; text-underline-offset: 6px;">
                → Back to Home
            </a>

            <div class="mt-5"></div>

            <div class="row g-3" style="max-width: 420px;">

                <div class="col-6">
                    <a href="mailto:{{ $contact->email ?? '#' }}" class="contact-btn">
                        <span class="icon">✉</span>
                        <span>Email</span>
                    </a>
                </div>

                <div class="col-6">
                    <a href="{{ $contact->linkedin ?? '#' }}" target="_blank" class="contact-btn">
                        <span class="icon">in</span>
                        <span>LinkedIn</span>
                    </a>
                </div>

                <div class="col-6">
                    <a href="{{ $contact->behance ?? '#' }}" target="_blank" class="contact-btn">
                        <span class="icon">Bē</span>
                        <span>Behance</span>
                    </a>
                </div>

                <div class="col-6">
                    <a href="{{ $contact->github ?? '#' }}" target="_blank" class="contact-btn">
                        <span class="icon">⌥</span>
                        <span>GitHub</span>
                    </a>
                </div>

            </div>

        </div>
    </div>

    {{-- Grid --}}
    <img src="{{ asset('assets/grid.png') }}"
        style="
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            z-index: 4;
            pointer-events: none;
            opacity: 1;
        ">

    {{-- Circle gradient --}}
    <img src="{{ asset('assets/circle-gradient.png') }}" class="bg-circle"
        style="
            position: fixed;
            bottom: -52%;
            right: -52%;
            width: clamp(400px, 800vw, 1600px);
            z-index: 1;
            pointer-events: none;
        ">

    {{-- Wave --}}
    <img src="{{ asset('assets/wave.png') }}"
    style="
        position: fixed;
        bottom: -16%;
        right: 0;
        width: min(75vw, 100%);
        z-index: 2;
        pointer-events: none;
        -webkit-mask-image: linear-gradient(to right, transparent 0%, black 30%);
        mask-image: linear-gradient(to right, transparent 0%, black 30%);
    ">

</div>

@endsection
@extends('layouts.app')

@section('content')

<style>
    body { background-color: #0a0a0a; }
    .display-4 { font-size: clamp(2.6rem, 10vw, 3.4rem); }

    #rotating-title {
        transition: opacity 0.3s ease;
    }

    @keyframes spin {
        from { transform: rotate(0deg); }
        to   { transform: rotate(360deg); }
    }

    .bg-circle {
        animation: spin 12s linear infinite;
        transform-origin: center center;
    }

</style>

<div class="min-vh-100 text-white d-flex align-items-center px-4 px-md-5 ps-md-5" style="position: relative; z-index: 3;">
    <div class="row w-100">
        <div class="col-12 col-md-6 ps-5" style="padding-left: 8% !important;">

            <img src="{{ asset($info->image) }}" alt="Logo" width="52" class="mb-4">

            <div class="mb-4">
                <h1 class="display-4 fw-normal lh-1 mb-3">{{ $info->name }}</h1>
                <p class="text-white-50 small mb-0">{{ $info->subheader }}</p>
            </div>

            <p class="text-white-50 mb-0" style="font-size:0.72rem">
                *<span id="rotating-title">{{ $info->titles[0] }}</span>
            </p>

        </div>
    </div>

    {{-- Grid: top of screen, full width --}}
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

    {{-- Circle gradient: behind the wave --}}
    <img src="{{ asset('assets/circle-gradient.png') }}" class="bg-circle"
        style="
            position: fixed;
            bottom: -52%;
            right: -52%;
            width: clamp(400px, 800vw, 1600px);
            z-index: 1;
            pointer-events: none;
        ">

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

    <div class="d-none">
        <a href="{{ route('skills') }}">Skills</a>
        <a href="{{ route('projects') }}">Projects</a>
        <a href="{{ route('experience') }}">Experience</a>
    </div>
</div>

<script>
    const titles = @json($info->titles);
    let index = 0;
    const el = document.getElementById('rotating-title');

    setInterval(() => {
        index = (index + 1) % titles.length;
        el.style.opacity = 0;
        setTimeout(() => {
            el.textContent = titles[index];
            el.style.opacity = 1;
        }, 300);
    }, 4000);
</script>

@endsection
@extends('layouts.app')

@section('content')

<style>
    body { background-color: #0a0a0a; }
    .display-4 { font-size: clamp(2.6rem, 10vw, 3.4rem); }

    .hero-wrap { padding: 25% 25% 50% 25%; }
    .hero-content { width: 100%; }

    @media (min-width: 768px) {
        .hero-wrap { padding: 10%; }
        .hero-content { width: 50%; }
    }

    #rotating-title {
        transition: opacity 0.3s ease;
    }
</style>

<div class="d-flex flex-column min-vh-100 text-white hero-wrap justify-content-center">
    <div class="hero-content">

        <img src="{{ asset($info->image) }}" alt="Logo" width="52" class="mb-4">

        <div class="mb-4">
            <h1 class="display-4 fw-normal lh-1 mb-3">{{ $info->name }}</h1>
            <p class="text-white-50 small mb-0">
                {{ $info->subheader }}
            </p>
        </div>

        <p class="text-white-50 mb-0" style="font-size:0.72rem">
            *<span id="rotating-title">{{ $info->titles[0] }}</span>
        </p>

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

    </div>

    <div class="d-none">
        <a href="{{ route('skills') }}">Skills</a>
        <a href="{{ route('projects') }}">Projects</a>
        <a href="{{ route('experience') }}">Experience</a>
    </div>
</div>

@endsection
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
</style>

<div class="d-flex flex-column min-vh-100 text-white hero-wrap justify-content-center">
    <div class="hero-content">

        <img src="{{ asset('logo.png') }}" alt="Logo" width="52" class="mb-4">

        <div class="mb-4">
            <h1 class="display-4 fw-normal lh-1 mb-3">Hey, I'm Dane*</h1>
            <p class="text-white-50 small mb-0">
                Defining how brands grow, expand, and express themselves across modern media.
            </p>
        </div>

        <p class="text-white-50 mb-0" style="font-size:0.72rem">*Champion sa Statistics</p>

    </div>

    <div class="d-none">
        <a href="{{ route('skills') }}">Skills</a>
        <a href="{{ route('projects') }}">Projects</a>
        <a href="{{ route('experience') }}">Experience</a>
    </div>
</div>

@endsection
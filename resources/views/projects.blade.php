@extends('layouts.app')

@section('content')
<div style="background:#000; min-height:100vh; color:#fff; font-family:'Inter',sans-serif; padding: 2rem;">

    {{-- Top Right: Get in touch --}}
    <div class="d-flex justify-content-end mb-4">
        <a href="{{ route('contact') }}" style="color:#fff; text-decoration:underline;">→ Get in touch</a>
    </div>

    {{-- Page Title --}}
    <h1 style="font-size: 5rem; font-weight: 900; margin-bottom: 2rem;">Projects</h1>

    {{-- Table (no borders, minimal) --}}
    <table style="color:#fff; border-collapse:collapse; width:50%;">
        <thead>
            <tr>
                <th style="font-weight:700; padding: 0.25rem 2rem 0.25rem 0;">Project</th>
                <th style="font-weight:700; padding: 0.25rem 2rem 0.25rem 0;">Organization</th>
                <th style="font-weight:700; padding: 0.25rem 2rem 0.25rem 0;">Year</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <td style="padding: 0.25rem 2rem 0.25rem 0;">{{ $project->projectname }}</td>
                <td style="padding: 0.25rem 2rem 0.25rem 0;">{{ $project->organization }}</td>
                <td style="padding: 0.25rem 2rem 0.25rem 0;">{{ $project->year }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Bottom Right: Nav Buttons --}}
    <div class="d-flex justify-content-end gap-2" style="position:fixed; bottom:2rem; right:2rem;">
        <a href="{{ route('home') }}" style="color:#fff; border:1px solid #fff; border-radius:999px; padding:0.4rem 1.2rem; text-decoration:none;">Home</a>
        <a href="{{ route('skills') }}" style="color:#fff; border:1px solid #fff; border-radius:999px; padding:0.4rem 1.2rem; text-decoration:none;">Skills</a>
        <a href="{{ route('experience') }}" style="color:#fff; border:1px solid #fff; border-radius:999px; padding:0.4rem 1.2rem; text-decoration:none;">Experience</a>
        <a href="{{ route('contact') }}" style="color:#fff; border:1px solid #fff; border-radius:999px; padding:0.4rem 1.2rem; text-decoration:none;">Contact</a>
    </div>

</div>
@endsection
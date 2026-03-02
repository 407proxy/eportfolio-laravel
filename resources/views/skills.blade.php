@extends('layouts.app')

@section('content')

    <a href="{{ route('home') }}">Home</a> ...

    <table>
        <tr><th>Skill</th></tr>
        @foreach($skills as $skill)
            <tr><td>{{ $skill->name }}</td></tr>
        @endforeach
    </table>

@endsection
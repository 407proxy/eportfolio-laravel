@extends('layouts.app')

@section('content')

    <a href="{{ route('skills') }}">Skills</a>
    <a href="{{ route('projects') }}">Projects</a>
    <a href="{{ route('experience') }}">Experience</a>

    <table>
        <tr><th>Name</th><td>{{ $info->name }}</td></tr>
        <tr><th>University</th><td>{{ $info->university }}</td></tr>
        <tr><th>Course</th><td>{{ $info->course }}</td></tr>
        <tr>
            <th>Titles</th>
            <td>{{ implode(', ', $info->titles) }}</td>
        </tr>
    </table>

@endsection
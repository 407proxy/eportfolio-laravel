@extends('layouts.app')

@section('content')

    <a href="{{ route('home') }}">Home</a> ...

    <table>
        <tr><th>Projects</th></tr>
        @foreach($projects as $project)
            <tr>
                <td>{{ $project->projectname }}</td>
                <td>{{ $project->organization }}</td>
                <td>{{ $project->year }}</td>
            </tr>
        @endforeach
    </table>

@endsection
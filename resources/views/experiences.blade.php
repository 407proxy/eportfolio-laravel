@extends('layouts.app')

@section('content')

    <a href="{{ route('home') }}">Home</a> ...

    <table>
        @foreach($experiences as $experience)
            <tr>
                <td>{{ $experience->experience }}</td>
                <td>{{ $experience->eventname }}</td>
                <td>{{ $experience->placement }}</td>
                <td>{{ $experience->monthyear }}</td>
            </tr>
        @endforeach
    </table>

@endsection
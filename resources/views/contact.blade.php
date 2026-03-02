@extends('layouts.app')

@section('content')

    <a href="{{ route('home') }}">Home</a> ...

    <table>
        <tr><th>Contact Information</th></tr>
        @foreach($contacts as $contact)
            <tr><td>{{ $contact->name }}</td></tr>
        @endforeach
    </table>

@endsection
@extends('layout')

@section('tittle', $title)

@section('content')
    <h1>SERVICES</h1>
    <ul>
        @foreach ($services as $services)
            <li><p>{{$services['name']}} {{ $services['description'] }}</p></li>
        @endforeach
    </ul>
@endsection
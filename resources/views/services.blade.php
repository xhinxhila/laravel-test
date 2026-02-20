@extends('layout')

@section('tittle', $title)

@section('content')
    <h1>SERVICES</h1>
    <ul>
        @foreach ($services as $services)
            <li>{{$services['name']}} {{ $services['description'] }}</li>
        @endforeach
    </ul>
@endsection
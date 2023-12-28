@extends('layouts.main')

@section('sectionName')
    <h1>About Page</h1>
    <h3>{{$name}}</h3>
    <p>{{$email}}</p>
    <img src="{{$img}}" alt="{{$name}}" class="img-thumbnail rounded-circle">
@endsection

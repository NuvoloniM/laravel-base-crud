@extends('layouts.layout')

@section('title', 'Comic Details')

@section('content')

@include('includes.message')
<div class="container text-center">
    <h1 class="text-primary">{{ $comic->title}}</h1>
    <img src="{{$comic->thumb}}" alt="comic img">
    <h3>{{$comic->price}}€</h3>
    <h3>{{$comic->series}}</h3>
    <h3>{{$comic->type}}</h3>
    <p>{{$comic->description}}</p>
</div>

@endsection
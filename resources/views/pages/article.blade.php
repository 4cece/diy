@extends('layouts.front')

@section('content')
 
    <h3>{{ $articles->title}}</h3>
    <img src="{{$articles->img}}" alt="{{ $articles->title}}">
    <p>{{$articles->content}}</p>

@endsection
@extends('layouts.front')

@section('content')

<h1>Les {{$type->name}}</h1>

<ul>
    @foreach ($type->ingredients as $ingredient)
        <a href=""><li>{{$ingredient->name}}</li></a>
    @endforeach
</ul>
@endsection
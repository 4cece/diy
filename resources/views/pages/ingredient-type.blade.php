@extends('layouts.front')

@section('content')

<h1>liste des {{$type->name}}</h1>

<ul>
    @foreach ($type->ingredients as $ingredient)
        <a href="{{ route('ingredient', $ingredient) }}"><li>{{$ingredient->name}}</li></a>
    @endforeach
</ul>
@endsection
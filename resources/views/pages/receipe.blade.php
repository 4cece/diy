@extends('layouts.front')

@section('content')

<h3>{{$receipe->name}}</h3>
<ul>
    
        @foreach ($receipe->ingredients as $ingredient)
        <li> {{ $ingredient->name }}</li>
        @endforeach
    
</ul>

@endsection
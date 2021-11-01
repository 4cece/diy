@extends('layouts.front')

@section('content')

<h3>{{$receipe->name}}</h3>
<ul>
        @foreach ($receipe->ingredients as $ingredient)
        <li> {{ $ingredient->name }}</li>
        <li>{{$ingredient->pivot->quantity}}</li>
        @endforeach
</ul>



@endsection
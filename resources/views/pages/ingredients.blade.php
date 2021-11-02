@extends('layouts.front')

@section('content')

<h1>LISTE DES INGREDIENTS</h1>


<ol>
    @foreach ($ingredients as $ingredient)
    <li> <a href="/ficheIngredient/{{$ingredient->id}}">{{ $ingredient->name}}</a></li>
  
     @endforeach
</ol>
@endsection

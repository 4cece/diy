@extends('layouts.front')

@section('content')

<h1>LISTE DES INGREDIENTS</h1>
<ol>
    @foreach ($ingredients as $ingredient)
    <li>{{ $ingredient->Name}}</li>
  
     @endforeach
</ol>
@endsection
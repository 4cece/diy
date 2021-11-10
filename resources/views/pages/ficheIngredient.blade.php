@extends('layouts.front')

@section('content')

<p>type d'ingredient: {{$ingredient->ingredientType->name}}
</p>


<h3>{{$ingredient->name}}</h3>
<img src="{{$ingredient->img}}" alt="{{$ingredient->name}}">
<p>{{$ingredient->content}}</p>

<h3>Les propriétés de l'ingrédient</h3>
@foreach ($ingredient->features as $feature)
        <li>{{$feature->name}}</li>
    
@endforeach




@endsection
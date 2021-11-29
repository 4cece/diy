@extends('layouts.front')

@section('content')

<p>type d'ingredient: {{$ingredient->ingredientType->name}}
</p>


<h3>{{$ingredient->name}}</h3>
<img src="{{$ingredient->img}}" alt="{{$ingredient->name}}">
<p>{{$ingredient->content}}</p>

<h3>Les propriétés de l'ingrédient</h3>

@forelse ($ingredient->features as $feature)
<li>{{$feature->name}}</li>
@empty
 il n'y pas de propriété enregistrer
 @endforelse

{{-- <ul>
        @forelse ($receipes as $recette)
        <li>{{$recette->receipe_id}}</li>
        @empty
            Il n'y a pas de recette avec cet ingrédient
        @endforelse
        @foreach ()

</ul> --}}



@endsection
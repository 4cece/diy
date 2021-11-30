@extends('layouts.front')

@section('content')

<div class="text-center mx-auto">


    <h3 class="text-green-dark text-2xl font-Shrikhand m-12">{{$ingredient->name}}</h3>
    <p>type d'ingredient: {{$ingredient->ingredientType->name}}</p>

    <img class="mx-auto p-5" src="{{$ingredient->img}}" alt="{{$ingredient->name}}">
    <p>{{$ingredient->content}}</p>
    
    <h3 class="mt-5">Les propriétés de l'ingrédient</h3>
    
    @forelse ($ingredient->features as $feature)
    <li>{{$feature->name}}</li>
    @empty
     il n'y pas de propriété enregistrer
     @endforelse
</div>


{{-- <ul>
        @forelse ($receipes as $recette)
        <li>{{$recette->receipe_id}}</li>
        @empty
            Il n'y a pas de recette avec cet ingrédient
        @endforelse
        @foreach ()

</ul> --}}



@endsection
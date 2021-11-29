@extends('layouts.front')

@section('content')


<h3 class="text-4xl font-Shrikhand text-center m-5">{{$receipe->name}}</h3>
<p>Category: {{$receipe->category->name}} </p>
<p>Niveau de difficulté : {{$receipe->level->name}} </p>

<div>
    <h2 class="font-Shrikhand m-3">Les ingredients</h2>
    <ul>
        @foreach ($receipe->ingredients as $ingredient)
        <li class="m-1">{{$ingredient->pivot->quantity}} ml de {{ $ingredient->name }}</li>
        @endforeach
    </ul>
</div>


<h4 class="font-Shrikhand m-3"> Les étape de préparation </h4>
@foreach ($receipe->steps as $step)
<p>{{$step->textstep}}</p>


@endforeach

<h4 class="font-Shrikhand m-3">Informations supplémentaires</h4>
<p>{{$receipe->content}}</p>


<h4 class="font-Shrikhand m-3">Les commentaires</h4>
    @forelse ($receipe->comments as $comment)
    <p>{{$comment->title}}</p>
    <p>{{$comment->content}}</p>

    @empty
        <p>Il n'y a pas de commentaire sur cette recette</p>
    @endforelse
   

@endsection
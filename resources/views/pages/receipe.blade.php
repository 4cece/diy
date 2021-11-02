@extends('layouts.front')

@section('content')

<h3>{{$receipe->name}}</h3>
<p>Category: {{$receipe->category->name}} </p>
<p>Niveau de difficulté : {{$receipe->level->name}} </p>
<ul>
        @foreach ($receipe->ingredients as $ingredient)
        <li>Nom: {{ $ingredient->name }}</li>
        <li>quantité: {{$ingredient->pivot->quantity}}</li>
        @endforeach
</ul>

<h4>Préparation</h4>
@foreach ($receipe->steps as $step)
<p>{{$step->content}}</p>
    
@endforeach

<p>Les commentaires</p>
    {{-- @forelse ($receipe->comments as $comment)
    <p>{{$comment->title}}</p>
    @empty
        <p>Il n'y a pas de commentaire sur cette article</p>
    @endforelse --}}
@endsection
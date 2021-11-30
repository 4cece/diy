<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>

    <a href="{{ route ('user_receipe')}}">Retour</a>

    <h3 class="text-4xl font-Shrikhand text-center m-5" >{{$receipe->name}}</h3>
    <p>Category: {{$receipe->category->name}} </p>
    <p>Niveau de difficulté : {{$receipe->level->name}} </p>

    <h3 class="font-Shrikhand m-3">Les ingredients</h3>
    <ul>
        @foreach ($receipe->ingredients as $ingredient)
        <li>Nom: {{ $ingredient->name }}</li>
        <li>quantité: {{$ingredient->pivot->quantity}}</li>
        @endforeach
    </ul>

    <h4 class="font-Shrikhand m-3">Les préparation</h4>
    @foreach ($receipe->steps as $step)
    <p>{{$step->textstep}}</p>
        
    @endforeach

    @auth
        <button>Mofifier</button>
        <button>Suprimer</button>   
    @endauth
    <p>Les commentaires</p>
        @forelse ($receipe->comments as $comment)
        <p>{{$comment->title}}</p>
        <p>{{$comment->content}}</p>

    @empty
        <p>Il n'y a pas de commentaire sur cette recette</p>
    @endforelse

</x-app-layout>

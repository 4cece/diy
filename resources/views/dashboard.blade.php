<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    
    <h3>Liste des articles</h3>
    
    @forelse ($user->articles as $article)
    
        <p>{{ $article->title}}</p>
        <img src="{{$article->img}}" alt="{{ $article->title}}">
        <p>{{ $article->content}}</p>
    @empty
        <p>Il n'y pas d'articles</p> 
    @endforelse

    <h3>Liste des commentaires</h3>

    @forelse ($user->comments as $comment)
        <h4>{{$comment->title}}</h4>
        <p>{{$comment->content}}</p>

    @empty
        <p>Il n'y pas de commentaire</p> 
    @endforelse


    <h3>Liste des recettes</h3>

    @forelse ($user->receipes as $receipe)
        <h4>{{$receipe->name}}</h4>
        <p>{{$receipe->content}}</p>
        <a href="{{ route('receipe', $receipe) }}">Lire la suite</a>
        
    @empty
        <p>Il n'y pas de recettes</p> 
    @endforelse
    
</x-app-layout>

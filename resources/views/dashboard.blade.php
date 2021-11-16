<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-purple leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<div class="grid grid-cols-2">
    <div class="border border-purple bg-green-light ">
        <h3 class="bg-green-dark text-green-light ">Boite à ingredients</h3>
    
        @foreach ($user->ingredients as $ingredient)
            <p class="text-purple">{{$ingredient->name}}, {{$ingredient->pivot->quantity}} ml</p>
        @endforeach
     
    </div>

    <div class="overflow-auto h-150">
        <h3>Liste des recettes</h3>

        @forelse ($receipes as $receipe)
            <div class="grid grid-cols-3 gap-4 border border-purple bg-green-light p-2">
                <img class="w-16 rounded" src="{{$receipe->category->img}}" alt="{{$receipe->category->name}}">
                <h4 class="text-purple">{{$receipe->name}}</h4>
                <a class="text-purple" href="{{ route('user_receipe.show', $receipe) }}">Voir</a>
            </div>  
        @empty
            <p>Il n'y pas de recettes</p> 
        @endforelse
    </div>
    
</div>
    
    
    <h3>Liste des articles</h3>
    
    @forelse ($articles as $article)
    
        <p>{{ $article->title}}</p>
        <img src="{{$article->img}}" alt="{{ $article->title}}">
        <p>{{ $article->content}}</p>
    @empty
        <p>Il n'y pas d'articles</p> 
    @endforelse

    {{-- <h3>Liste des commentaires</h3>

    @forelse ($user->comments as $comment)
        <h4>{{$comment->title}}</h4>
        <p>{{$comment->content}}</p>

    @empty
        <p>Il n'y pas de commentaire</p> 
    @endforelse --}}


    
</x-app-layout>

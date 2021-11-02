<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>

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
        <ul>
            {{-- @foreach ($user->receipes->ingredients as $ingredient)
            <li>
            {{ $ingredient->name }}
            </li>
        @endforeach --}}
        </ul>
    @empty
        <p>Il n'y pas de commentaire</p> 
    @endforelse
    
</x-app-layout>

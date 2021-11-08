<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>

    

    <h3>Liste des articles</h3>
    
    <a href="{{ route ('user_article.create')}}">Créer un nouvel article</a>
    
    @forelse ($user->articles as $article)
    
        <p>{{ $article->title}}</p>
        <img src=" {{Storage::url($article->img)}}" alt="{{ $article->title}}">
        <p>{{ $article->content}}</p>

        <form action="{{ route ('user_article.destroy', $article) }}" method="POST">
        @csrf
        @method('DELETE')
        <a href="{{ route ('user_article.show', $article->id)}}">Montrer</a>
        <a href="{{ route ('user_article.edit', $article->id)}}">Modifier</a>
        <button type="submit">Supprimer</button>
        </form>
    @empty
        <p>Il n'y pas d'articles</p> 
    @endforelse

    <a href="{{route('user_article.store')}}">Ajouter un article</a> 

    
    
</x-app-layout>

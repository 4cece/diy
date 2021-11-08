<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>

    

    <h3>Liste des articles</h3>
    
    
    @forelse ($user->articles as $article)
    
        <p>{{ $article->title}}</p>
        <img src=" {{Storage::url($article->img)}}" alt="{{ $article->title}}">
        <p>{{ $article->content}}</p>
       <a href="{{ route('article', $article) }}">Lire la suite</a>
        
    @empty
        <p>Il n'y pas d'articles</p> 
    @endforelse

    <a href="{{route('user_article.store')}}">Ajouter un article</a> 

    
    
</x-app-layout>

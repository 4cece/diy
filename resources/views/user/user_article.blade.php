<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
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

 
    
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('commentaires') }}
        </h2>
    </x-slot>

    

    <h3>Liste des commentaires</h3>
    
    @forelse ($user->comments as $comment)
    
        <p>{{ $comment->title}}</p>
        <p>{{ $comment->content}}</p>
        <p>Sur l'article : {{$comment->article->title}}</p>
       
        
    @empty
        <p>Il n'y pas d'commentaires</p> 
    @endforelse

 
    
</x-app-layout>
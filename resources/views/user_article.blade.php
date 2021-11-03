<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('user_article') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
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

 
    
</x-app-layout>

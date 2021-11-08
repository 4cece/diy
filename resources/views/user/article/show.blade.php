<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>

    <a href="{{ route ('user_article.index')}}">Retour</a>

    <h3>{{ $article->title}}</h3>
    <img src="{{Storage::url($article->img)}}" alt="{{ $article->title}}">
    <p>{{$article->content}}</p>

    <p>Les commentaires</p>
    @forelse ($article->comments as $comment)
    <p>{{$comment->title}}</p>
    @empty
        <p>Il n'y a pas de commentaire sur cette article</p>
    @endforelse

</x-app-layout>

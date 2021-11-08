@extends('layouts.front')

@section('content')
 
    <h3>{{ $article->title}}</h3>
    <img src="{{Storage::url($article->img)}}" alt="{{ $article->title}}">
    <p>{{$article->content}}</p>

    <p>Les commentaires</p>
    @forelse ($article->comments as $comment)
    <p>{{$comment->title}}</p>
    @empty
        <p>Il n'y a pas de commentaire sur cette article</p>
    @endforelse
    
    @auth
        <button>Mofifier</button>
        <button type="submit">  Suprimer</button>
        
@endauth
    
@endsection
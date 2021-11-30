@extends('layouts.front')

@section('content')
 <div class="text-center mx-auto">
    <h3 class="text-green-dark text-2xl font-Shrikhand m-12">{{ $article->title}}</h3>
    <img class="mx-auto p-5" src="{{Storage::url($article->img)}}" alt="{{ $article->title}}">
    <p>{{$article->content}}</p>
    
    <p class="mt-5">Les commentaires</p>
    @forelse ($article->comments as $comment)
    <p>{{$comment->title}}</p>
    @empty
        <p>Il n'y a pas de commentaire sur cette article</p>
    @endforelse
 </div>



    
@endsection
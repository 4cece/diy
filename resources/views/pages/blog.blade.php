@extends('layouts.front')

@section('content')
<h1>LISTE DES ARTICLES</h1>
<ol>
    @foreach ($articles as $article)
    <h3>{{ $article->title}}</h3>
    <img src="{{ $article->img}}" alt="">
    <div>{{ $article->content}}</div>
    <a href="{{ route('article', $article) }}">Lire la suite</a>
    
     @endforeach
</ol>
@endsection
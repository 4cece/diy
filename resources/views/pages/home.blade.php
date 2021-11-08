
@extends('layouts.front')

@section('content')
        <h1>Welcome</h1>
                 
<h1>Les articles</h1>

@foreach ($lastArticles as $article)
    <a href="/article/{{ $article->id }}">
        <img src="{{Storage::url($article->img)}}" alt="{{ $article->title }}">
    <div>{{ $article->title }}</div>
    </a>
    
@endforeach

<h1>Les recettes</h1>
@foreach ($lastReceipes as $receipe)
    <a href="/receipe/{{$receipe->id}}"><div>{{$receipe->name }}</div></a>
    <ul>    
    @foreach ($receipe->ingredients as $ingredient)
        <li>
        {{ $ingredient->name }}
        </li>
    @endforeach
    </ul>  
    <div>{{$receipe->content}}</div>       


    
@endforeach
@endsection



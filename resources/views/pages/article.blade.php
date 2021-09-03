@extends('layouts.front')

@section('content')
 
<h1>LISTE DES ARTICLES</h1>
<ol>
    @foreach ($articles as $article)
    <li>{{ $article->title}}</li>
  
     @endforeach
</ol>
@endsection

@extends('layouts.front')

@section('content')
        <h1>Welcome</h1>
                 @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
<h1>Les articles</h1>

@foreach ($lastArticles as $article)
    <img src="{{$article->img}}" alt="{{ $article->title }}">
    <div>{{ $article->title }}</div>
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



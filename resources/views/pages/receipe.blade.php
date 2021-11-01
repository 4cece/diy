@extends('layouts.front')

@section('content')

<p>
</p>
<ul>
    
        @foreach ($receipe->ingredients as $ingredient)
        <li> {{ $ingredient->name }}</li>
        @endforeach
    
</ul>

@endsection
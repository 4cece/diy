@extends('layouts.front')

@section('content')

<h1 class="text-green-dark border-b-2 text-4xl font-Shrikhand m-5">Ingredients</h1>


<ul class="text-center m-10">
    @foreach ($ingretypes as $type)
        <li class="text-purple font-Shrikhand text-2xl" href="{{ route('ingredient-type', $type) }}">{{$type->name}}</li>
        <li><img src="{{$type->img}}" alt="{{$type->name}}" class="rounded-full h-24 w-24 m-auto"></li>
        <br>
        <li class="mb-5">
            <ul class="flex justify-center flex-wrap gap-3">
                @foreach ($type->ingredients as $ingredient)
                <li><a class="text-purple" href="{{ route( 'ingredient', $ingredient )}}">{{$ingredient->name}}</a></li>
            @endforeach
            </ul> 
        </li>
        
    @endforeach
</ul>
@endsection
@extends('layouts.front')

@section('content')


<ul>
    @foreach ($ingretypes as $type)
        <a href="{{ route('ingredient-type', $type) }}"><li style="color: red">{{$type->name}}</li></a>
        <img src="{{$type->img}}" alt="">
        <br>
        <ul>
            @foreach ($type->ingredients as $ingredient)
            <a href="{{ route( 'ingredient', $ingredient )}}"><li style="color: blue">{{$ingredient->name}}</li></a>
        @endforeach
        </ul> 
    @endforeach
</ul>
@endsection
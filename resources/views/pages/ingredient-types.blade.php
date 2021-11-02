@extends('layouts.front')

@section('content')


<ul>
    @foreach ($ingretypes as $type)
        <a href="{{ route('ingredient-type', $type) }}"><li>{{$type->name}}</li></a>
    @endforeach
</ul>
@endsection
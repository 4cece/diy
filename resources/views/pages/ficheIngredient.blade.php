@extends('layouts.front')

@section('content')

<p>type d'ingredient: 
        
</p>


<h3>{{$ingredient->name}}</h3>
<a href="{{$ingredient->img}}"></a>
<p>{{$ingredient->content}}</p>

<h3>Les propriétés de l'ingrédient</h3>
@foreach ($ingredient->features as $feature)
        <li>{{$feature->name}}</li>
    
@endforeach




@endsection
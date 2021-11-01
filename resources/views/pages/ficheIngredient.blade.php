@extends('layouts.front')

@section('content')

<h1>Test</h1>
<h3>{{$ingredient->name}}</h3>
<a href="{{$ingredient->img}}"></a>
<p>{{$ingredient->content}}</p>





@endsection
@extends('layouts.front')

@section('content')
        <h1>Recettes</h1>
        <ul>
            @foreach ($categorys as $category)
            <li style="color: red" class="mx-auto my-8 text-3xl">{{$category->name}}    </li>
        
            <ul>
                <div class="flex justify-center w-full flex-wrap gap-4">
        
                @foreach ($category->receipes as $receipe)
                        <div class=" max-h-screen relative bg-white shadow-lg w-60 h-96 border-2 border-gray-500 flex items-center  flex-col rounded-lg mb-8">
                            <div class="absolute -top-10">
                                <img class=" h-24 w-24 rounded-full object-cover " src="{{$receipe->category->img}}"  alt="">
                            </div>
                            <div class="mt-16 flex items-center flex-col justify-center">
                                <h1 class="font-bold text-2xl mt-4">{{$receipe->name}}</h1>
                                <p class="font-semibold text-xl text-gray-500">{{$receipe->quantity}}</p>
                                <p class="text-center mt-4">{{$receipe->content}}</p>
                            </div>
                        </div>
                    
                @endforeach
            </div>
        
            </ul>
            @endforeach
        </ul>

@endsection
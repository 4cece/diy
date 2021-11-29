
@extends('layouts.front')

@section('content')

{{-- Header --}}

<div class="p-8">
    <div class="relative w-100">
        <img src="{{asset('img/header-picture.jpg')}}" alt="présentation" class="w-100">      
            <div class="relative md:absolute top-20 left-5">
                <h1 class="text-3xl pb-3 text-purple">L'identité du site</h1>
                <div class="md:w-1/2 text-purple">Lorem ipsum dolor sit amet consectetur adipisicing elit.  Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus ipsam 
                    totam iste dolor et in consectetur quo quibusdam sunt, pariatur quisquam delectus tempora dicta quis quasi maiores vero voluptates beatae. Laboriosam delectus
                     facilis a molestiae omnis sapiente quos sunt error placeat similique, ea, debitis explicabo ratione sit, magni beatae et recusandae. Accusantium.</div>
            </div>
    </div>    
        
        <div class="relative">
            <h1 class="text-green-dark text-4xl font-Shrikhand m-12">Les recettes</h1>
        
            <div class="flex justify-center w-full flex-wrap gap-4 ">
                @foreach ($lastReceipes as $receipe)
            
                <div class=" max-h-screen relative bg-white shadow-lg w-60 h-96 border-2 border-purple flex items-center  flex-col rounded-lg ">
                    <div class="absolute -top-10">
                        <img class=" h-24 w-24 rounded-full object-cover " src="{{$receipe->category->img}}"  alt="">
                    </div>
                    <div class="mt-16 flex items-center flex-col justify-center">
                        <h1 class="font-bold text-2xl mt-4 text-purple">{{$receipe->name}}</h1>
                        <p class="font-semibold text-xl text-purple">{{$receipe->total_quantity}} ml</p>
                        <p class="text-center mt-4">{{$receipe->content}}</p>
                    </div>
                    <div>
                        <a href="{{ route('receipe', $receipe) }}"">Lire la suite   <span class="text-xs ml-1">&#x279c;</span></a>
                    </div>
                </div>    
                @endforeach
            
            </div>
        </div>
        

        <h1 class="text-green-dark text-4xl font-Shrikhand m-12">Les articles</h1>
        
        @foreach ($lastArticles as $article)
        
                <div class="container mx-auto my-5 w-10/12">

        <div class="relative rounded-lg flex flex-col md:flex-row items-center md:shadow-xl md:h-72 mx-2">
            
            <div class="z-0 order-1 md:order-2 relative w-full md:w-2/5 h-80 md:h-full overflow-hidden rounded-lg md:rounded-none md:rounded-r-lg">
                <div class="absolute inset-0 w-full h-full object-fill object-center bg-blue-400 bg-opacity-30 bg-cover bg-bottom">
                    <img src="{{Storage::url($article->img)}}" alt="{{ $article->title}}" class="h-full">
                </div>
                <div class="md:hidden absolute inset-0 h-full p-6 pb-6 flex flex-col-reverse justify-start items-start bg-gradient-to-b from-transparent via-transparent to-gray-900">
                    <h3 class="w-full font-bold text-2xl text-white leading-tight mb-2">{{ $article->title}}</h3>
                </div>
              
            </div>
    
            <div class="z-10 order-2 md:order-1 w-full h-full md:w-3/5 flex items-center -mt-6 md:mt-0">
                <div class="p-8 md:pr-18 md:pl-14 md:py-12 mx-5 md:mx-0 h-full bg-white rounded-lg md:rounded-none md:rounded-l-lg shadow-xl md:shadow-none">
                    <h3 class="hidden md:block font-bold text-2xl text-purple">{{ $article->title}}</h3>
                    <div class="overflow-hidden h-32 text-purple">
                        {{ $article->content}}
                    </div>

                    <a class="flex items-baseline mt-3 text-blue-600 hover:text-blue-900 focus:text-blue-900" href="{{ route('article', $article) }}">
                        <span>lire la suite </span>
                        <span class="text-xs ml-1">&#x279c;</span>
                    </a>
                </div>
            </div>
    
        </div>
    </div>    
            
        @endforeach
        
</div>


@endsection



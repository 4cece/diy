
@extends('layouts.front')

@section('content')

{{-- Header --}}

<div class="p-8">
    <div style="background-image: url({{asset('img/header-picture.jpg')}})" class="bg-cover bg-center w-10/12 p-8 mx-auto">
        <h1 class="text-3xl pb-3">L'identité du site</h1>
        <div class="w-1/2 text-purple">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum enim ducimus sequi 
            doloribus explicabo expedita vero obcaecati doloremque 
            accusamus hic. Deserunt alias laboriosam qui deleniti voluptatibus dolor quaerat architecto similique.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, dolore
         perspiciatis? Eligendi atque inventore ipsum eos expedita nam dignissimos reprehenderit distinctio, 
         ullam maiores beatae omnis voluptas et iste nemo illo?</div>
        </div>                 
        
        
        <h1 class="text-3xl mx-auto py-8">Les recettes</h1>
        
        <div class="flex justify-center w-full flex-wrap gap-4">
            @foreach ($lastReceipes as $receipe)
        
            <div class=" max-h-screen relative bg-white shadow-lg w-60 h-96 border-2 border-gray-500 flex items-center  flex-col rounded-lg ">
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

        <h1 class="text-3xl mx-auto py-8">Les articles</h1>
        
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
                <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>
            </div>
    
            <div class="z-10 order-2 md:order-1 w-full h-full md:w-3/5 flex items-center -mt-6 md:mt-0">
                <div class="p-8 md:pr-18 md:pl-14 md:py-12 mx-5 md:mx-0 h-full bg-white rounded-lg md:rounded-none md:rounded-l-lg shadow-xl md:shadow-none">
                    <h3 class="hidden md:block font-bold text-2xl text-gray-700">{{ $article->title}}</h3>
                    <div class="overflow-hidden h-32 ...">
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



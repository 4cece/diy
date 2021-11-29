@extends('layouts.front')

@section('content')

<h1 class="text-green-dark border-b-2 text-4xl font-Shrikhand">Les actualités</h1>
<h1></h1>
<ol>
    @foreach ($articles as $article)

    
    <div class="container mx-auto my-5">

        <div class="relative rounded-lg flex flex-col md:flex-row items-center md:h-72 mx-2">
            
            <div class="z-0 order-1 md:order-2 relative w-full md:w-2/5 h-80 md:h-full overflow-hidden rounded-lg md:rounded-none md:rounded-r-lg">
                <div class="absolute inset-0 w-full h-full object-fill object-center bg-blue-400 bg-opacity-30 bg-cover bg-bottom"><img src="{{Storage::url($article->img)}}" alt="{{ $article->title}}"></div>
                <div class="md:hidden absolute inset-0 h-full p-6 pb-6 flex flex-col-reverse justify-start items-start bg-gradient-to-b from-transparent via-transparent to-gray-900">
                    <h3 class="w-full font-bold text-2xl text-white leading-tight mb-2">{{ $article->title}}</h3>
                </div>
                <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-white -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>
            </div>
    
            <div class="z-10 bg-white order-2 md:order-1 w-full h-full md:w-3/5 flex items-center -mt-6 md:mt-0">
                <div class="p-8 md:pr-18 md:pl-14 md:py-12 mx-5 md:mx-0 h-full rounded-lg md:rounded-none md:rounded-l-lg">
                    <h3 class="hidden md:block text-2xl text-purple font-Shrikhand">{{ $article->title}}</h3>
                    <div class="overflow-hidden h-32 text-purple">
                        {{ $article->content}}
                    </div>

                    <a class="flex items-baseline mt-3 text-purple" href="{{ route('article', $article) }}">
                        <span>lire la suite </span>
                        <span class="text-xs ml-1">&#x279c;</span>
                    </a>
                </div>
            </div>
    
        </div>
    </div>
     @endforeach
</ol>
@endsection
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>

    

    <h3 class="text-green-dark text-4xl font-Shrikhand m-5">Liste des articles</h3>
    
    <a href="{{ route ('user_article.create')}}">Créer un nouvel article</a>

    @forelse ($user->articles as $article)
    
    <div class="m-5">
    
        <div class="relative rounded-lg flex flex-col md:flex-row items-center md:h-72 mx-2">
            
            <div class="z-0 order-1 md:order-2 relative w-full md:w-2/5 h-80 md:h-full overflow-hidden rounded-lg md:rounded-none md:rounded-r-lg">
                <div class="absolute inset-0 w-full h-full object-fill object-center bg-blue-400 bg-opacity-30 bg-cover bg-bottom"><img src="{{Storage::url($article->img)}}" alt="{{ $article->title}}"></div>
                <div class="md:hidden absolute inset-0 h-full p-6 pb-6 flex flex-col-reverse justify-start items-start bg-gradient-to-b from-transparent via-transparent to-gray-900">
                    <h3 class="w-full font-bold text-2xl text-green-dark bg-white-50 leading-tight mb-2">{{ $article->title}}</h3>
                </div>
                <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-green-light -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>
            </div>
    
            <div class="z-10 bg-green-light order-2 md:order-1 w-full h-full md:w-3/5 flex items-center -mt-6 md:mt-0">
                <div class="p-8 md:pr-18 md:pl-14 md:py-12 mx-5 md:mx-0 h-full rounded-lg md:rounded-none md:rounded-l-lg">
                    <h3 class="hidden md:block text-2xl text-purple font-Shrikhand">{{ $article->title}}</h3>
                    <div class="overflow-hidden h-32 text-purple">
                        {{ $article->content}}
                    </div>

                        <form action="{{ route ('user_article.destroy', $article) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route ('user_article.show', $article->id)}}">Montrer</a>
                            <a href="{{ route ('user_article.edit', $article->id)}}">Modifier</a>
                            <button type="submit">Supprimer</button>
                        </form>
                </div>
            </div>
    
        </div>
    </div>
    @empty
        <p>Il n'y pas d'articles</p> 
    @endforelse


    
    
</x-app-layout>

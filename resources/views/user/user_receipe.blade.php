<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recettes') }}
        </h2>
    </x-slot>

    

    <h3 class="text-green-dark text-4xl font-Shrikhand m-5">Liste des recettes</h3>

    <a class="m-5" href="{{route('user_receipe.create')}}">Ajouter une recette</a>

    <div class="grid grid-cols-1 md:grid-cols-4">
        @forelse ($user->receipes as $receipe)
        <div class="m-5 bg-green-light border border-purple p-2">
            <h3 class="font-bold text-2xl mt-4 text-purple">{{ $receipe->name}}</h3>
            <p class="font-semibold text-xl text-purple">{{ $receipe->total_quantity}} ml</p>
            <p>{{ $receipe->content}}</p>
            
            <form action="{{ route ('user_receipe.destroy', $receipe) }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{ route ('user_receipe.show', $receipe->id)}}">Montrer</a>
                <a href="{{ route ('user_receipe.edit', $receipe->id)}}">Modifier</a>
                <button type="submit">Supprimer</button>
            </form>
        </div>
        
        @empty
        <p>Il n'y pas de recettes</p> 
    @endforelse
    </div>
    

 
  
</x-app-layout>
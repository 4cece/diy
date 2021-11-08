<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recettes') }}
        </h2>
    </x-slot>

    

    <h3>Liste des recettes</h3>

    <a href="{{route('user_receipe.create')}}">Ajouter une recette</a>

    @forelse ($user->receipes as $receipe)
    
        <h3>{{ $receipe->name}}</h3>
        <p>{{ $receipe->total_quantity}}</p>
        <p>{{ $receipe->content}}</p>

        <p>Les ingrédients</p>
        @foreach ($receipe->ingredients as $ingredient)
            <li>
            {{ $ingredient->name }}
            </li>
        @endforeach
        
        <form action="{{ route ('user_receipe.destroy', $receipe) }}" method="POST">
            @csrf
            @method('DELETE')
            <a href="{{ route ('user_receipe.show', $receipe->id)}}">Montrer</a>
            <a href="{{ route ('user_receipe.edit', $receipe->id)}}">Modifier</a>
            <button type="submit">Supprimer</button>
        </form>
        @empty
        <p>Il n'y pas de recettes</p> 
    @endforelse

 
    
</x-app-layout>
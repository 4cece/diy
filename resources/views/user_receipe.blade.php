<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recettes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3>Liste des recettes</h3>
                </div>
            </div>
        </div>
    </div>

    
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
        
        @empty
        <p>Il n'y pas de recettes</p> 
    @endforelse

 
    
</x-app-layout>
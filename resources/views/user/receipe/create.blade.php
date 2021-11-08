<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>


<form action="" method="POST">
    @csrf
    
        {{-- LE TITRE --}}
        <label for="name">titre</label>
        <input type="text" name="name" value="{{ old('name') ?? null }}"><br>
        @if ($errors->has('name'))
            <div>{{ $errors->first('name') }}</div>
        @endif
    
        {{-- LE CATEGORY --}}
        <label for="category_id">Category</label>
        <select name="category_id" id="category_id">
            @foreach ($categories as $cat)
            <option value="{{$cat->id}}">{{$cat->name}}</option>
    
            @endforeach
    
        </select><br>
    
        {{-- LA QUANTITE --}}
        <label for="total_quantity">quantité totale</label>
        <input type="text" name="total_quantity" value="{{ old('total_quantity') ?? null }}"><br>
    
    
        {{-- LES INGREDIENTS --}}
        <label for="ingredient_id">Ingrédient</label>
        <select name="ingredient_id[]" id="ingredient" >
            @foreach ($ingredients as $ingredient)
            <option value="{{$ingredient->id}}">{{$ingredient->name}}</option>
            @endforeach
        </select>
        <label for="quantity">Quantité</label>
        <input type="number[]" name="quantity[]" value="{{ old('number') ?? null }}">
    
        <div id="content"></div>
        <button id="btnIngre" type="">ajouter un ingrédient</button><br>
    
    
        {{-- LES ETAPES DE PREPARATION --}}
        <label for="textstep">Préparation</label>
        <!--- ATTENTION ici tu afficher un old(value) d'un array, étrange d'ailleurs --->
        <input type="text" name="textstep[]" value="" >
        <div id="divstep"></div>
    
        <button id="btnstep">Ajouter une étape</button><br>
    
        {{-- LES INFO COMPLEMENTAIRES --}}
    
        <textarea name="contenu" id="" cols="30" rows="10">{{ old('content') ?? null }}</textarea><br>
    
        {{-- LE NIVEAU DE DIFFICULTE --}}
        <label for="level_id">Niveau de diffuculté</label>
        <select name="level_id" id="level_id">
            @foreach ($levels as $level)
            <option value="{{$level->id}}">{{$level->name}}</option>
    
            @endforeach
        </select><br>
    
        <button type="submit">Créer votre recette</button>
    
    </form>

</x-app-layout>

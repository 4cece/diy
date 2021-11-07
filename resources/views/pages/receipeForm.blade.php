@extends('layouts.front')

@section('content')
<a href="/receipe">Recette fini</a>
<div class="flex items-center justify-center">

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
            <input type="number[]" name="quantity" value="{{ old('number') ?? null }}">
        
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
</div>



<script type="text/javascript">
    // Formulaire de création de recette
// les variables

    // Le bouton pour ajouter un ingrédient
    let btn = document.querySelector('#btnIngre');

    // Le bouton pour ajouter un étape de préparation
    let btnstep = document.querySelector('#btnstep');

    // la div des ingrédients
    let content = document.querySelector('#content');

    // la div des étapes de préparation
    let divstep = document.querySelector('#divstep');




    btn.addEventListener("click", function(event){
        // pour éviter d'envoyer le formulaire
        event.preventDefault();

        // Création des tableaux d'ingrédient
        let options = [
        @foreach ($ingredients as $ingredient)
        ["{{$ingredient->id}}","{{$ingredient->name}}"],
        @endforeach
        ];

        //  création du Select
        let select = document.createElement('select');
        select.name= 'ingredient_id[]';
        select.id= 'ingredient';

        content.appendChild(select);

        // creation des options

        for(var i= 0; i < options.length; i++){
            let option = document.createElement('option');
            option.value = options[i][0];
            option.text= options[i][1];

            select.appendChild(option);
        }

        // création de l'input quantity
        let inputQuant = document.createElement('input');
        inputQuant.name = 'quantity[]';
        inputQuant.id = 'quantity';
        inputQuant.placeholder = 'quantité en ml'

        content.appendChild(inputQuant);

})

    btnstep.addEventListener('click', function(event){
        // pour éviter d'envoyer le formulaire
        event.preventDefault();


        // Créer une étape de préparation
        let input = document.createElement('input');
        input.name = 'textstep[]';
        input.type = 'text';
        input.style = 'width:80%';
        input.placeholder = 'étape de préparation'

        divstep.appendChild(input);


    })




</script>
@endsection

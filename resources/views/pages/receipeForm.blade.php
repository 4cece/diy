@extends('layouts.front')

@section('content')
<a href="/receipe">Recette fini</a>

<form action="" method="POST">
@csrf

    {{-- LE TITRE --}}
    <label for="name">titre</label>
    <input type="text" name="name"><br>

    {{-- LE CATEGORY --}}
    <label for="category">Category</label>
    <select name="category" id="category">
        @foreach ($categories as $cat)
        <option value="{{$cat->id}}">{{$cat->name}}</option>

        @endforeach

    </select><br>
    
    {{-- LA QUANTITE --}}
    <label for="quantity">quantité totale</label>
    <input type="text" name="quantity"><br>

    {{-- LES INGREDIENTS --}}
    <label for="ingredient">Ingrédient</label>
    <select name="ingredient" id="ingredient" >
        @foreach ($ingredients as $ingredient)
        <option value="{{$ingredient->id}}">{{$ingredient->name}}</option>
        @endforeach
    </select>

    <div id="content"></div>
    
    <button id="btnIngre" type="">ajouter un ingrédient</button><br>

    
    {{-- LES ETAPES DE PREPARATION --}}
    <label for="step">Préparation</label>
    <input type="text" name="step" >
    <div id="divstep"></div>

    <button id="btnstep">Ajouter une étape</button><br>

    {{-- LES INFO COMPLEMENTAIRES --}}

    <textarea name="infoCompl" id="" cols="30" rows="10">Informations complémentaires</textarea><br>

    {{-- LE NIVEAU DE DIFFICULTE --}}
    <label for="level">Niveau de diffuculté</label>
    <select name="level" id="level">
        @foreach ($levels as $level)
        <option value="{{$level->id}}">{{$level->name}}</option>

        @endforeach
    </select><br>

    <button type="submit">Créer votre recette</button>

</form>


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
        select.name= 'ingredient';
        select.id= 'ingredient';

        content.appendChild(select);

        // creation des options
        
        for(var i= 0; i < options.length; i++){
            let option = document.createElement('option');
            option.value = options[i][0];
            option.text= options[i][1];

            select.appendChild(option); 
        }
})

    btnstep.addEventListener('click', function(event){
        // pour éviter d'envoyer le formulaire
        event.preventDefault();

        let input = document.createElement('input');
        input.name = 'step';
        input.type = 'text';
        input.style = 'width:80%';
        input.placeholder = 'étape de préparation'

        divstep.appendChild(input);
    })




</script>
@endsection
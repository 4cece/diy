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
    <select name="ingredient" id="ingredient">
        @foreach ($ingredients as $ingredient)
        <option value="{{$ingredient->id}}">{{$ingredient->name}}</option>
        @endforeach
    </select>

    <div id="content"></div>
    
    <button id="btnIngre">ajouter un ingrédient</button><br>

    
    {{-- LES ETAPES DE PREPARATION --}}
    <label for="step">Préparation</label>
    <input type="text" name="step"><br>

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

    // Le bouton
    let btn = document.querySelector('#btnIngre'); 

    // la div
    let content = document.querySelector('#content');

    let options = [
        @foreach ($ingredients as $ingredient)
        ["{{$ingredient->id}}","{{$ingredient->name}}"],
        @endforeach
    ]

    // console.log(options[0][0]);
btn.addEventListener("click", function(){

    // alert('test');
    //  création du Select
    // let select = document.createElement('select');
    // select.name= 'ingredient';
    // select.id= 'ingredient';

    // content.appendchil(select);

    // creation des options
    // let option = document.createElement('option');
    // option.value = "test";
    // option.text = "test";

    // select.appendchil(option);

})
</script>
@endsection
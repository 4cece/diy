@extends('layouts.front')

@section('content')
<a href="/receipe">Recette fini</a>

<form action="" method="POST">
@csrf
    <label for="name">titre</label>
    <input type="text" name="name"><br>

    <label for="category">Category</label>
    <select name="category" id="category">
        @foreach ($categories as $cat)
        <option value="{{$cat->id}}">{{$cat->name}}</option>

        @endforeach

    </select><br>
    
    <label for="quantity">quantité totale</label>
    <input type="text" name="quantity"><br>

    <label for="ingredient1">ingrédient</label>
    <input type="text" name="ingredient1">

    <label for="ingredient2">ingrédient</label>
    <input type="text" name="ingredient2">

    <label for="step">Préparation</label>
    <input type="text" name="step">

    <textarea name="infoCompl" id="" cols="30" rows="10">Informations complémentaires</textarea>


    <label for="level">Niveau de diffuculté</label>
    <select name="level" id="level">
        @foreach ($levels as $level)
        <option value="{{$level->id}}">{{$level->name}}</option>

        @endforeach
    </select>

    <button type="submit">Créer votre recette</button>
</form>
@endsection
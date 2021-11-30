<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recettes') }}
        </h2>
    </x-slot>

    <h3 class="text-4xl font-Shrikhand text-purple text-center m-5">Modifier la recette</h3>


    <form action="{{route('user_receipe.update', $receipe->id)}}" method="POST" class="bg-green-light border border-purple text-center space-y-2 text-purple md:mx-48 p-10">
    @csrf
    @method('PUT')
        {{-- LE TITRE --}}
        <label for="name">titre</label>
        <input type="text" name="name" value="{{$receipe->name}}"><br>
        @if ($errors->has('name'))
            <div>{{ $errors->first('name') }}</div>
        @endif
    
        {{-- LE CATEGORY --}}
        <label for="category_id">Category</label>
        <select name="category_id" id="category_id">
            <option selected value="{{$receipe->category_id}}">{{$receipe->category->name}}</option>
            @foreach ($categories as $cat)
            <option value="{{$cat->id}}">{{$cat->name}}</option>
    
            @endforeach
    
        </select><br>
    
        {{-- LA QUANTITE --}}
        <label for="total_quantity">quantité totale</label>
        <input type="text" name="total_quantity" value="{{ $receipe->total_quantity}} ml"><br>
    
    
        {{-- LES INGREDIENTS --}}
      
        @foreach ($receipe->ingredients as $ingredient)

        @foreach($ingredientsReceipes as $ingredientReceipes)
            @if($ingredientReceipes->ingredient_id === $ingredient->id)
                @php $ingredient->quantity = $ingredientReceipes->quantity; @endphp
            @endif
        @endforeach

        <select name="ingredient_id[]" id="ingredient" >
                <option selected value="{{$ingredient->id}}">{{$ingredient->name}}</option>
                @foreach ($ingredients as $ingre)
                <option value="{{$ingre->id}}">{{$ingre->name}}</option>
                @endforeach
            </select>
            <label for="quantity">Quantité</label>
        <input type="number[]" name="quantity[]" value="{{$ingredient->quantity}} ml">
    @endforeach
       
       
        <button id="btnIngre" type="">ajouter un ingrédient</button><br> 

        LES ETAPES DE PREPARATION 
        <label for="textstep">Préparation</label>
        @foreach ($receipe->steps as $step)
        <input type="text" name="textstep[]" value="{{$step->textstep}}" >
        @endforeach
    
        <button id="btnstep">Ajouter une étape</button><br>
    
        {{-- LES INFO COMPLEMENTAIRES --}}
    
        <textarea name="contenu" id="" cols="30" rows="10">{{ $receipe->content }}</textarea><br>
    
        {{-- LE NIVEAU DE DIFFICULTE --}}
         <label for="level_id">Niveau de diffuculté</label>
        <select name="level_id" id="level_id">
            <option selected value="{{$receipe->level_id}}">{{$receipe->level->name}}</option>
            @foreach ($levels as $level)
            <option value="{{$level->id}}">{{$level->name}}</option>
            @endforeach
        </select><br>
    
        <button type="submit" class="bg-green-dark text-green-light p-2 rounded">Modifier votre recette</button>
     
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
</x-app-layout>

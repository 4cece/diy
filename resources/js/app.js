require('./bootstrap');

require('alpinejs');

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
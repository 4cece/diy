<?php

namespace App\Http\Controllers;

use App\Models\Receipe;
use App\Models\Category;
use App\Models\Ingredient;
use App\Models\IngredientReceipe;
use App\Models\Level;
use App\Models\Step;
use Illuminate\Http\Request;

class ReceipesController extends Controller
{
    public function index()
    {
        return view('pages.receipe');
    }

    public function show(Receipe $receipe)
    {
        // dd($receipe->comments);
        return view('pages.receipe', [
            'receipe' => $receipe
        ]);
    }

    public function formsend(Request $request)
    {
        dd($request->ingredient_id);
        // Pour créer un nouveau champ dans la requete
        $request->request->set('user_id', 1);

        // Pour valider les règles fixé de la table recette
        $data = $request->validate([
            'name' => 'required',
            'content' => 'nullable',
            'total_quantity' => 'required|numeric|integer',
            'user_id' => 'required|numeric|integer',
            'level_id' => 'required|numeric|integer',
            'category_id' => 'required|numeric|integer',
        ]);

        // Pour créer la recette
        $receipe = Receipe::create($data);

        // l'id la recette créer
        $receipe->id;

       
       

        $ingredientReceipe = new IngredientReceipe();

        $ingredientReceipe->receipe_id = $request->$receipe->id;;
        $ingredientReceipe->ingredient_id = $request->ingredient;
        $ingredientReceipe->quantity = $request->quantityIngre;

        $step = new Step();

        $step->id = $request->name;
        $step->order = $request->ordrer;
        $step->content = $request->name;
        $step->receipe_id = $request->$receipe->id;


        $ingredientReceipe->save();
        $step->save();
    }

    public function form()
    {
        return view('pages.receipeForm', [
            'categories' => Category::all(),
            'levels' => Level::all(),
            'ingredients' => Ingredient::all(),

        ]);
    }
}

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
        return view('pages.receipes', [
            'categorys' => Category::all(),
            'receipes' =>Receipe::all(),
        ]);
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
        
        // dd($request->ingredient_id, $request->quantity);

        // Pour valider les règles fixé de la table recette
        $request->validate([
            'name' => 'required',
            'total_quantity' => 'required|numeric|integer',
            'level_id' => 'required|numeric|integer',
            'category_id' => 'required|numeric|integer',
        ]);

        // Pour créer la recette
        $receipe = new Receipe();
        $receipe->user_id = 1; // A changer pâr l'user connecté quand il y aura l'authentif'
        $receipe->name = $request->name;
        $receipe->content = $request->contenu;
        $receipe->total_quantity = (int) $request->total_quantity;
        $receipe->level_id = $request->level_id;
        $receipe->category_id = $request->category_id;

        $receipe->save();

        // Les étapes préparations

        // validation
        $request->validate([
            'textstep' => 'required', 
        ]);

       
        // Pour créer les étapes

        foreach ($request->textstep as $text):
        $etape = new Step();
        $etape->textstep = $text;
        $etape->receipe_id = $receipe->id;
        $etape->save();
        endforeach;

        // Les ingrédients

                // validation

        $request->validate([
            'ingredient_id' => 'required',
            'quantity' => 'required',
        ]);

        // Pour créer lesingredients
        $ingredient_quantity =  array_combine( $request->ingredient_id, $request->quantity);

        foreach ( $ingredient_quantity as $ingredient_id => $quantity):

            $ingredient_receipe = new IngredientReceipe();

            $ingredient_receipe->receipe_id = $receipe->id;
            $ingredient_receipe->ingredient_id = $ingredient_id;
            $ingredient_receipe->quantity = $quantity;
            
            
            $ingredient_receipe->save();
            endforeach;

        return back()->with("Recette créée");



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

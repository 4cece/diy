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
        //dd($request);


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

        /*$request->validate([
            'text[]' => 'required', // Pas sûr de la syntaxe
        ]);*/

        /*$etape = new Step();
        $etape->text = $request->text;
        $etape->save();*/

        return back()->with("Recette créée");
        // $request->request->set('receipe_id', $receipe->id);



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

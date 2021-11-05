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
        // dd($request->all());
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

        $step = $request->text->validate([
            'text[]' => 'required',
        ]);

        $etape = Step::create($step);
        $etape->receipe_id()->sync($receipe->id);

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

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
    public function index(){
            return view('pages.receipe');

    }

    public function show(Receipe $receipe)
    {
        // dd($receipe->comments);
        return view('pages.receipe', [
            'receipe' => $receipe
        ]);
    }

    public function formsend(Request $request){

        dd($request);
        $receipe = new Receipe();

        $receipe->name = $request->name;
        $receipe->content = $request->infoCompl;
        $receipe->total_quantity = $request->quantityTotal;
        $receipe->user_id  = '1';
        $receipe->level_id = $request->level;
        $receipe->category_id = $request->category;

        $ingredientReceipe = new IngredientReceipe();

        $ingredientReceipe->receipe_id = $request->$receipe->id;
        $ingredientReceipe->ingredient_id = $request->ingredient;
        $ingredientReceipe->quantity = $request->quantityIngre;

        $step = new Step();

        $step->id = $request->name;
        $step->content = $request->name;
        $step->receipe_id = $request->$receipe->id;


}

    public function form(){
    return view('pages.receipeForm', [
        'categories' => Category::all(),
        'levels' =>Level::all(),
        'ingredients'=>Ingredient::all(),
        
    ]);

}
}

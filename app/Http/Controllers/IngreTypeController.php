<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\IngredientType;

class IngreTypeController extends Controller
{
    public function index(){
        return view('pages.ingredient-types', [
            'ingretypes' => IngredientType::all(),
            'ingredients' =>Ingredient::all(),
        ]);

}
    public function show(IngredientType $ingredientType)
    {
        return view('pages.ingredient-type', [
            "type" => $ingredientType,
            
        ]);
    }
}
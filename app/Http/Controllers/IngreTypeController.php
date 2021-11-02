<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;
use App\Models\IngredientType;

class IngreTypeController extends Controller
{
    public function index(){
        return view('pages.ingredient-types', [
            'ingretypes' => IngredientType::all(),
        ]);

}
    public function show($id)
    {
        return view('pages.ingredient-type', [
            "type" => IngredientType::find($id),
        ]);
    }
}
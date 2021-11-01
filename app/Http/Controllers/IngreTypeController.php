<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;
use App\Models\IngredientType;

class IngreTypeController extends Controller
{
    public function show($id){
        $ingre = Ingredient::find($id);
        return view('pages.ficheIngredient', [
        //  'ingredientype' => $ingre->ingredient()->get(),
         $ingredientype = Ingredient::find($id)->ingretype()->get(),
        ]);
        dd($ingredientype);

}
}
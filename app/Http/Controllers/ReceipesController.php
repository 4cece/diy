<?php

namespace App\Http\Controllers;

use App\Models\Receipe;
use App\Models\Category;
use App\Models\Ingredient;
use App\Models\Level;
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
        $receipe = new Receipe();
}

    public function form(){
    return view('pages.receipeForm', [
        'categories' => Category::all(),
        'levels' =>Level::all(),
        'ingredients'=>Ingredient::all(),
        
    ]);

}
}

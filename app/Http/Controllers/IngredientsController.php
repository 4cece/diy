<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IngredientsController extends Controller
{
    public function ingredients(){
        return view('pages.ingredients');
    }
    public function ficheIngredient(){
        return view('pages.ficheIngredient');
    }
}

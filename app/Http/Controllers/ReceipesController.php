<?php

namespace App\Http\Controllers;

use App\Models\Receipe;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class ReceipesController extends Controller
{
    // public function receipe(){
    //         return view('pages.receipe');

    // }

    public function show(Receipe $receipe)
    {
        // dd($receipe->comments);
        return view('pages.receipe', [
            'receipe' => $receipe
        ]);
    }
}

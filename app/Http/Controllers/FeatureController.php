<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function show(){
        $features = Feature::all();
        dd($features);
        return view('pages.ficheIngredient')->with('features', $features);
    }
}

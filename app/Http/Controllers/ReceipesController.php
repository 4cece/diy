<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceipesController extends Controller
{
    public function receipeForm(){
        return view('pages.receipeForm');
        }
    public function receipe(){
            return view('pages.receipe');
    }
}

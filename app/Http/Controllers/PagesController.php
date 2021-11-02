<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\IngredientReceipe;
use App\Models\Receipe;
use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function home(){
    return view('pages.home', [
        "lastArticles" => Article::orderByDesc('created_at')->limit(3)->get(),
        "lastReceipes" => Receipe::orderByDesc('created_at')->limit(2)->get(),
    ]);
    }

    

    public function about(){
        return view('pages.about');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        return view('pages.blog', [
            "articles" => Article::all(),
        ]);
    }

    public function article(){
        return view('pages.article');
    }
}

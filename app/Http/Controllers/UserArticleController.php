<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Receipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.user_article', [
            'user'=> Auth::user(),
            'lastArticles' => Article::orderByDesc('created_at')->limit(3)->get(),
            'lastReceipes' => Receipe::orderByDesc('created_at')->limit(2)->get(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $name = Storage::disk('public')->put('articleImg', $request->img);
        
        // Pour valider les règles fixées de la table article
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'img' => 'required|image|max:2048|mimes:jpeg,png,jpg,gif,svg',

        ]);

        // Pour créer l'article
        $article = new Article();
        $article->title = $request->title;
        $article->content = $request->content;
        $article->user_id = auth()->user()->id ;
        $article->img = $name;

        $article->save();   

        return back()->with('Article créer');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Auth::user()->articles, Auth::user()->comments, Auth::user()->receipes, Auth::user()->ingredients);
        
        return view('dashboard', [
        'user'=> Auth::user(),

        ]);
    }

    public function article()
    {
        // dd(Auth::user()->articles, Auth::user()->comments, Auth::user()->receipes, Auth::user()->ingredients);
        
        return view('user.user_article', [
        'user'=> Auth::user(),

        ]);
    }

    public function receipe()
    {        

        return view('user.user_receipe', [
        'user'=> Auth::user(),

        ]);
    }

    public function comment()
    {        
        return view('user.user_comment', [
        'user'=> Auth::user(),

        ]);
    }

    public function postarticle(Request $request)
    {
        
        $name = Storage::disk('public')->put('articleImg', $request->img);
        // dd($name);
        // $url = Storage::url($name);
    //    dd($imaName);
        // Pour valider les règles fixées de la table article
        // $request->validate([
        //     'title' => 'required',
        //     'content' => 'required',
        //     'user_id' => 'required|numeric|integer',
        // ]);

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        // dd(user->);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('article', compact("article"));
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
        $name = Storage::disk('public')->put('articleImg', $request->img);

        // On récupère la ligne à modifier
        $article = Article::find($id);

        // On change pour les nouvelles valeurs
        $article->title = $request->title;
        $article->content = $request->content;
        $article->user_id = auth()->user()->id ;
        $article->img = $name;

        $article->save();
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

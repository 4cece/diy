<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Faker\Guesser\Name;
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
        return view('user.article.index', [
            'user'=> Auth::user(),
            'articles'=> Article::all(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('user.article.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->img);
        $name = Storage::disk('public')->put('imgArticle', $request->img);
        
        // Pour valider les règles fixées de la table article
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view ('user.article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view ('user.article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        if(Empty($request->img)) {
            $name = $request->img;

        }else
        {
            $name = Storage::disk('public')->put('imgArticle', $request->img);

        }
    
    
            // On change pour les nouvelles valeurs
            $article->title = $request->title;
            $article->content = $request->content;
            $article->user_id = auth()->user()->id ;
            $article->img = $name;
    
            $article->save();

            return view ('user.article.index', [
                'user'=> Auth::user()
            ]);
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()-> route('user_article.index')->with('success', 'Article supprimé avec succès');
    }
}

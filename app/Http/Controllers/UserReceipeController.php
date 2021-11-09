<?php

namespace App\Http\Controllers;

use App\Models\Step;
use App\Models\Level;
use App\Models\Receipe;
use App\Models\Category;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use App\Models\IngredientReceipe;
use Illuminate\Support\Facades\Auth;

class UserReceipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.user_receipe', [
            'user'=> Auth::user(),
            'receipes'=> Receipe::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('user.receipe.create', [
            'categories' => Category::all(),
            'levels' => Level::all(),
            'ingredients' => Ingredient::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                // Pour valider les règles fixé de la table recette
        $request->validate([
            'name' => 'required',
            'total_quantity' => 'required|numeric|integer',
            'level_id' => 'required|numeric|integer',
            'category_id' => 'required|numeric|integer',
        ]);

        // Pour créer la recette
        $receipe = new Receipe();
        $receipe->user_id = auth()->user()->id; // A changer pâr l'user connecté quand il y aura l'authentif'
        $receipe->name = $request->name;
        $receipe->content = $request->contenu;
        $receipe->total_quantity = (int) $request->total_quantity;
        $receipe->level_id = $request->level_id;
        $receipe->category_id = $request->category_id;

        $receipe->save();

        // Les étapes préparations

        // validation
        $request->validate([
            'textstep' => 'required', 
        ]);

       
        // Pour créer les étapes

        foreach ($request->textstep as $text):
        $etape = new Step();
        $etape->textstep = $text;
        $etape->receipe_id = $receipe->id;
        $etape->save();
        endforeach;

        // Les ingrédients

                // validation

        $request->validate([
            'ingredient_id' => 'required',
            'quantity' => 'required',
        ]);

        // Pour créer lesingredients
        $ingredient_quantity =  array_combine( $request->ingredient_id, $request->quantity);

        foreach ( $ingredient_quantity as $ingredient_id => $quantity):

            $ingredient_receipe = new IngredientReceipe();

            $ingredient_receipe->receipe_id = $receipe->id;
            $ingredient_receipe->ingredient_id = $ingredient_id;
            $ingredient_receipe->quantity = $quantity;
            
            
            $ingredient_receipe->save();
            endforeach;

        return back()->with("Recette créée");


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Receipe $receipe)
    {
        return view('user.receipe.show', compact('receipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Receipe $receipe)
    {
        // dd($receipe);
        return view ('user.receipe.edit', compact('receipe'), [
            'categories' => Category::all(),
            'levels' => Level::all(),
            'ingredients' => Ingredient::all(),
            'steps'=> Step::all(),
            'ingredientsReceipes'=> IngredientReceipe::where('receipe_id', $receipe->id)->get(),
        ]);
       

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receipe $receipe)
    {
        
        // Pour valider les règles fixé de la table recette
        $request->validate([
            'name' => 'required',
            'total_quantity' => 'required|numeric|integer',
            'level_id' => 'required|numeric|integer',
            'category_id' => 'required|numeric|integer',
        ]);

        // Pour créer la recette
        $receipe = new Receipe();
        $receipe->user_id = auth()->user()->id; // A changer pâr l'user connecté quand il y aura l'authentif'
        $receipe->name = $request->name;
        $receipe->content = $request->contenu;
        $receipe->total_quantity = (int) $request->total_quantity;
        $receipe->level_id = $request->level_id;
        $receipe->category_id = $request->category_id;

        $receipe->save();

        // Les étapes préparations

        // validation
        $request->validate([
            'textstep' => 'required', 
        ]);

       
        // Pour créer les étapes

        foreach ($request->textstep as $text):
        $etape = new Step();
        $etape->textstep = $text;
        $etape->receipe_id = $receipe->id;
        $etape->save();
        endforeach;

        // Les ingrédients

                // validation

        $request->validate([
            'ingredient_id' => 'required',
            'quantity' => 'required',
        ]);

        // Pour créer lesingredients
        $ingredient_quantity =  array_combine( $request->ingredient_id, $request->quantity);

        foreach ( $ingredient_quantity as $ingredient_id => $quantity):

            $ingredient_receipe = new IngredientReceipe();

            $ingredient_receipe->receipe_id = $receipe->id;
            $ingredient_receipe->ingredient_id = $ingredient_id;
            $ingredient_receipe->quantity = $quantity;
            
            
            $ingredient_receipe->save();
        endforeach;

            return view ('user.user_receipe', [
                'user'=> Auth::user()
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receipe $receipe)
    {
        // $ingredient_receipe = IngredientReceipe::where('receipe_id', $receipe->id)->get();
        // $step = Step::where('receipe_id', $receipe->id)->get();

        // $ingredient_receipe->delete();
        // $step->delete();
        $receipe->ingredientReceipe->delete();
        $receipe->steps->delete();
        $receipe->delete();

        return redirect()-> route('user_receipe')->with('success', 'Article supprimé avec succès');

    }
}

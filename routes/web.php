<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ReceipesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/blog',[BlogController::class,'blog']);
Route::get('/article/{article}', [ArticleController::class,'index']);

Route::get('/ingredients', [IngredientController::class, 'index']);

Route::get('/ficheIngredient/{ingredient}', [FicheIngreController::class, 'index']);
Route::get('/ficheIngredient', [IngredientController::class, 'ficheIngredient']);

Route::get('/receipe/{receipe}', [ReceipesController::class, 'show']);
Route::get('/receipeForm', [ReceipesController::class, 'receipeForm']);

Route::get('/about', [PagesController::class, "about"]);
Route::get('/', [ PagesController::class, "home" ]);


require __DIR__.'/auth.php';

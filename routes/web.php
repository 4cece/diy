<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReceipesController;
use App\Http\Controllers\IngreTypeController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\UserArticleController;
use App\Http\Controllers\UserReceipeController;

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

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');

});
// Route User Article
// Route::resource('/user_article', UserController::class)->parameter('user_article', 'article')->middleware('auth');
Route::resource('/user_article', UserArticleController::class)->parameter('user_article', 'article')->middleware('auth');
Route::resource('/user_receipe', UserReceipeController::class)->parameter('user_receipe', 'receipe')->middleware('auth');

// Route::get('/user_article', [UserController::class,'article'])->middleware('auth')->name('user_article');
// Route::post('/user_article', [UserController::class,'postarticle'])->middleware('auth')->name('postarticle');
// Route::get('/user_article/{article}/edit', [UserController::class,'edit'])->middleware('auth')->name('editearticle');
// Route::put('/user_article/{article}', [UserController::class,'update'])->middleware('auth')->name('updatearticle');

// Route User Recette
Route::get('/user_receipe', [UserController::class,'receipe'])->middleware('auth')->name('user_receipe');

// Route User commentaire
Route::get('/user_comment', [UserController::class,'comment'])->middleware('auth')->name('user_comment');

// Route  Articles
Route::get('/blog',[BlogController::class,'blog'])->name('blog');
Route::get('/article/{article}', [ArticleController::class,'index'])->name('article');

// Route Ingredients
Route::get('ingredient-types', [IngreTypeController::class, 'index'])->name('ingredient-types');
Route::get('ingredient-types/{ingredientType}', [IngreTypeController::class, 'show'])->name('ingredient-type');
Route::get('/ingredients', [IngredientController::class, 'index']);

Route::get('/ficheIngredient/{ingredient}', [IngredientController::class, 'show'])->name('ingredient');
Route::get('/ficheIngredient', [IngredientController::class, 'ficheIngredient']);

// Route Formulaire de recette
Route::get('/receipe/{receipe}', [ReceipesController::class, 'show'])->name('receipe');
Route::get('/receipeForm', [ReceipesController::class, 'form'])->name('formulaire');
Route::post('/receipeForm', [ReceipesController::class, 'formsend'])->name('formulairesend');

// Route Page d'acceuil et à propos
Route::get('/about', [PagesController::class, "about"])->name('about');
Route::get('/', [ PagesController::class, "home" ])->name('home');


require __DIR__.'/auth.php';

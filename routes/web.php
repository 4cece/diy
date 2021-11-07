<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReceipesController;
use App\Http\Controllers\IngreTypeController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\UserController;

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



// Route::resource('/user_articles', [UserController::class, 'index'])->middleware(['auth'])->name('', 'index');
// Route::get('/user_receipes', [UserController::class, 'index'])->middleware(['auth'])->name('user_receipes');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');

});

Route::get('/user_article', [UserController::class,'article'])->middleware('auth')->name('user_article');
Route::get('/user_receipe', [UserController::class,'receipe'])->middleware('auth')->name('user_receipe');



Route::get('/blog',[BlogController::class,'blog'])->name('blog');
Route::get('/article/{article}', [ArticleController::class,'index'])->name('article');

Route::get('ingredient-types', [IngreTypeController::class, 'index'])->name('ingredient-types');
Route::get('ingredient-types/{ingredientType}', [IngreTypeController::class, 'show'])->name('ingredient-type');
Route::get('/ingredients', [IngredientController::class, 'index']);

Route::get('/ficheIngredient/{ingredient}', [IngredientController::class, 'show'])->name('ingredient');
Route::get('/ficheIngredient', [IngredientController::class, 'ficheIngredient']);

Route::get('/receipe/{receipe}', [ReceipesController::class, 'show'])->name('receipe');
Route::get('/receipeForm', [ReceipesController::class, 'form'])->name('formulaire');
Route::post('/receipeForm', [ReceipesController::class, 'formsend'])->name('formulairesend');


Route::get('/about', [PagesController::class, "about"])->name('about');
Route::get('/', [ PagesController::class, "home" ])->name('home');


require __DIR__.'/auth.php';

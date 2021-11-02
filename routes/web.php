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



Route::get('/dashboard', [UserController::class, 'index'])->middleware(['auth'])->name('dashboard');


Route::get('/blog',[BlogController::class,'blog']);
Route::get('/article/{article}', [ArticleController::class,'index']);

Route::get('ingredient-types', [IngreTypeController::class, 'index'])->name('ingredient-types');
Route::get('ingredient-types/{ingredientType}', [IngreTypeController::class, 'show'])->name('ingredient-type');
Route::get('/ingredients', [IngredientController::class, 'index']);

Route::get('/ficheIngredient/{ingredient}', [IngredientController::class, 'show'])->name('ingredient');
Route::get('/ficheIngredient', [IngredientController::class, 'ficheIngredient']);

Route::get('/receipe/{receipe}', [ReceipesController::class, 'show']);
Route::get('/receipeForm', [ReceipesController::class, 'receipeForm']);

Route::get('/about', [PagesController::class, "about"]);
Route::get('/', [ PagesController::class, "home" ]);


require __DIR__.'/auth.php';

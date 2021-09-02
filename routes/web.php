<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\IngredientsController;
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
Route::get('/article', [BlogController::class,'article']);

Route::get('/ingredients', [IngredientsController::class, 'ingredients']);
Route::get('/ficheIngredient', [IngredientsController::class, 'ficheIngredient']);

Route::get('/receipe', [ReceipesController::class, 'receipe']);
Route::get('/receipeForm', [ReceipesController::class, 'receipeForm']);

Route::get('/about', [PagesController::class, "about"]);
Route::get('/', [ PagesController::class, "home" ]);


require __DIR__.'/auth.php';

<?php
use App\Http\Controllers\NewController;
use App\Http\Controllers\IngredientController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/ingredient', [NewController::class, 'index']);

//Route::resource('ingredients', IngredientController::class);



Route::get('/ingredients', [IngredientController::class, 'index'])->name('ingredients.index');

Route::get('/ingredients/create', [IngredientController::class, 'create'])->name('ingredients.create');

Route::get('/ingredients/edit', [IngredientController::class, 'edit'])->name('ingredients.edit');

Route::get('/ingredients/show', [IngredientController::class, 'show'])->name('ingredients.show');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get   ('/pizzas'       , [PizzaController::class, 'index'])->name('pizzas.index')->middleware('auth');
Route::get   ('/pizzas/create', [PizzaController::class, 'create'])->name('pizzas.create');
Route::post  ('/pizzas'       , [PizzaController::class, 'store'])->name('pizzas.store');
Route::get   ('/pizzas/{id}'  , [PizzaController::class, 'show'])->name('pizzas.show')->middleware('auth');
Route::delete('/pizzas/{id}'  , [PizzaController::class, 'destroy'])->name('pizzas.destroy')->middleware('auth');

Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

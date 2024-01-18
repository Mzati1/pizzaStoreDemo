<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', [PizzasController::class, 'index'])->name('pizza.create');
Route::post('/create', [PizzasController::class, 'create'])->name('pizza.create.submit');


Route::get('/show', [PizzasController::class, 'show'])->name('pizza.show');
Route::get('/show/{id}', [PizzasController::class, 'showOrder'])->name('pizza.show.order')->middleware('auth');
Route::delete('/show/{id}', [PizzasController::class, 'destroy'])->name('pizza.delete.order')->middleware('auth');





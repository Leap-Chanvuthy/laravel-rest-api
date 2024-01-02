<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/pizzas' , [App\Http\Controllers\PizzaController::class,'index']) -> middleware('auth');
Route::get('/pizzas/create' , [App\Http\Controllers\PizzaController::class, 'create']);
Route::post('/pizzas' , [App\Http\Controllers\PizzaController::class , 'store']) -> middleware('auth');
Route::get('/pizzas/{id}' , [App\Http\Controllers\PizzaController::class,'show']) -> middleware('auth') ;
Route::delete('/pizzas/{id}' , [App\Http\Controllers\PizzaController::class , 'destroy']) -> middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

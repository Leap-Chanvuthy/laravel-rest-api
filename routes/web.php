<?php

use App\Http\Controllers\Controller;
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

Route::get('/pizzas' , [App\Http\Controllers\PizzaController::class,'index']);
Route::get('/pizzas/create' , [App\Http\Controllers\PizzaController::class, 'create']);
Route::post('/pizzas' , [App\Http\Controllers\PizzaController::class , 'store']);
Route::get('/pizzas/{id}' , [App\Http\Controllers\PizzaController::class,'show'] );
Route::delete('/pizzas/{id}' , [App\Http\Controllers\PizzaController::class , 'destroy']);


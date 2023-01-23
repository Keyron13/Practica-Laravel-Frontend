<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\JugadorController;
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

Route::get('/',[PaginaController::class,'welcomePage']);

Route::get('/nosotros',[PaginaController::class,'nosotrosPage']);

Route::get('/articulo',[ArticuloController::class,'articulosPage']);

Route::get('/autos',[AutoController::class,'index']);
Route::post('/autos/create',[AutoController::class,'store']);
Route::post('/autos/update/{id}',[AutoController::class,'update']);
Route::get('/autos/edit/{id}',[AutoController::class,'edit']);

Route::get('/Jugador',[JugadorController::class,'index']);
Route::post('/Jugador/store',[JugadorController::class,'save']);
Route::get('/Jugador/edit/{id}',[JugadorController::class,'edit']);
Route::put('/Jugador/update/{id}',[JugadorController::class,'update']);
Route::delete('/Jugador/delete/{id}',[JugadorController::class,'delete']);


Route::get('/persona/registro',[JugadorController::class,'index1']);
<?php

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

Route::get('/cadastrar',[\App\Http\Controllers\cadastrarUsuario::class,'index']);
Route::get('/home',[\App\Http\Controllers\cadastrarUsuario::class,'home']);
Route::get('/salvar',[\App\Http\Controllers\cadastrarUsuario::class,'store']);

Route::get('/cadastrarTarefa',[\App\Http\Controllers\cadastrar::class,'index']);
Route::get('/salvar',[\App\Http\Controllers\cadastrar::class,'store']);
Route::get('/consultar',[\App\Http\Controllers\cadastrar::class,'consultar']);
Route::get('/editar/{id}', [\App\Http\Controllers\cadastrar::class, 'editar']);
Route::get('/atualizar/{id}', [\App\Http\Controllers\cadastrar::class, 'atualizar']);
Route::get('/excluir/{id}',[\App\Http\Controllers\cadastrarUsuario::class, 'excluir']);

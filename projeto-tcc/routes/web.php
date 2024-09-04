<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TccController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastros', [TccController::class, 'index']);
Route::get('/cadastros/cadastro', [TccController::class, 'cadastro']);
Route::get('/cadastros/login', [TccController::class, 'login']);
Route::post('/cadastros/recCadastro', [TccController::class, 'recCadastro']);

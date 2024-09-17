<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TccController;


Route::get('/', [TccController::class, 'index']);
Route::get('/cadastros/cadastro', [TccController::class, 'cadastro']);
Route::get('/cadastros/login', [TccController::class, 'login']);
Route::post('/cadastros/recCadastro', [TccController::class, 'recCadastro']);

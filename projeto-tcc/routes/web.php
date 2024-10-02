<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TccController;


Route::get('/', [TccController::class, 'index']);
Route::get('/cadastros/cadastro', [TccController::class, 'cadastro']);
Route::get('/cadastros/login', [TccController::class, 'login']);

Route::post('/cadastros/recCadastro', [TccController::class, 'recCadastro']);

Route::get('/cadastros/recRestrito', [TccController::class, 'recRestrito']);

Route::delete('/cadastros/{id}', [TccController::class, 'destroy'])->name('cadastros.destroy');
Route::get('/cadastros/acessoRestrito', [TccController::class, 'acessoRestrito']);

Route::get('/cadastros/{id}', [TccController::class, 'edit'])->name('cadastros.edit');
Route::put('/task/update/{id}', [TccController::class, 'update'])->name('cadastros.update');


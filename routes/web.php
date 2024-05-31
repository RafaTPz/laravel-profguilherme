<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonagemController;

Route::get('/personagens', [PersonagemController::class, 'index'])->name('personagens.index');
Route::get('/personagens/criar', [PersonagemController::class, 'create'])->name('personagens.create')->middleware('auth');
Route::post('/personagens', [PersonagemController::class, 'store'])->name('personagens.store');
Route::delete('/personagens/{id}', [PersonagemController::class, 'destroy'])->name('personagens.destroy')->middleware('auth');
Route::get('/', [HomeController::class, 'index'])->name('home');
Auth::routes();
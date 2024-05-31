<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonagemController;
use App\Http\Controllers\SobreController;


Route::get('/personagens', [PersonagemController::class, 'index'])->name('personagens.index');
Route::get('/personagens/criar', [PersonagemController::class, 'create'])->name('personagens.create')->middleware('auth');
Route::post('/personagens', [PersonagemController::class, 'store'])->name('personagens.store');
Route::delete('/personagens/{id}', [PersonagemController::class, 'destroy'])->name('personagens.destroy')->middleware('auth');
Route::get('/personagens/{id}/edit', [PersonagemController::class, 'edit'])->name('personagens.edit')->middleware('auth');
Route::put('/personagens/{id}', [PersonagemController::class, 'update'])->name('personagens.update');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sobre', [SobreController::class, 'index'])->name('sobre.index');

Auth::routes();
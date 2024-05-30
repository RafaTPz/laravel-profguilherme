<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonagemController;

Route::get('/personagens', [PersonagemController::class, 'index'])->name('personagens.index');
Route::get('/', [HomeController::class, 'index'])->name('home');
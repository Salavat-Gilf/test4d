<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\AuthController;

Route::get('/', [RecipeController::class, 'index']);

Route::get('create', [RecipeController::class, 'create']);
Route::post('create', [RecipeController::class, 'store'])->name('store');

Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'regis'])->name('regis');

Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'register']);


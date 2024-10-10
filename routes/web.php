<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;

Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/categorias/{id}', [CategoriaController::class, 'show']);
Route::get('/productos/{id}', [ProductoController::class, 'show']);
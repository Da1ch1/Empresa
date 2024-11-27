<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;



// Ruta principal
Route::get('/', [PageController::class, 'index'])->name('inicio');

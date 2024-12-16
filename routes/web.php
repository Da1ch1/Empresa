<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;



// Ruta principal
Route::get('/', [PageController::class, 'index'])->name('inicio');
Route::get('/Services', [PageController::class, 'servicios'])->name('inicial');
Route::get('/Projects', [PageController::class, 'proyectos'])->name('projects');
Route::get('/Us', [PageController::class, 'nosotros'])->name('us');
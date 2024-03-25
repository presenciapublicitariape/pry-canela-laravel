<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaludoController;

Route::get('/', function () { return view('index'); })->name('index');

Route::get('/fotitos', function () { return view('portafolio'); })->name('portafolio');

Route::get('/saludos', [SaludoController::class, 'index'])->name('contacto');
Route::post('/saludos', [SaludoController::class, 'store'])->name('contacto.store');
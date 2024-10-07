<?php

use App\Http\Controllers\FormularioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FormularioController::class, 'index'])->name('index');

Route::get('/new', [FormularioController::class, 'create'])->name('NewFormulario');
Route::post('/datos/formulario', [FormularioController::class, 'store'])->name('DatosFormulario');
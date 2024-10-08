<?php

use App\Http\Controllers\FormularioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FormularioController::class, 'index'])->name('index');

Route::get('/new', [FormularioController::class, 'create'])->name('NewFormulario');
Route::post('/datos/formulario', [FormularioController::class, 'store'])->name('DatosFormulario');
Route::get('/show/{formularioModel}', [FormularioController::class, 'show'])->name('ShowFormulario');
Route::get('/edit/{formularioModel}', [FormularioController::class, 'edit'])->name('EditFormulario');
Route::post('/update/{formularioModel}', [FormularioController::class, 'update'])->name('UpdateFormulario');
Route::get('/delete/{formularioModel}', [FormularioController::class, 'destroy'])->name('DeleteFormulario');
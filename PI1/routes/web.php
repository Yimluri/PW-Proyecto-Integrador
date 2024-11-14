<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

//registro de las vistas a pasar por el controlador

Route::get('/', [ControladorVistas::class, 'home']);
Route::get('/tratamiento', [ControladorVistas::class, 'tratamiento']);
Route::get('/servicios', [ControladorVistas::class, 'servicios']);
Route::get('/registroP', [ControladorVistas::class, 'registroPaciente']);
Route::get('/registroM', [ControladorVistas::class, 'registroMedico']);
Route::get('/administrador', [controladorVistas::class, 'siadmon']);
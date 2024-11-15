<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\AdministradorController;

// Registro de las vistas a pasar por el controlador
Route::get('/', [ControladorVistas::class, 'home']);
Route::get('/tratamiento', [ControladorVistas::class, 'tratamiento']);
Route::get('/servicios', [ControladorVistas::class, 'servicios']);
Route::get('/registroP', [ControladorVistas::class, 'registroPaciente']);
Route::get('/registroM', [ControladorVistas::class, 'registroMedico']);

// Rutas para el administrador
Route::get('/administrador', [AdministradorController::class, 'showLoginForm'])->name('administrador.login.form'); // GET para mostrar el formulario
Route::post('/administrador/login', [AdministradorController::class, 'login'])->name('administrador.login'); // POST para el inicio de sesión
Route::get('/dashboardadmon', [AdministradorController::class, 'dashboard'])->name('administrador.dashboard'); // GET para el dashboard del administrador

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/tratamiento', function () {
    return view('tratamiento');
});
Route::get('/servicios', function () {
    return view('servicios');
});
Route::get('/registroP', function () {
    return view('registroPaciente');
});
Route::get('/registroM', function () {
    return view('registroMedico');
});

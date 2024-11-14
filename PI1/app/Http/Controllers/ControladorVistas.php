<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//controlador vistas de la pagina 14/11/24
class ControladorVistas extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function tratamiento()
    {
        return view('tratamiento');
    }

    public function servicios()
    {
        return view('servicios');
    }

    public function registroPaciente()
    {
        return view('registroPaciente');
    }

    public function registroMedico()
    {
        return view('registroMedico');
    }
    public function siadmon()
    {
        return view('siadmon');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Administrador;
use App\Http\Requests\LoginAdministradorRequest;

class AdministradorController extends Controller
{
    public function showLoginForm()
    {
        return view('siadmon');
    }

    public function login(LoginAdministradorRequest $request)
    {
        $administrador = Administrador::where('nombre', $request->usuario)->first();
        if ($administrador && $administrador->contrasena === $request->contrasena) {
          
            Auth::login($administrador);
            return redirect()->route('administrador.dashboard');
        }

        
        return back()->withErrors([
            'usuario' => 'Las credenciales no son correctas.',
        ])->withInput();
    }

    public function dashboard()
    {
        return view('dashboardadmon');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('administrador.login');
    }
}

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
        // Intentar autenticar al administrador
        $administrador = Administrador::where('nombre', $request->usuario)->first();

        // Comparar la contraseña sin hash
        if ($administrador && $administrador->contrasena === $request->contrasena) {
            // Autenticar al administrador
            Auth::login($administrador);
            
            // Redirigir al dashboard del administrador
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

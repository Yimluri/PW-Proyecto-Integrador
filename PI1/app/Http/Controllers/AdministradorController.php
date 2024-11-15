<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Administrador;
use App\Http\Requests\LoginAdministradorRequest;
use App\Http\Requests\BuscarPacienteRequest;

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
            // Autenticar al administrador manualmente sin recordar token
            Auth::guard('web')->setUser($administrador);
            session(['admin_authenticated' => true]);
            
            // Redirigir al dashboard del administrador
            return redirect()->route('administrador.dashboard');
        }

        return back()->withErrors([
            'usuario' => 'Las credenciales no son correctas.',
        ])->withInput();
    }

    public function dashboard()
    {
        // Verificar si el administrador está autenticado
        if (!session('admin_authenticated')) {
            return redirect()->route('administrador.login.form');
        }

        return view('dashboardadmon');
    }

    public function logout()
    {
        session()->forget('admin_authenticated');
        Auth::logout();
        return redirect()->route('administrador.login.form');
    }

    public function pacientes()
{
    if (!session('admin_authenticated')) {
        return redirect()->route('administrador.login.form');
    }

    return view('pacientesadmin');
}
public function buscarPacientes(BuscarPacienteRequest $request)
{
    if (!session('admin_authenticated')) {
        return redirect()->route('administrador.login.form');
    }

    $queryNombre = $request->input('nombre');
    $queryNss = $request->input('nss');
    $queryIdee = $request->input('idee');

    $pacientes = Paciente::query();

    if ($queryNombre) {
        $pacientes->where('nombre', 'LIKE', "%{$queryNombre}%");
    }
    if ($queryNss) {
        $pacientes->orWhere('nss', 'LIKE', "%{$queryNss}%");
    }
    if ($queryIdee) {
        $pacientes->orWhere('idee', 'LIKE', "%{$queryIdee}%");
    }

    $pacientes = $pacientes->get();

    return view('pacientesadmin', compact('pacientes'));
}


}

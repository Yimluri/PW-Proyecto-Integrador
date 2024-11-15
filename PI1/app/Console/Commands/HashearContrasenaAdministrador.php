<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use App\Models\Administrador;

class HashearContrasenaAdministrador extends Command
{
    protected $signature = 'administrador:hashear {nombre} {contrasena}';
    protected $description = 'Hashea la contraseña de un administrador y la guarda en la base de datos';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $nombre = $this->argument('nombre');
        $contrasena = $this->argument('contrasena');

        $administrador = Administrador::where('nombre', $nombre)->first();

        if (!$administrador) {
            $this->error("Administrador con el nombre {$nombre} no encontrado.");
            return;
        }

        $administrador->contrasena = Hash::make($contrasena);
        $administrador->save();

        $this->info("Contraseña actualizada correctamente para el administrador {$nombre}.");
    }
}

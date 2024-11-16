<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Administrador extends Authenticatable
{

    protected $table = 'administradores'; 

    protected $fillable = [
        'nombre',
        'contrasena',
        'nombres',     
        'apellidos',   
    ];

    protected $hidden = [
        'contrasena',
    ];

    public function setContrasenaAttribute($value)
    {
        $this->attributes['contrasena'] = ($value);
    }
}

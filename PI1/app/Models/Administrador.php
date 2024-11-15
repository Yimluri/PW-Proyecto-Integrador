<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Administrador extends Authenticatable
{
    use HasFactory;

    protected $table = 'administradores'; 

    protected $fillable = [
        'nombre',
        'contrasena',
    ];

    protected $hidden = [
        'contrasena',
    ];

    public function setContrasenaAttribute($value)
    {
        $this->attributes['contrasena'] = bcrypt($value);
    }
}

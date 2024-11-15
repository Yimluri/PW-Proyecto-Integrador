<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginAdministradorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'usuario' => 'required|string|max:255',
            'contrasena' => 'required|string|min:6',
        ];
    }

    public function messages()
    {
        return [
            'usuario.required' => 'El campo usuario es obligatorio.',
            'contrasena.required' => 'El campo contraseña es obligatorio.',
            'contrasena.min' => 'La contraseña debe tener al menos 6 caracteres.',
        ];
    }
}

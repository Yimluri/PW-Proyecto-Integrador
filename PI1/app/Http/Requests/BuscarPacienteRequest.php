<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuscarPacienteRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => 'nullable|string',
            'nss' => 'nullable|string',
            'idee' => 'nullable|string',
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if (!$this->nombre && !$this->nss && !$this->idee) {
                $validator->errors()->add('query', 'Debe llenar al menos un campo para realizar la búsqueda.');
            }
        });
    }
}


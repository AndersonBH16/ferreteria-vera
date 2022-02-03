<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProveedorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){
        return [
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|string|max:200|unique:proveedores',
            'ruc'=> 'required|string|max:11|min:11|unique:proveedores',
            'direccion' => 'nullable|string|max:255',
            'telefono' => 'required|string|max:50|unique:proveedores',
        ];
    }

    public function messages(){
        return [
            'nombre.required' => 'Este campo es requerido',
            'name.string' => 'El valor no es correcto',
            'name.max' => 'Sólo se permiten 255 caracteres',

            'email.required' => 'Este campo es requerido',
            'email.email' => 'No es un correo electrónico',
            'email.string' => 'El valor no es correcto',
            'email.max' => 'Sólo se permiten 200 caracteres',
            'email.unique' => 'Ya se encuentra registrado',

            'ruc.required' => 'Este campo es requerido',
            'ruc.string' => 'El valor no es correcto',
            'ruc.max' => 'Sólo se permiten 11 caracteres',
            'ruc.min'    => 'Se requiere 11 caracteres',
            'ruc.unique' => 'Ya se encuentra registrado',

            'direccion.string' => 'El valor no es correcto',
            'direccion.max' => 'Sólo se permiten 11 caracteres',

            'telefono.required' => 'Este campo es requerido',
            'telefono.string' => 'El valor no es correcto',
            'telefono.max' => 'Sólo se permiten 11 caracteres',
            'telefono.unique' => 'Ya se encuentra registrado',
        ];
    }
}


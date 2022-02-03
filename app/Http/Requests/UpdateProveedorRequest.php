<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProveedorRequest extends FormRequest
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
    public function rules()
    {
        return [
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|string|unique:proveedores, email,',

            'ruc'=> 'required|string|min:11|unique:proveedores, ruc,'.
                $this->route('proveedores')->id.'|max:11',

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

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClienteRequest extends FormRequest
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
            'nombre' => 'string|required|max:255',
            'dni' => 'string|required|unique:clients,dni,' . $this->route('cliente')->id . '|max:8',
            'ruc' => 'string|required|unique:clients,ruc,' . $this->route('cliente')->id . '|max:11',
            'direccion' => 'string|required|max:255',
            'telefono' => 'string|required|unique:clients,telefono,' . $this->route('cliente')->id,
            'email' => 'string|required|unique:clients,email,' . $this->route('cliente')->id . '|max:255|email:rfc,dns',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required'    => 'string|required|max:255',
            'nombre.string'       => 'string|required|unique:clients|max:8',
            'nombre.max'       => 'string|required|unique:clients|max:11',

            'dni.string' => 'El valor no es correcto',
            'dni.required' => 'Este campo es requerido',
            'dni.unique' => 'Este DNI ya se encuentra registrado',
            'dni.min' => 'Se requiere de 8 caracteres',
            'dni.max' => 'Sólo se permite 8 caracteres',

            'ruc.string' => 'El valor no es correcto',
            'ruc.unique' => 'Este RUC ya se encuentra registrado',
            'ruc.min' => 'Se requiere de 11 caracteres',
            'ruc.max' => 'Sólo se permite de 11 caracteres',

            'direccion.string' => 'El valor no es correcto',
            'direccion.max' => 'Sólo se permite 255 caracteres',

            'telefono.string' => 'El valor no es correcto',
            'telefono.unique' => 'El numero de celular ya se encuentra registrado',

            'email.string' => 'El valor no es correcto',
            'email.unique' => 'El correo ya está registrado',
            'email.max' => 'Sólo se permite 255 caracteres',
            'email.email' => 'No es un correo electrónico',
        ];
    }
}

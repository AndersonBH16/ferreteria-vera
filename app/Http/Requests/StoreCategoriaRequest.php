<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoriaRequest extends FormRequest
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
            'nombreCategoria' => 'required|string|max:50',
            'descripcionCategoria' => 'required|string|max:250'
        ];
    }

    public function messages(){
        return [
            'nombreCategoria.required' => 'Este campo es requerido',
            'nombreCategoria.string' => 'El valor no es correcto',
            'nombreCategoria.max' => 'Sólo se permiten 50 caracteres',
            'descripcionCategoria.required' => 'Este campo es requerido',
            'descripcionCategoria.string' => 'El valor no es correcto',
            'descripcionCategoria.max' => 'Sólo se permiten 255 caracteres'
        ];
    }
}

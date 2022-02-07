<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductoRequest extends FormRequest
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
            'nombre_producto' => 'string|required|unique:productos, name,'.$this->route('producto')->id.'|max:"255',
            'imagen' => 'required|dimensions:min_width:100, min_height:200',
            'precio_individual' => 'required',
            'categoria_id' => 'integer|required|exists:App\Categoria, id',
            'proveedor_id' => 'integer|required|exists:App\Proveedor, id'
        ];
    }

    public function messages(){
        return [
            'nombre_producto.string' => 'El valor no es correcto',
            'nombre_producto.required' => 'Este campo es requerido',
            'nombre_producto.unique' => 'El producto ya está registrado',
            'nombre_producto.max' => 'Sólo permite 255 caracteres',

            'imagen.required' => 'El campo es requerido',
            'imagen.dimensions' => 'Sólo se permiten imágenes de 100x200 px',

            'precio_individual' => 'El campo es requerido',

            'categoria_id.integer' => 'El valor tiene que ser entero',
            'categoria_id.required' => 'El campo es requerido',
            'categoria_id.exists' => 'La categorias no existe',

            'proveedor_id.integer' => 'El valor tiene que ser entero',
            'proveedor_id.required' => 'El campo es requerido',
            'proveedor_id.exists' => 'La categorias no existe'
        ];
    }
}

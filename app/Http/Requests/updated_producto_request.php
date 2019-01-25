<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updated_producto_request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */public function rules()
    {
        return [
            //
            'name' =>'required | unique:producto,PR_nombre,'.request()->input('id').',PR_ID',
            'presentacion' =>'required | digits_between:1,20',
            'unidad' =>'required | alpha_dash | string:20',
            'precio' =>'required | digits_between:1,20',
            'categoria' =>'required | integer | exists:categoria,CA_ID',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio',
            'presentacion.required' => 'La presentacion es obligatoria',
            'presentacion.digits_between' => 'Numero muy largo',
            'unidad.required' => 'La unidad es obligatoria',
            'unidad.alpha_dash' => 'Solo letras y piso bajo',
            'unidad.string' => 'debe ser mas corto',
            'precio.required' => 'El precio es obligatorio',
            'precio.digits_between' => 'numero muy largo',
            'categoria.required' => 'la categoria es obligatoria',
            'categoria.integer' => 'solo numeros',
            'categoria.exists' => 'la categoria no existe en la base de datos',
        ];
    }
}

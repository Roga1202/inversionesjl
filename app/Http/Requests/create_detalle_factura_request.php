<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class create_detalle_factura_request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'id' =>'required | exists:cliente,CL_ID',
            'iva' =>'required | digits_between:1,100',
            'total' =>'required | numeric',
            'precio' =>'required | digits_between:1,20',
        ];
    }

    public function messages()
    {
        return [
            'id.required' => 'El id es obligatorio',
            'id.exists' => 'El cliente no esta registrado',
            'iva.required' => 'El iva es requerido',
            'iva.digits_between' => 'iva muy alto',
            'total.required' => 'El total es obligatorio',
            'total.numeric' => 'Solo numeros',
            'precio.required' => 'El precio es obligatorio',
            'precio.digits_between' => 'numero muy largo',
        ];
    }
}

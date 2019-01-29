<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class create_factura_request extends FormRequest
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
     */
    public function rules()
    {
        return [
            //
            'cliente_id' =>'required | exists:cliente,CL_ID',
            'subTotal' =>'required | numeric',
            'iva' =>'required | numeric',
            'total' =>'required | numeric',
        ];
    }

    public function messages()
    {
        return [
            'cliente_id.required' => 'El id es obligatorio',
            'cliente_id.exists' => 'El cliente no esta registrado',
            'iva.required' => 'El iva es requerido',
            'iva.digits_between' => 'iva muy alto',
            'total.required' => 'El total es obligatorio',
            'total.numeric' => 'Solo numeros',
            'precio.required' => 'El precio es obligatorio',
            'precio.digits_between' => 'numero muy largo',
        ];
    }
}

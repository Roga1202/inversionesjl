<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class create_categoria_request extends FormRequest
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
            'name' =>'required | unique:categoria,CA_nombre',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio',
            'name.unique' => 'El nombre ya existe',
        ];
    }
}

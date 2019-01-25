<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updated_cliente_request extends FormRequest
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
            'primer_nombre' =>'required | Alpha | string:20',
            'otro_nombre' =>'Alpha | string:20',
            'primer_apellido' =>'required | Alpha | string:20',
            'otro_apellido' =>'Alpha | string:20',
            'ci' =>'required | digits_between::1,8 | unique:cliente,CL_CI,'.request()->input('ci').',CL_CI',
            'telefono' =>'required | digits_between::1,11 | unique:cliente,CL_telefono,'.request()->input('telefono').',CL_telefono',
            'direccion' =>'required',
            'correo' =>'required | email | unique:cliente,CL_correo,'.request()->input('correo').',CL_correo',
            'empresa_envio' =>'required | string:50',
            'estado' =>'required | exists:estado,ES_ID',
            'ciudad' =>'required | exists:ciudad,CI_ID',
            //
        ];
    }

    public function messages()
    {
        return [
            'primer_nombre.required' => 'El nombre es obligatorio',
            'primer_nombre.Alpha' => 'Solo se aceptan letras',
            'primer_nombre.string' => 'Campo muy largo debe ser menor de 20 caracteres',
            'otro_nombre.Alpha' => 'Solo se aceptan letras',
            'otro_nombre.string' => 'Campo muy largo debe ser menor de 20 caracteres',
            'primer_apellido.required' => 'El primer apellido es obligatorio',
            'primer_apellido.Alpha' => 'Solo se aceptan letras',
            'primer_apellido.string' => 'Campo muy largo debe ser menor de 20 caracteres',
            'otro_apellido.Alpha' => 'Solo se aceptan letras',
            'otro_apellido.string' => 'Campo muy largo debe ser menor de 20 caracteres',
            'ci.required' => 'La cedula es obligatoria',
            'ci.digits' => 'Campo muy largo es mayor de 8 digitos',
            'ci.unique' => 'La cedula ya esta registrada',
            'telefono.required' => 'El telefono es requerido',
            'telefono.digits' => 'Campo muy largo es mayor de 8 digitos',
            'telefono.unique' => 'El telefono ya esta registrado',
            'direccion.required' => 'La direccion es Obligatoria',
            'correo.required' => 'El correo es obligatorio',
            'correo.email' => 'El campo debe ser un email',
            'correo.unique' => 'El correo ya se encuentra registrado',
            'empresa_envio.required' => 'El campo empresa de envio es requerida',
            'empresa_envio.string' => 'Campo muy largo es mayor a 50 caracteres ',
            'estado.required' => 'El estado es Obligatorio',
            'estado.exists' => 'El estado no se encuentra en la base de datos',
            'ciudad.required' => 'La ciudad es Obligatoria',
            'ciudad.exits' => 'La ciudad no se encuentra en la base de datos',
        ];
    }
}

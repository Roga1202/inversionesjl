<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    //

    protected $guarded = [];

    const CREATED_AT = 'CL_inicio';
    const UPDATED_AT = 'CL_actualizacion';

    protected $table = 'cliente';
    protected $fillable= ['CL_primer_nombre','CL_otros_nombres','CL_primer_apellido','CL_otros apellidos','CL_numero_compras','CL_CI','CL_telefono','CL_direcYOcion','CL_correo','CL_empresa_envio'];
}

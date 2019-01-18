<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class administrador extends Model
{
    
    protected $guarded = [];
    
    const CREATED_AT = 'AD_inicio';
    const UPDATED_AT = 'AD_actualizacion';
    protected $table= 'administrador';
    protected $fillable = ['AD_primer_nombre','AD_otros_nombres','AD_primer_apellido','AD_otros apellidos','AD_CI','AD_telefono','AD_correo'];

    //
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //

    protected $guarded = [];

    protected $primaryKey = 'CL_ID';
    const CREATED_AT = 'CL_inicio';
    const UPDATED_AT = 'CL_actualizacion';

    protected $table = 'cliente';
    protected $fillable= ['CL_primer_nombre','CL_otros_nombres','CL_primer_apellido','CL_otros_apellidos','CL_numero_compras','CL_CI','CL_telefono','CL_direccion','CL_correo','CL_empresa_envio','CL_estado','CL_ciudad'];

    
    public function estado()
    {
        return $this->hasOne('App\Estado', 'ES_ID', 'CL_ID');
    }

    public function ciudad()
    {
        return $this->belongsTo('App\Ciudad', 'CL_ID', 'CI_ID');
    }
}


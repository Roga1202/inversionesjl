<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_factura extends Model
{

    protected $guarded= [];

    const CREATED_AT = 'DF_inicio';
    const UPDATED_AT = 'DF_actualizacion';
    protected $primaryKey= 'DF_ID';


    protected $table = 'detalles_factura';
    protected $fillable = ['FA_ID','PR_ID','DF_cantidad','DF_precio'];
    
}
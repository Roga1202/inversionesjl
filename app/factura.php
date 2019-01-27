<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    
    protected $guarded = [];

    const CREATED_AT = 'FA_inicio';
    const UPDATED_AT = 'FA_actualizacion';

    protected $table = 'factura';
    protected $fillable= ['CL_ID','FA_precio_neto','FA_IVA','FA_precio_total'];
}

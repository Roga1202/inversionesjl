<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    
    protected $guarded = [];

    const CREATED_AT = 'FA_inicio';
    const UPDATED_AT = 'FA_actualizacion';
    protected $primaryKey = 'FA_ID';

    protected $table = 'factura';
    protected $fillable= ['CL_ID','FA_precio_neto','FA_IVA','FA_precio_total'];

    
    public function detalle_factura()
    {
        return $this->hasMany('App\Detalle_factura','FA_ID','FA_ID');
    }

    public function Cliente()
    {
        return $this->belongsTo('App\Cliente','CL_ID','CL_ID');
    }
}

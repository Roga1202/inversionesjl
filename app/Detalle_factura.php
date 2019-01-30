<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_factura extends Model
{

    protected $guarded= [];

    const CREATED_AT = 'DF_inicio';
    const UPDATED_AT = 'DF_actualizacion';
    protected $primaryKey= 'DF_ID';


    protected $table = 'detalle_factura';
    protected $fillable = ['FA_ID','PR_ID','DF_cantidad','DF_precio','DF_precio_total'];

        
        public function Factura()
    {
        return $this->belongsTo('App\Factura', 'FA_ID', 'DF_ID');
    }



    public function Producto()
    {
        return $this->belongsTo('App\Producto','PR_ID','PR_ID');
    }
}
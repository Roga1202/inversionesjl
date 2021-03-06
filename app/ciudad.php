<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $guarded = [];

    protected $primaryKey = 'CI_ID';
    const CREATED_AT = 'CI_inicio';
    const UPDATED_AT = 'CI_actualizacion';

    protected $table = 'ciudad';
    protected $fillable = ['ES_ID','CI_nombre'];


    public static function ciudades($id){
        return Ciudad::where('ES_ID','=',$id)->get();
    }

    
    public function Estado()
    {
        return $this->hasOne('App\Estado','ES_ID','CI_ID');
    }

    public function cliente()
    {
        return $this->belongsTo('App\Cliente','CL_ID','CI_ID');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $guarded = [] ;

    const CREATED_AT = 'ES_inicio';
    const UPDATED_AT = 'ES_actualizacion';

    protected $primaryKey= 'ES_ID';
    protected $table = 'estado';
    protected $fillable = ['ES_nombre'];

    public function cliente()
    {
        return $this->belongsTo('App\Cliente','CL_estado','ES_ID');
    }

    
    public function ciudad()
    {
        return $this->hasMany('App\Ciudad','CI_ID','ES_ID');
    }

    public static function estados($id){
        return Ciudad::where('ES_ID','=',$id)->get();
    }



}

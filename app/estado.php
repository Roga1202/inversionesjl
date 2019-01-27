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


    public static function estados($id){
        return Ciudad::where('ES_ID','=',$id)->get();
    }

}

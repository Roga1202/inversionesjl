<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //

    protected $guarded = [];
    protected $primaryKey = 'CA_ID';
    const CREATED_AT = 'CA_inicio';
    const UPDATED_AT = 'CA_actualizacion';

    protected $table = 'categoria';
    protected $fillable = ['CA_nombre'];

    public function productos()
    {
        return $this->hasMany('App\Producto','PR_ID','CA_ID');
    }


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    //

    protected $guarded = [];
    protected $primaryKey = 'CA_ID';
    const CREATED_AT = 'CA_inicio';
    const UPDATED_AT = 'CA_actualizacion';

    protected $table = 'categoria';
    protected $fillable = ['CA_nombre'];

}

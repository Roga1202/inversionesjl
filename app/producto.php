<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    //

    protected $guarded = [];

    const CREATED_AT = 'PR_inicio';
    const CREATED_AT = 'PR_actualizacion';

    protected $table = 'producto';
    protected $fillable = ['PR_nombre','PR_presentacion','PR_unidad','PR_precio','PR_precio','CA_ID'];
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    //

    protected $guarded = [];
    protected $primaryKey = 'PR_ID';

    const CREATED_AT = 'PR_inicio';
    const UPDATED_AT = 'PR_actualizacion';

    protected $table = 'producto';
    protected $fillable = ['PR_nombre','PR_presentacion','PR_unidad','PR_precio','CA_ID'];
    
}

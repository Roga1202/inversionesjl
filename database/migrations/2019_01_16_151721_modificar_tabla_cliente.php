<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModificarTablaCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cliente', function (Blueprint $table){
            $table->renameColumn('created_at','CL_inicio');
            $table->renameColumn('updated_at','CL_actualizacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cliente', function (Blueprint $table){
            $table->renameColumn('CL_inicio','created_at');
            $table->renameColumn('CL_actualizacion','updated_at');
        });
    }
}

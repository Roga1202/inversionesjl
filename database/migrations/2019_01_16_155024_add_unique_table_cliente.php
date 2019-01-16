<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUniqueTableCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cliente', function (Blueprint $table){
            $table->unique('CL_CI', 'CL_telefono','CL_correo');
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
            $table->dropUnique('CL_CI');
            $table->dropUnique('CL_telefono');
            $table->dropUnique('CL_correo');
        });
    }
}

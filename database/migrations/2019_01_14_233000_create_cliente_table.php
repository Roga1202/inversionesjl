<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_spanish2_ci';
            $table->increments('CL_ID');
            $table->string('CL_primer_nombre', 20);
            $table->string('CL_otros_nombres', 20)->nullable();
            $table->string('CL_primer_apellido', 20);
            $table->string('CL_otros_apellidos', 20)->nullable();
            $table->BigInteger('CL_numero_compras')->default(0);
            $table->BigInteger('CL_CI');
            $table->integer('CL_telefono');
            $table->string('CL_direccion', 250);
            $table->string('CL_correo', 50);
            $table->string('CL_empresa_envio', 50);
            $table->timestamp('CL_inicio')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('CL_actualizacion')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}

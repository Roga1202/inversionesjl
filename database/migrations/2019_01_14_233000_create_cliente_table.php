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
            $table->collation = 'utf8_unicode_ci';
            $table->bigIncrements('CL_ID');
            $table->string('CL_primer_nombre', 20);
            $table->string('CL_otros_nombres', 20)->nullable();
            $table->string('CL_primer_apellido', 20);
            $table->string('CL_otros apellidos', 20)->nullable();
            $table->BigInteger('CL_numero_compras');
            $table->BigInteger('CL_CI');
            $table->integer('CL_telefono');
            $table->string('CL_dirección', 250);
            $table->string('CL_correo', 50);
            $table->timestamps();
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

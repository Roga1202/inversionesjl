<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAdministrador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrador', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_spanish2_ci';
            $table->bigIncrements('AD_ID');
            $table->string('AD_primer_nombre', 20);
            $table->string('AD_otros_nombres', 20)->nullable();
            $table->string('AD_primer_apellido', 20);
            $table->string('AD_otros apellidos', 20)->nullable();
            $table->BigInteger('AD_CI')->unique();
            $table->integer('AD_telefono')->unique();
            $table->string('AD_correo', 50)->unique();
            $table->timestamp('AD_inicio')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('AD_actualizacion')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administrador');
    }
}

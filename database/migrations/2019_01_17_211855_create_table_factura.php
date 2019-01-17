<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFactura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_spanish2_ci';
            $table->increments('FA_ID');
            $table->integer('CL_ID')->unsigned();
            $table->foreign('CL_ID')->references('CL_ID')->on('cliente')->onDelete('cascade');
            $table->double('FA_precio_neto')->unsigned();
            $table->integer('FA_IVA')->unsigned();	
            $table->double('FA_precio_total')->unsigned();
            $table->timestamp('FA_inicio')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('FA_actualizacion')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDetallesFactura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_factura', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_spanish2_ci';
            $table->increments('DF_ID');
            $table->integer('FA_ID')->unsigned();
            $table->foreign('FA_ID')->references('FA_ID')->on('factura')->onDelete('cascade');
            $table->integer('PR_ID')->unsigned();
            $table->foreign('PR_ID')->references('PR_ID')->on('producto')->onDelete('cascade');
            $table->bigInteger('DF_cantidad');
            $table->double('DF_precio')->unsigned();
            $table->double('DF_precio_total')->unsigned();
            $table->timestamp('DF_inicio')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('DF_actualizacion')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles_factura');
    }
}

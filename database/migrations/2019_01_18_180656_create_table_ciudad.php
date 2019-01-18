<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCiudad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudad', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_spanish2_ci';
            $table->increments('CI_ID');
            $table->integer('ES_ID')->unsigned();
            $table->foreign('ES_ID')->references('ES_ID')->on('estado')->onDelete('cascade');
            $table->string('CI_nombre', 50);
            $table->timestamp('CI_inicio')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('CI_actualizacion')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ciudad');
    }
}

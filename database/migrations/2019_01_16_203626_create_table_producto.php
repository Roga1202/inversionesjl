<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_spanish2_ci';
            $table->bigIncrements('PR_ID');
            $table->string('PR_nombre', 50);
            $table->BigInteger('PR_presentacion');
            $table->string('PR_unidad', 20);
            $table->BigInteger('PR_precio');
            $table->timestamp('AD_inicio')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('AD_actualizacion')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->integer('CA_ID')->unsigned();
            $table->foreign('CA_ID')->references('CA_ID')->on('categoria')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDatesEstado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('estado', function (Blueprint $table) {
            DB::table('estado')->insert([
                ['ES_nombre' => 'Amazonas'],
                ['ES_nombre' => 'Anzoátegui'],
                ['ES_nombre' => 'Apure'],
                ['ES_nombre' => 'Aragua'],
                ['ES_nombre' => 'Barinas'],
                ['ES_nombre' => 'Bolívar'],
                ['ES_nombre' => 'Carabobo'],
                ['ES_nombre' => 'Cojedes'],
                ['ES_nombre' => 'Delta Amacuro'],
                ['ES_nombre' => 'Falcón'],
                ['ES_nombre' => 'Guárico'],
                ['ES_nombre' => 'Lara'],
                ['ES_nombre' => 'Mérida'],
                ['ES_nombre' => 'Miranda'],
                ['ES_nombre' => 'Monagas'],
                ['ES_nombre' => 'Nueva Esparta'],
                ['ES_nombre' => 'Portuguesa'],
                ['ES_nombre' => 'Sucre'],
                ['ES_nombre' => 'Táchira'],
                ['ES_nombre' => 'Trujillo'],
                ['ES_nombre' => 'Vargas'],
                ['ES_nombre' => 'Yaracuy'],
                ['ES_nombre' => 'Zulia'],
                ['ES_nombre' => 'Distrito Capital'],
                ['ES_nombre' => 'Dependencias Federales'],
            ]);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('estado', function (Blueprint $table) {
            DB::table('estado')->DELETE ()->ondelete('cascade');
        });
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDatesCiudad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ciudad', function (Blueprint $table) {
            DB::table('ciudad')->insert([
                ['ES_ID' => 1, 'CI_nombre' =>'Maroa'],
                ['ES_ID' => 1, 'CI_nombre' =>'Puerto Ayacucho'],
                ['ES_ID' => 1, 'CI_nombre' =>'San Fernando de Atabapo'],
                ['ES_ID' => 2, 'CI_nombre' =>'Anaco'],
                ['ES_ID' => 2, 'CI_nombre' =>'Aragua de Barcelona'],
                ['ES_ID' => 2, 'CI_nombre' =>'Barcelona'],
                ['ES_ID' => 2, 'CI_nombre' =>'Boca de Uchire'],
                ['ES_ID' => 2, 'CI_nombre' =>'Cantaura'],
                ['ES_ID' => 2, 'CI_nombre' =>'Clarines'],
                ['ES_ID' => 2, 'CI_nombre' =>'El Chaparro'],
                ['ES_ID' => 2, 'CI_nombre' =>'El Pao Anzoátegui'],
                ['ES_ID' => 2, 'CI_nombre' =>'El Tigre'],
                ['ES_ID' => 2, 'CI_nombre' =>'El Tigrito'],
                ['ES_ID' => 2, 'CI_nombre' =>'Guanape'],
                ['ES_ID' => 2, 'CI_nombre' =>'Guanta'],
                ['ES_ID' => 2, 'CI_nombre' =>'Lechería'],
                ['ES_ID' => 2, 'CI_nombre' =>'Onoto'],
                ['ES_ID' => 2, 'CI_nombre' =>'Pariaguán'],
                ['ES_ID' => 2, 'CI_nombre' =>'Píritu'],
                ['ES_ID' => 2, 'CI_nombre' =>'Puerto La Cruz'],
                ['ES_ID' => 2, 'CI_nombre' =>'Puerto Píritu'],
                ['ES_ID' => 2, 'CI_nombre' =>'Sabana de Uchire'],
                ['ES_ID' => 2, 'CI_nombre' =>'San Mateo Anzoátegui'],
                ['ES_ID' => 2, 'CI_nombre' =>'San Pablo Anzoátegui'],
                ['ES_ID' => 2, 'CI_nombre' =>'San Tomé'],
                ['ES_ID' => 2, 'CI_nombre' =>'Santa Ana de Anzoátegui'],
                ['ES_ID' => 2, 'CI_nombre' =>'Santa Fe Anzoátegui'],
                ['ES_ID' => 2, 'CI_nombre' =>'Santa Rosa'],
                ['ES_ID' => 2, 'CI_nombre' =>'Soledad'],
                ['ES_ID' => 2, 'CI_nombre' =>'Urica'],
                ['ES_ID' => 2, 'CI_nombre' =>'Valle de Guanape'],
                ['ES_ID' => 3, 'CI_nombre' =>'Achaguas'],
                ['ES_ID' => 3, 'CI_nombre' =>'Biruaca'],
                ['ES_ID' => 3, 'CI_nombre' =>'Bruzual'],
                ['ES_ID' => 3, 'CI_nombre' =>'El Amparo'],
                ['ES_ID' => 3, 'CI_nombre' =>'El Nula'],
                ['ES_ID' => 3, 'CI_nombre' =>'Elorza'],
                ['ES_ID' => 3, 'CI_nombre' =>'Guasdualito'],
                ['ES_ID' => 3, 'CI_nombre' =>'Mantecal'],
                ['ES_ID' => 3, 'CI_nombre' =>'Puerto Páez'],
                ['ES_ID' => 3, 'CI_nombre' =>'San Fernando de Apure'],
                ['ES_ID' => 3, 'CI_nombre' =>'San Juan de Payara'],
                ['ES_ID' => 4, 'CI_nombre' =>'Barbacoas'],
                ['ES_ID' => 4, 'CI_nombre' =>'Cagua'],
                ['ES_ID' => 4, 'CI_nombre' =>'Camatagua'],
                ['ES_ID' => 4, 'CI_nombre' =>'Choroní'],
                ['ES_ID' => 4, 'CI_nombre' =>'Colonia Tovar'],
                ['ES_ID' => 4, 'CI_nombre' =>'El Consejo'],
                ['ES_ID' => 4, 'CI_nombre' =>'La Victoria'],
                ['ES_ID' => 4, 'CI_nombre' =>'Las Tejerías'],
                ['ES_ID' => 4, 'CI_nombre' =>'Magdaleno'],
                ['ES_ID' => 4, 'CI_nombre' =>'Maracay'],
                ['ES_ID' => 4, 'CI_nombre' =>'Ocumare de La Costa'],
                ['ES_ID' => 4, 'CI_nombre' =>'Palo Negro'],
                ['ES_ID' => 4, 'CI_nombre' =>'San Casimiro'],
                ['ES_ID' => 4, 'CI_nombre' =>'San Mateo'],
                ['ES_ID' => 4, 'CI_nombre' =>'San Sebastián'],
                ['ES_ID' => 4, 'CI_nombre' =>'Santa Cruz de Aragua'],
                ['ES_ID' => 4, 'CI_nombre' =>'Tocorón'],
                ['ES_ID' => 4, 'CI_nombre' =>'Turmero'],
                ['ES_ID' => 4, 'CI_nombre' =>'Villa de Cura'],
                ['ES_ID' => 4, 'CI_nombre' =>'Zuata'],
                ['ES_ID' => 5, 'CI_nombre' =>'Barinas'],
                ['ES_ID' => 5, 'CI_nombre' =>'Barinitas'],
                ['ES_ID' => 5, 'CI_nombre' =>'Barrancas'],
                ['ES_ID' => 5, 'CI_nombre' =>'Calderas'],
                ['ES_ID' => 5, 'CI_nombre' =>'Capitanejo'],
                ['ES_ID' => 5, 'CI_nombre' =>'Ciudad Bolivia'],
                ['ES_ID' => 5, 'CI_nombre' =>'El Cantón'],
                ['ES_ID' => 5, 'CI_nombre' =>'Las Veguitas'],
                ['ES_ID' => 5, 'CI_nombre' =>'Libertad de Barinas'],
                ['ES_ID' => 5, 'CI_nombre' =>'Sabaneta'],
                ['ES_ID' => 5, 'CI_nombre' =>'Santa Bárbara de Barinas'],
                ['ES_ID' => 5, 'CI_nombre' =>'Socopó'],
                ['ES_ID' => 6, 'CI_nombre' =>'Caicara del Orinoco'],
                ['ES_ID' => 6, 'CI_nombre' =>'Canaima'],
                ['ES_ID' => 6, 'CI_nombre' =>'Ciudad Bolívar'],
                ['ES_ID' => 6, 'CI_nombre' =>'Ciudad Piar'],
                ['ES_ID' => 6, 'CI_nombre' =>'El Callao'],
                ['ES_ID' => 6, 'CI_nombre' =>'El Dorado'],
                ['ES_ID' => 6, 'CI_nombre' =>'El Manteco'],
                ['ES_ID' => 6, 'CI_nombre' =>'El Palmar'],
                ['ES_ID' => 6, 'CI_nombre' =>'El Pao'],
                ['ES_ID' => 6, 'CI_nombre' =>'Guasipati'],
                ['ES_ID' => 6, 'CI_nombre' =>'Guri'],
                ['ES_ID' => 6, 'CI_nombre' =>'La Paragua'],
                ['ES_ID' => 6, 'CI_nombre' =>'Matanzas'],
                ['ES_ID' => 6, 'CI_nombre' =>'Puerto Ordaz'],
                ['ES_ID' => 6, 'CI_nombre' =>'San Félix'],
                ['ES_ID' => 6, 'CI_nombre' =>'Santa Elena de Uairén'],
                ['ES_ID' => 6, 'CI_nombre' =>'Tumeremo'],
                ['ES_ID' => 6, 'CI_nombre' =>'Unare'],
                ['ES_ID' => 6, 'CI_nombre' =>'Upata'],
                ['ES_ID' => 7, 'CI_nombre' =>'Bejuma'],
                ['ES_ID' => 7, 'CI_nombre' =>'Belén'],
                ['ES_ID' => 7, 'CI_nombre' =>'Campo de Carabobo'],
                ['ES_ID' => 7, 'CI_nombre' =>'Canoabo'],
                ['ES_ID' => 7, 'CI_nombre' =>'Central Tacarigua'],
                ['ES_ID' => 7, 'CI_nombre' =>'Chirgua'],
                ['ES_ID' => 7, 'CI_nombre' =>'Ciudad Alianza'],
                ['ES_ID' => 7, 'CI_nombre' =>'El Palito'],
                ['ES_ID' => 7, 'CI_nombre' =>'Guacara'],
                ['ES_ID' => 7, 'CI_nombre' =>'Guigue'],
                ['ES_ID' => 7, 'CI_nombre' =>'Las Trincheras'],
                ['ES_ID' => 7, 'CI_nombre' =>'Los Guayos'],
                ['ES_ID' => 7, 'CI_nombre' =>'Mariara'],
                ['ES_ID' => 7, 'CI_nombre' =>'Miranda'],
                ['ES_ID' => 7, 'CI_nombre' =>'Montalbán'],
                ['ES_ID' => 7, 'CI_nombre' =>'Morón'],
                ['ES_ID' => 7, 'CI_nombre' =>'Naguanagua'],
                ['ES_ID' => 7, 'CI_nombre' =>'Puerto Cabello'],
                ['ES_ID' => 7, 'CI_nombre' =>'San Joaquín'],
                ['ES_ID' => 7, 'CI_nombre' =>'Tocuyito'],
                ['ES_ID' => 7, 'CI_nombre' =>'Urama'],
                ['ES_ID' => 7, 'CI_nombre' =>'Valencia'],
                ['ES_ID' => 7, 'CI_nombre' =>'Vigirimita'],
                ['ES_ID' => 8, 'CI_nombre' =>'Aguirre'],
                ['ES_ID' => 8, 'CI_nombre' =>'Apartaderos Cojedes'],
                ['ES_ID' => 8, 'CI_nombre' =>'Arismendi'],
                ['ES_ID' => 8, 'CI_nombre' =>'Camuriquito'],
                ['ES_ID' => 8, 'CI_nombre' =>'El Baúl'],
                ['ES_ID' => 8, 'CI_nombre' =>'El Limón'],
                ['ES_ID' => 8, 'CI_nombre' =>'El Pao Cojedes'],
                ['ES_ID' => 8, 'CI_nombre' =>'El Socorro'],
                ['ES_ID' => 8, 'CI_nombre' =>'La Aguadita'],
                ['ES_ID' => 8, 'CI_nombre' =>'Las Vegas'],
                ['ES_ID' => 8, 'CI_nombre' =>'Libertad de Cojedes'],
                ['ES_ID' => 8, 'CI_nombre' =>'Mapuey'],
                ['ES_ID' => 8, 'CI_nombre' =>'Piñedo'],
                ['ES_ID' => 8, 'CI_nombre' =>'Samancito'],
                ['ES_ID' => 8, 'CI_nombre' =>'San Carlos'],
                ['ES_ID' => 8, 'CI_nombre' =>'Sucre'],
                ['ES_ID' => 8, 'CI_nombre' =>'Tinaco'],
                ['ES_ID' => 8, 'CI_nombre' =>'Tinaquillo'],
                ['ES_ID' => 8, 'CI_nombre' =>'Vallecito'],
                ['ES_ID' => 9, 'CI_nombre' =>'Tucupita'],
                ['ES_ID' => 24, 'CI_nombre' =>'Caracas'],
                ['ES_ID' => 24, 'CI_nombre' =>'El Junquito'],
                ['ES_ID' => 10, 'CI_nombre' =>'Adícora'],
                ['ES_ID' => 10, 'CI_nombre' =>'Boca de Aroa'],
                ['ES_ID' => 10, 'CI_nombre' =>'Cabure'],
                ['ES_ID' => 10, 'CI_nombre' =>'Capadare'],
                ['ES_ID' => 10, 'CI_nombre' =>'Capatárida'],
                ['ES_ID' => 10, 'CI_nombre' =>'Chichiriviche'],
                ['ES_ID' => 10, 'CI_nombre' =>'Churuguara'],
                ['ES_ID' => 10, 'CI_nombre' =>'Coro'],
                ['ES_ID' => 10, 'CI_nombre' =>'Cumarebo'],
                ['ES_ID' => 10, 'CI_nombre' =>'Dabajuro'],
                ['ES_ID' => 10, 'CI_nombre' =>'Judibana'],
                ['ES_ID' => 10, 'CI_nombre' =>'La Cruz de Taratara'],
                ['ES_ID' => 10, 'CI_nombre' =>'La Vela de Coro'],
                ['ES_ID' => 10, 'CI_nombre' =>'Los Taques'],
                ['ES_ID' => 10, 'CI_nombre' =>'Maparari'],
                ['ES_ID' => 10, 'CI_nombre' =>'Mene de Mauroa'],
                ['ES_ID' => 10, 'CI_nombre' =>'Mirimire'],
                ['ES_ID' => 10, 'CI_nombre' =>'Pedregal'],
                ['ES_ID' => 10, 'CI_nombre' =>'Píritu Falcón'],
                ['ES_ID' => 10, 'CI_nombre' =>'Pueblo Nuevo Falcón'],
                ['ES_ID' => 10, 'CI_nombre' =>'Puerto Cumarebo'],
                ['ES_ID' => 10, 'CI_nombre' =>'Punta Cardón'],
                ['ES_ID' => 10, 'CI_nombre' =>'Punto Fijo'],
                ['ES_ID' => 10, 'CI_nombre' =>'San Juan de Los Cayos'],
                ['ES_ID' => 10, 'CI_nombre' =>'San Luis'],
                ['ES_ID' => 10, 'CI_nombre' =>'Santa Ana Falcón'],
                ['ES_ID' => 10, 'CI_nombre' =>'Santa Cruz De Bucaral'],
                ['ES_ID' => 10, 'CI_nombre' =>'Tocopero'],
                ['ES_ID' => 10, 'CI_nombre' =>'Tocuyo de La Costa'],
                ['ES_ID' => 10, 'CI_nombre' =>'Tucacas'],
                ['ES_ID' => 10, 'CI_nombre' =>'Yaracal'],
                ['ES_ID' => 11, 'CI_nombre' =>'Altagracia de Orituco'],
                ['ES_ID' => 11, 'CI_nombre' =>'Cabruta'],
                ['ES_ID' => 11, 'CI_nombre' =>'Calabozo'],
                ['ES_ID' => 11, 'CI_nombre' =>'Camaguán'],
                ['ES_ID' => 11, 'CI_nombre' =>'Chaguaramas Guárico'],
                ['ES_ID' => 11, 'CI_nombre' =>'El Socorro'],
                ['ES_ID' => 11, 'CI_nombre' =>'El Sombrero'],
                ['ES_ID' => 11, 'CI_nombre' =>'Las Mercedes de Los Llanos'],
                ['ES_ID' => 11, 'CI_nombre' =>'Lezama'],
                ['ES_ID' => 11, 'CI_nombre' =>'Onoto'],
                ['ES_ID' => 11, 'CI_nombre' =>'Ortíz'],
                ['ES_ID' => 11, 'CI_nombre' =>'San José de Guaribe'],
                ['ES_ID' => 11, 'CI_nombre' =>'San Juan de Los Morros'],
                ['ES_ID' => 11, 'CI_nombre' =>'San Rafael de Laya'],
                ['ES_ID' => 11, 'CI_nombre' =>'Santa María de Ipire'],
                ['ES_ID' => 11, 'CI_nombre' =>'Tucupido'],
                ['ES_ID' => 11, 'CI_nombre' =>'Valle de La Pascua'],
                ['ES_ID' => 11, 'CI_nombre' =>'Zaraza'],
                ['ES_ID' => 12, 'CI_nombre' =>'Aguada Grande'],
                ['ES_ID' => 12, 'CI_nombre' =>'Atarigua'],
                ['ES_ID' => 12, 'CI_nombre' =>'Barquisimeto'],
                ['ES_ID' => 12, 'CI_nombre' =>'Bobare'],
                ['ES_ID' => 12, 'CI_nombre' =>'Cabudare'],
                ['ES_ID' => 12, 'CI_nombre' =>'Carora'],
                ['ES_ID' => 12, 'CI_nombre' =>'Cubiro'],
                ['ES_ID' => 12, 'CI_nombre' =>'Cují'],
                ['ES_ID' => 12, 'CI_nombre' =>'Duaca'],
                ['ES_ID' => 12, 'CI_nombre' =>'El Manzano'],
                ['ES_ID' => 12, 'CI_nombre' =>'El Tocuyo'],
                ['ES_ID' => 12, 'CI_nombre' =>'Guaríco'],
                ['ES_ID' => 12, 'CI_nombre' =>'Humocaro Alto'],
                ['ES_ID' => 12, 'CI_nombre' =>'Humocaro Bajo'],
                ['ES_ID' => 12, 'CI_nombre' =>'La Miel'],
                ['ES_ID' => 12, 'CI_nombre' =>'Moroturo'],
                ['ES_ID' => 12, 'CI_nombre' =>'Quíbor'],
                ['ES_ID' => 12, 'CI_nombre' =>'Río Claro'],
                ['ES_ID' => 12, 'CI_nombre' =>'Sanare'],
                ['ES_ID' => 12, 'CI_nombre' =>'Santa Inés'],
                ['ES_ID' => 12, 'CI_nombre' =>'Sarare'],
                ['ES_ID' => 12, 'CI_nombre' =>'Siquisique'],
                ['ES_ID' => 12, 'CI_nombre' =>'Tintorero'],
                ['ES_ID' => 13, 'CI_nombre' =>'Apartaderos Mérida'],
                ['ES_ID' => 13, 'CI_nombre' =>'Arapuey'],
                ['ES_ID' => 13, 'CI_nombre' =>'Bailadores'],
                ['ES_ID' => 13, 'CI_nombre' =>'Caja Seca'],
                ['ES_ID' => 13, 'CI_nombre' =>'Canaguá'],
                ['ES_ID' => 13, 'CI_nombre' =>'Chachopo'],
                ['ES_ID' => 13, 'CI_nombre' =>'Chiguara'],
                ['ES_ID' => 13, 'CI_nombre' =>'Ejido'],
                ['ES_ID' => 13, 'CI_nombre' =>'El Vigía'],
                ['ES_ID' => 13, 'CI_nombre' =>'La Azulita'],
                ['ES_ID' => 13, 'CI_nombre' =>'La Playa'],
                ['ES_ID' => 13, 'CI_nombre' =>'Lagunillas Mérida'],
                ['ES_ID' => 13, 'CI_nombre' =>'Mérida'],
                ['ES_ID' => 13, 'CI_nombre' =>'Mesa de Bolívar'],
                ['ES_ID' => 13, 'CI_nombre' =>'Mucuchíes'],
                ['ES_ID' => 13, 'CI_nombre' =>'Mucujepe'],
                ['ES_ID' => 13, 'CI_nombre' =>'Mucuruba'],
                ['ES_ID' => 13, 'CI_nombre' =>'Nueva Bolivia'],
                ['ES_ID' => 13, 'CI_nombre' =>'Palmarito'],
                ['ES_ID' => 13, 'CI_nombre' =>'Pueblo Llano'],
                ['ES_ID' => 13, 'CI_nombre' =>'Santa Cruz de Mora'],
                ['ES_ID' => 13, 'CI_nombre' =>'Santa Elena de Arenales'],
                ['ES_ID' => 13, 'CI_nombre' =>'Santo Domingo'],
                ['ES_ID' => 13, 'CI_nombre' =>'Tabáy'],
                ['ES_ID' => 13, 'CI_nombre' =>'Timotes'],
                ['ES_ID' => 13, 'CI_nombre' =>'Torondoy'],
                ['ES_ID' => 13, 'CI_nombre' =>'Tovar'],
                ['ES_ID' => 13, 'CI_nombre' =>'Tucani'],
                ['ES_ID' => 13, 'CI_nombre' =>'Zea'],
                ['ES_ID' => 14, 'CI_nombre' =>'Araguita'],
                ['ES_ID' => 14, 'CI_nombre' =>'Carrizal'],
                ['ES_ID' => 14, 'CI_nombre' =>'Caucagua'],
                ['ES_ID' => 14, 'CI_nombre' =>'Chaguaramas Miranda'],
                ['ES_ID' => 14, 'CI_nombre' =>'Charallave'],
                ['ES_ID' => 14, 'CI_nombre' =>'Chirimena'],
                ['ES_ID' => 14, 'CI_nombre' =>'Chuspa'],
                ['ES_ID' => 14, 'CI_nombre' =>'Cúa'],
                ['ES_ID' => 14, 'CI_nombre' =>'Cupira'],
                ['ES_ID' => 14, 'CI_nombre' =>'Curiepe'],
                ['ES_ID' => 14, 'CI_nombre' =>'El Guapo'],
                ['ES_ID' => 14, 'CI_nombre' =>'El Jarillo'],
                ['ES_ID' => 14, 'CI_nombre' =>'Filas de Mariche'],
                ['ES_ID' => 14, 'CI_nombre' =>'Guarenas'],
                ['ES_ID' => 14, 'CI_nombre' =>'Guatire'],
                ['ES_ID' => 14, 'CI_nombre' =>'Higuerote'],
                ['ES_ID' => 14, 'CI_nombre' =>'Los Anaucos'],
                ['ES_ID' => 14, 'CI_nombre' =>'Los Teques'],
                ['ES_ID' => 14, 'CI_nombre' =>'Ocumare del Tuy'],
                ['ES_ID' => 14, 'CI_nombre' =>'Panaquire'],
                ['ES_ID' => 14, 'CI_nombre' =>'Paracotos'],
                ['ES_ID' => 14, 'CI_nombre' =>'Río Chico'],
                ['ES_ID' => 14, 'CI_nombre' =>'San Antonio de Los Altos'],
                ['ES_ID' => 14, 'CI_nombre' =>'San Diego de Los Altos'],
                ['ES_ID' => 14, 'CI_nombre' =>'San Fernando del Guapo'],
                ['ES_ID' => 14, 'CI_nombre' =>'San Francisco de Yare'],
                ['ES_ID' => 14, 'CI_nombre' =>'San José de Los Altos'],
                ['ES_ID' => 14, 'CI_nombre' =>'San José de Río Chico'],
                ['ES_ID' => 14, 'CI_nombre' =>'San Pedro de Los Altos'],
                ['ES_ID' => 14, 'CI_nombre' =>'Santa Lucía'],
                ['ES_ID' => 14, 'CI_nombre' =>'Santa Teresa'],
                ['ES_ID' => 14, 'CI_nombre' =>'Tacarigua de La Laguna'],
                ['ES_ID' => 14, 'CI_nombre' =>'Tacarigua de Mamporal'],
                ['ES_ID' => 14, 'CI_nombre' =>'Tácata'],
                ['ES_ID' => 14, 'CI_nombre' =>'Turumo'],
                ['ES_ID' => 15, 'CI_nombre' =>'Aguasay'],
                ['ES_ID' => 15, 'CI_nombre' =>'Aragua de Maturín'],
                ['ES_ID' => 15, 'CI_nombre' =>'Barrancas del Orinoco'],
                ['ES_ID' => 15, 'CI_nombre' =>'Caicara de Maturín'],
                ['ES_ID' => 15, 'CI_nombre' =>'Caripe'],
                ['ES_ID' => 15, 'CI_nombre' =>'Caripito'],
                ['ES_ID' => 15, 'CI_nombre' =>'Chaguaramal'],
                ['ES_ID' => 15, 'CI_nombre' =>'Chaguaramas Monagas'],
                ['ES_ID' => 15, 'CI_nombre' =>'El Furrial'],
                ['ES_ID' => 15, 'CI_nombre' =>'El Tejero'],
                ['ES_ID' => 15, 'CI_nombre' =>'Jusepín'],
                ['ES_ID' => 15, 'CI_nombre' =>'La Toscana'],
                ['ES_ID' => 15, 'CI_nombre' =>'Maturín'],
                ['ES_ID' => 15, 'CI_nombre' =>'Miraflores'],
                ['ES_ID' => 15, 'CI_nombre' =>'Punta de Mata'],
                ['ES_ID' => 15, 'CI_nombre' =>'Quiriquire'],
                ['ES_ID' => 15, 'CI_nombre' =>'San Antonio de Maturín'],
                ['ES_ID' => 15, 'CI_nombre' =>'San Vicente Monagas'],
                ['ES_ID' => 15, 'CI_nombre' =>'Santa Bárbara'],
                ['ES_ID' => 15, 'CI_nombre' =>'Temblador'],
                ['ES_ID' => 15, 'CI_nombre' =>'Teresen'],
                ['ES_ID' => 15, 'CI_nombre' =>'Uracoa'],
                ['ES_ID' => 16, 'CI_nombre' =>'Altagracia'],
                ['ES_ID' => 16, 'CI_nombre' =>'Boca de Pozo'],
                ['ES_ID' => 16, 'CI_nombre' =>'Boca de Río'],
                ['ES_ID' => 16, 'CI_nombre' =>'El Espinal'],
                ['ES_ID' => 16, 'CI_nombre' =>'El Valle del Espíritu Santo'],
                ['ES_ID' => 16, 'CI_nombre' =>'El Yaque'],
                ['ES_ID' => 16, 'CI_nombre' =>'Juangriego'],
                ['ES_ID' => 16, 'CI_nombre' =>'La Asunción'],
                ['ES_ID' => 16, 'CI_nombre' =>'La Guardia'],
                ['ES_ID' => 16, 'CI_nombre' =>'Pampatar'],
                ['ES_ID' => 16, 'CI_nombre' =>'Porlamar'],
                ['ES_ID' => 16, 'CI_nombre' =>'Puerto Fermín'],
                ['ES_ID' => 16, 'CI_nombre' =>'Punta de Piedras'],
                ['ES_ID' => 16, 'CI_nombre' =>'San Francisco de Macanao'],
                ['ES_ID' => 16, 'CI_nombre' =>'San Juan Bautista'],
                ['ES_ID' => 16, 'CI_nombre' =>'San Pedro de Coche'],
                ['ES_ID' => 16, 'CI_nombre' =>'Santa Ana de Nueva Esparta'],
                ['ES_ID' => 16, 'CI_nombre' =>'Villa Rosa'],
                ['ES_ID' => 17, 'CI_nombre' =>'Acarigua'],
                ['ES_ID' => 17, 'CI_nombre' =>'Agua Blanca'],
                ['ES_ID' => 17, 'CI_nombre' =>'Araure'],
                ['ES_ID' => 17, 'CI_nombre' =>'Biscucuy'],
                ['ES_ID' => 17, 'CI_nombre' =>'Boconoito'],
                ['ES_ID' => 17, 'CI_nombre' =>'Campo Elías'],
                ['ES_ID' => 17, 'CI_nombre' =>'Chabasquén'],
                ['ES_ID' => 17, 'CI_nombre' =>'Guanare'],
                ['ES_ID' => 17, 'CI_nombre' =>'Guanarito'],
                ['ES_ID' => 17, 'CI_nombre' =>'La Aparición'],
                ['ES_ID' => 17, 'CI_nombre' =>'La Misión'],
                ['ES_ID' => 17, 'CI_nombre' =>'Mesa de Cavacas'],
                ['ES_ID' => 17, 'CI_nombre' =>'Ospino'],
                ['ES_ID' => 17, 'CI_nombre' =>'Papelón'],
                ['ES_ID' => 17, 'CI_nombre' =>'Payara'],
                ['ES_ID' => 17, 'CI_nombre' =>'Pimpinela'],
                ['ES_ID' => 17, 'CI_nombre' =>'Píritu de Portuguesa'],
                ['ES_ID' => 17, 'CI_nombre' =>'San Rafael de Onoto'],
                ['ES_ID' => 17, 'CI_nombre' =>'Santa Rosalía'],
                ['ES_ID' => 17, 'CI_nombre' =>'Turén'],
                ['ES_ID' => 18, 'CI_nombre' =>'Altos de Sucre'],
                ['ES_ID' => 18, 'CI_nombre' =>'Araya'],
                ['ES_ID' => 18, 'CI_nombre' =>'Cariaco'],
                ['ES_ID' => 18, 'CI_nombre' =>'Carúpano'],
                ['ES_ID' => 18, 'CI_nombre' =>'Casanay'],
                ['ES_ID' => 18, 'CI_nombre' =>'Cumaná'],
                ['ES_ID' => 18, 'CI_nombre' =>'Cumanacoa'],
                ['ES_ID' => 18, 'CI_nombre' =>'El Morro Puerto Santo'],
                ['ES_ID' => 18, 'CI_nombre' =>'El Pilar'],
                ['ES_ID' => 18, 'CI_nombre' =>'El Poblado'],
                ['ES_ID' => 18, 'CI_nombre' =>'Guaca'],
                ['ES_ID' => 18, 'CI_nombre' =>'Guiria'],
                ['ES_ID' => 18, 'CI_nombre' =>'Irapa'],
                ['ES_ID' => 18, 'CI_nombre' =>'Manicuare'],
                ['ES_ID' => 18, 'CI_nombre' =>'Mariguitar'],
                ['ES_ID' => 18, 'CI_nombre' =>'Río Caribe'],
                ['ES_ID' => 18, 'CI_nombre' =>'San Antonio del Golfo'],
                ['ES_ID' => 18, 'CI_nombre' =>'San José de Aerocuar'],
                ['ES_ID' => 18, 'CI_nombre' =>'San Vicente de Sucre'],
                ['ES_ID' => 18, 'CI_nombre' =>'Santa Fe de Sucre'],
                ['ES_ID' => 18, 'CI_nombre' =>'Tunapuy'],
                ['ES_ID' => 18, 'CI_nombre' =>'Yaguaraparo'],
                ['ES_ID' => 18, 'CI_nombre' =>'Yoco'],
                ['ES_ID' => 19, 'CI_nombre' =>'Abejales'],
                ['ES_ID' => 19, 'CI_nombre' =>'Borota'],
                ['ES_ID' => 19, 'CI_nombre' =>'Bramon'],
                ['ES_ID' => 19, 'CI_nombre' =>'Capacho'],
                ['ES_ID' => 19, 'CI_nombre' =>'Colón'],
                ['ES_ID' => 19, 'CI_nombre' =>'Coloncito'],
                ['ES_ID' => 19, 'CI_nombre' =>'Cordero'],
                ['ES_ID' => 19, 'CI_nombre' =>'El Cobre'],
                ['ES_ID' => 19, 'CI_nombre' =>'El Pinal'],
                ['ES_ID' => 19, 'CI_nombre' =>'Independencia'],
                ['ES_ID' => 19, 'CI_nombre' =>'La Fría'],
                ['ES_ID' => 19, 'CI_nombre' =>'La Grita'],
                ['ES_ID' => 19, 'CI_nombre' =>'La Pedrera'],
                ['ES_ID' => 19, 'CI_nombre' =>'La Tendida'],
                ['ES_ID' => 19, 'CI_nombre' =>'Las Delicias'],
                ['ES_ID' => 19, 'CI_nombre' =>'Las Hernández'],
                ['ES_ID' => 19, 'CI_nombre' =>'Lobatera'],
                ['ES_ID' => 19, 'CI_nombre' =>'Michelena'],
                ['ES_ID' => 19, 'CI_nombre' =>'Palmira'],
                ['ES_ID' => 19, 'CI_nombre' =>'Pregonero'],
                ['ES_ID' => 19, 'CI_nombre' =>'Queniquea'],
                ['ES_ID' => 19, 'CI_nombre' =>'Rubio'],
                ['ES_ID' => 19, 'CI_nombre' =>'San Antonio del Tachira'],
                ['ES_ID' => 19, 'CI_nombre' =>'San Cristobal'],
                ['ES_ID' => 19, 'CI_nombre' =>'San José de Bolívar'],
                ['ES_ID' => 19, 'CI_nombre' =>'San Josecito'],
                ['ES_ID' => 19, 'CI_nombre' =>'San Pedro del Río'],
                ['ES_ID' => 19, 'CI_nombre' =>'Santa Ana Táchira'],
                ['ES_ID' => 19, 'CI_nombre' =>'Seboruco'],
                ['ES_ID' => 19, 'CI_nombre' =>'Táriba'],
                ['ES_ID' => 19, 'CI_nombre' =>'Umuquena'],
                ['ES_ID' => 19, 'CI_nombre' =>'Ureña'],
                ['ES_ID' => 20, 'CI_nombre' =>'Batatal'],
                ['ES_ID' => 20, 'CI_nombre' =>'Betijoque'],
                ['ES_ID' => 20, 'CI_nombre' =>'Boconó'],
                ['ES_ID' => 20, 'CI_nombre' =>'Carache'],
                ['ES_ID' => 20, 'CI_nombre' =>'Chejende'],
                ['ES_ID' => 20, 'CI_nombre' =>'Cuicas'],
                ['ES_ID' => 20, 'CI_nombre' =>'El Dividive'],
                ['ES_ID' => 20, 'CI_nombre' =>'El Jaguito'],
                ['ES_ID' => 20, 'CI_nombre' =>'Escuque'],
                ['ES_ID' => 20, 'CI_nombre' =>'Isnotú'],
                ['ES_ID' => 20, 'CI_nombre' =>'Jajó'],
                ['ES_ID' => 20, 'CI_nombre' =>'La Ceiba'],
                ['ES_ID' => 20, 'CI_nombre' =>'La Concepción de Trujllo'],
                ['ES_ID' => 20, 'CI_nombre' =>'La Mesa de Esnujaque'],
                ['ES_ID' => 20, 'CI_nombre' =>'La Puerta'],
                ['ES_ID' => 20, 'CI_nombre' =>'La Quebrada'],
                ['ES_ID' => 20, 'CI_nombre' =>'Mendoza Fría'],
                ['ES_ID' => 20, 'CI_nombre' =>'Meseta de Chimpire'],
                ['ES_ID' => 20, 'CI_nombre' =>'Monay'],
                ['ES_ID' => 20, 'CI_nombre' =>'Motatán'],
                ['ES_ID' => 20, 'CI_nombre' =>'Pampán'],
                ['ES_ID' => 20, 'CI_nombre' =>'Pampanito'],
                ['ES_ID' => 20, 'CI_nombre' =>'Sabana de Mendoza'],
                ['ES_ID' => 20, 'CI_nombre' =>'San Lázaro'],
                ['ES_ID' => 20, 'CI_nombre' =>'Santa Ana de Trujillo'],
                ['ES_ID' => 20, 'CI_nombre' =>'Tostós'],
                ['ES_ID' => 20, 'CI_nombre' =>'Trujillo'],
                ['ES_ID' => 20, 'CI_nombre' =>'Valera'],
                ['ES_ID' => 21, 'CI_nombre' =>'Carayaca'],
                ['ES_ID' => 21, 'CI_nombre' =>'Litoral'],
                ['ES_ID' => 25, 'CI_nombre' =>'Archipiélago Los Roques'],
                ['ES_ID' => 22, 'CI_nombre' =>'Aroa'],
                ['ES_ID' => 22, 'CI_nombre' =>'Boraure'],
                ['ES_ID' => 22, 'CI_nombre' =>'Campo Elías de Yaracuy'],
                ['ES_ID' => 22, 'CI_nombre' =>'Chivacoa'],
                ['ES_ID' => 22, 'CI_nombre' =>'Cocorote'],
                ['ES_ID' => 22, 'CI_nombre' =>'Farriar'],
                ['ES_ID' => 22, 'CI_nombre' =>'Guama'],
                ['ES_ID' => 22, 'CI_nombre' =>'Marín'],
                ['ES_ID' => 22, 'CI_nombre' =>'Nirgua'],
                ['ES_ID' => 22, 'CI_nombre' =>'Sabana de Parra'],
                ['ES_ID' => 22, 'CI_nombre' =>'Salom'],
                ['ES_ID' => 22, 'CI_nombre' =>'San Felipe'],
                ['ES_ID' => 22, 'CI_nombre' =>'San Pablo de Yaracuy'],
                ['ES_ID' => 22, 'CI_nombre' =>'Urachiche'],
                ['ES_ID' => 22, 'CI_nombre' =>'Yaritagua'],
                ['ES_ID' => 22, 'CI_nombre' =>'Yumare'],
                ['ES_ID' => 23, 'CI_nombre' =>'Bachaquero'],
                ['ES_ID' => 23, 'CI_nombre' =>'Bobures'],
                ['ES_ID' => 23, 'CI_nombre' =>'Cabimas'],
                ['ES_ID' => 23, 'CI_nombre' =>'Campo Concepción'],
                ['ES_ID' => 23, 'CI_nombre' =>'Campo Mara'],
                ['ES_ID' => 23, 'CI_nombre' =>'Campo Rojo'],
                ['ES_ID' => 23, 'CI_nombre' =>'Carrasquero'],
                ['ES_ID' => 23, 'CI_nombre' =>'Casigua'],
                ['ES_ID' => 23, 'CI_nombre' =>'Chiquinquirá'],
                ['ES_ID' => 23, 'CI_nombre' =>'Ciudad Ojeda'],
                ['ES_ID' => 23, 'CI_nombre' =>'El Batey'],
                ['ES_ID' => 23, 'CI_nombre' =>'El Carmelo'],
                ['ES_ID' => 23, 'CI_nombre' =>'El Chivo'],
                ['ES_ID' => 23, 'CI_nombre' =>'El Guayabo'],
                ['ES_ID' => 23, 'CI_nombre' =>'El Mene'],
                ['ES_ID' => 23, 'CI_nombre' =>'El Venado'],
                ['ES_ID' => 23, 'CI_nombre' =>'Encontrados'],
                ['ES_ID' => 23, 'CI_nombre' =>'Gibraltar'],
                ['ES_ID' => 23, 'CI_nombre' =>'Isla de Toas'],
                ['ES_ID' => 23, 'CI_nombre' =>'La Concepción del Zulia'],
                ['ES_ID' => 23, 'CI_nombre' =>'La Paz'],
                ['ES_ID' => 23, 'CI_nombre' =>'La Sierrita'],
                ['ES_ID' => 23, 'CI_nombre' =>'Lagunillas del Zulia'],
                ['ES_ID' => 23, 'CI_nombre' =>'Las Piedras de Perijá'],
                ['ES_ID' => 23, 'CI_nombre' =>'Los Cortijos'],
                ['ES_ID' => 23, 'CI_nombre' =>'Machiques'],
                ['ES_ID' => 23, 'CI_nombre' =>'Maracaibo'],
                ['ES_ID' => 23, 'CI_nombre' =>'Mene Grande'],
                ['ES_ID' => 23, 'CI_nombre' =>'Palmarejo'],
                ['ES_ID' => 23, 'CI_nombre' =>'Paraguaipoa'],
                ['ES_ID' => 23, 'CI_nombre' =>'Potrerito'],
                ['ES_ID' => 23, 'CI_nombre' =>'Pueblo Nuevo del Zulia'],
                ['ES_ID' => 23, 'CI_nombre' =>'Puertos de Altagracia'],
                ['ES_ID' => 23, 'CI_nombre' =>'Punta Gorda'],
                ['ES_ID' => 23, 'CI_nombre' =>'Sabaneta de Palma'],
                ['ES_ID' => 23, 'CI_nombre' =>'San Francisco'],
                ['ES_ID' => 23, 'CI_nombre' =>'San José de Perijá'],
                ['ES_ID' => 23, 'CI_nombre' =>'San Rafael del Moján'],
                ['ES_ID' => 23, 'CI_nombre' =>'San Timoteo'],
                ['ES_ID' => 23, 'CI_nombre' =>'Santa Bárbara Del Zulia'],
                ['ES_ID' => 23, 'CI_nombre' =>'Santa Cruz de Mara'],
                ['ES_ID' => 23, 'CI_nombre' =>'Santa Cruz del Zulia'],
                ['ES_ID' => 23, 'CI_nombre' =>'Santa Rita'],
                ['ES_ID' => 23, 'CI_nombre' =>'Sinamaica'],
                ['ES_ID' => 23, 'CI_nombre' =>'Tamare'],
                ['ES_ID' => 23, 'CI_nombre' =>'Tía Juana'],
                ['ES_ID' => 23, 'CI_nombre' =>'Villa del Rosario'],
                ['ES_ID' => 21, 'CI_nombre' =>'La Guaira'],
                ['ES_ID' => 21, 'CI_nombre' =>'Catia La Mar'],
                ['ES_ID' => 21, 'CI_nombre' =>'Macuto'],
                ['ES_ID' => 21, 'CI_nombre' =>'Naiguatá'],
                ['ES_ID' => 25, 'CI_nombre' =>'Archipiélago Los Monjes'],
                ['ES_ID' => 25, 'CI_nombre' =>'Isla La Tortuga y Cayos adyacentes'],
                ['ES_ID' => 25, 'CI_nombre' =>'Isla La Sola'],
                ['ES_ID' => 25, 'CI_nombre' =>'Islas Los Testigos'],
                ['ES_ID' => 25, 'CI_nombre' =>'Islas Los Frailes'],
                ['ES_ID' => 25, 'CI_nombre' =>'Isla La Orchila'],
                ['ES_ID' => 25, 'CI_nombre' =>'Archipiélago Las Aves'],
                ['ES_ID' => 25, 'CI_nombre' =>'Isla de Aves'],
                ['ES_ID' => 25, 'CI_nombre' =>'Isla La Blanquilla'],
                ['ES_ID' => 25, 'CI_nombre' =>'Isla de Patos'],
                ['ES_ID' => 25, 'CI_nombre' =>'Islas Los Hermanos'],
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
        Schema::table('ciudad', function (Blueprint $table) {
            //
            DB::table('ciudad')->DELETE();
        });
    }
}
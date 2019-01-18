<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        factory(App\administrador::class)->times(2)->create();
        factory(App\categoria::class)->times(2)->create();
        factory(App\cliente::class)->times(2)->create();
        factory(App\factura::class)->times(10)->create();
        factory(App\producto::class)->times(10)->create();
        factory(App\detalles_factura::class)->times(10)->create();


    }
}

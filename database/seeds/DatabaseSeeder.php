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

        factory(App\Categoria::class)->times(10)->create();
        factory(App\Cliente::class)->times(50)->create();
        factory(App\Factura::class)->times(50)->create();
        factory(App\Producto::class)->times(50)->create();


    }
}

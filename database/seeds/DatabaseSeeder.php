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

        factory(App\categoria::class)->times(50)->create();
        factory(App\cliente::class)->times(50)->create();
        factory(App\factura::class)->times(50)->create();
        factory(App\producto::class)->times(50)->create();


    }
}

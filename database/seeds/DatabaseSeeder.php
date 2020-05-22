<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Noticia::class, 20)->create();
        // factory(App\MensajeVentas::class, 50)->create();
        $this->call(UserSeeder::class);
        // $this->call(NoticiasSeeder::class);
        // $this->call(MensajesSeeder::class);
        // $this->call(MensajesVentasSeeder::class);
    }
}

<?php

use Illuminate\Database\Seeder;

class MensajesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Mensaje::class, 250)->create();
    }
}

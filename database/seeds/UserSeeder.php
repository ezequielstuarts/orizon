<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Ezequiel',
            'email' => 'elzeke55@gmail.com',
            'password' => bcrypt('Corrientes2335')
        ]);
        App\User::create([
            'name' => 'Invitado',
            'email' => 'invitado@invitado.com',
            'password' => bcrypt('invitado')
        ]);
    }
}

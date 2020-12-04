<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Sidi Farid Pedro Raoui Aguirre',
            'email' => 'asesor.pedro@gmail.com',
            'password' => bcrypt('C4tntnox*+')
        ]);
        if (env('APP_ENV') == 'local'){
            User::factory(99)->create();
        }
    }
}

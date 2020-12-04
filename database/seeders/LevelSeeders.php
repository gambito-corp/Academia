<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Level;

class LevelSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (env('APP_ENV') == 'local'){
            Level::create([
                'name' => 'Nivel Basico'
            ]);
            Level::create([
                'name' => 'Nivel Intermedio'
            ]);
            Level::create([
                'name' => 'Nivel Avanzado'
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Price;
use Illuminate\Database\Seeder;

class PriceSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (env('APP_ENV') == 'local'){
            Price::create([
                'name' => 'gratis',
                'value' => 0
            ]);
            Price::create([
                'name' => '19.99 US$ (Nivel 1)',
                'value' => 19.99
            ]);
            Price::create([
                'name' => '49.99 US$ (Nivel 2)',
                'value' => 49.99
            ]);
            Price::create([
                'name' => '99.99 US$ (Nivel 3)',
                'value' => 99.99
            ]);
        }
    }
}

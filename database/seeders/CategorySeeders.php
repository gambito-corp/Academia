<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (env('APP_ENV') == 'local'){
            Category::create([
                'name' => 'Desarrollo Web'
            ]);
            Category::create([
                'name' => 'Diseño Web'
            ]);
            Category::create([
                'name' => 'Marketing Digital'
            ]);
            Category::create([
                'name' => 'Programacion'
            ]);
        }

    }
}

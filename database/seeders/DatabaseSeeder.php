<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UserSeeders::class);
        $this->call(LevelSeeders::class);
        $this->call(CategorySeeders::class);
        $this->call(PriceSeeders::class);
        $this->call(PlatformSeeder::class);
        $this->call(CourseSeeders::class);
        $this->call(PermisosSeeder::class);
    }
}

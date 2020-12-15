<?php

namespace Database\Seeders;

use App\Models\CategoryBlogs;
use Illuminate\Database\Seeder;

class CategoryBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryBlogs::factory(4)->create();
    }
}

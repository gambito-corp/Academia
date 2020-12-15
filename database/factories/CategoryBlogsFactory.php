<?php

namespace Database\Factories;

use App\Models\CategoryBlogs;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryBlogsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CategoryBlogs::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->word(20);
        return [
            'name' => $name,
            'slug' => Str::slug($name)
        ];
    }
}

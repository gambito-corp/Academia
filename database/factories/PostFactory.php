<?php

namespace Database\Factories;

use App\Models\CategoryBlogs;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence();
        return [
            'user_id'       => User::all()->random()->id,
            'category_blog_id'   => CategoryBlogs::all()->random()->id,
            'name'          => $name,
            'slug'          => Str::slug($name),
            'extract'       => $this->faker->text(250),
            'body'          => $this->faker->text(2000),
            'status'        => $this->faker->randomElement([Post::BORRADOR, Post::REVISION, Post::PUBLICADO])
        ];
    }
}

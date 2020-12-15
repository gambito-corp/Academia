<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::factory(100)->create();
        foreach ($posts as $post){
            Image::factory()->Direccion([
                'carpeta' => 'post',
                'ancho' => '640',
                'alto' => '480'
            ])->create([
                'imageable_id' => $post->id,
                'imageable_type' => Post::class
            ]);
            $post->Tags()->attach([
                rand(1,4),
                rand(5,8)
            ]);
        }
    }
}

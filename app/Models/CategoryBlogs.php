<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryBlogs extends Model
{
    use HasFactory;

    public static $tabla = 'category_blogs';

    public function Posts()
    {
        return $this->hasMany(Post::class);
    }
}

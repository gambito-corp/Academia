<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public static $tabla = 'tags';

    //Relacion Muchos a Muchos
    public function Posts()
    {
        return $this->belongsToMany(Post::class);
    }
}

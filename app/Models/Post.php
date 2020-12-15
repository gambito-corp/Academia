<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;

    use HasFactory;

    public static $tabla = 'posts';


    //Relacion 1 a muchos Inversa
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Category()
    {
        return $this->belongsTo(CategoryBlogs::class);
    }

    //Relacion Muchos a Muchos
    public function Tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //relacion uno a uno Polimorfica
    public function Image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}

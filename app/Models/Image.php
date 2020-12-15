<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public static $tabla = 'images';

    protected $guarded = ['id'];

    //relacion Polimorfica
    public function imageable()
    {
        return $this->morphTo();
    }
}

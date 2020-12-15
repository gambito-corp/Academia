<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    public static $tabla = 'prices';

    protected $guarded = ['id'];




    //relacion 1 a muchos
    public function Cursos()
    {
        return $this->hasMany(course::class);
    }
}

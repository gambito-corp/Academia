<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //relacion 1 a muchos
    public function Cursos()
    {
        return $this->hasMany(course::class);
    }
}

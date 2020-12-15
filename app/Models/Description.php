<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;

    public static $tabla = 'descriptions';

    protected $guarded = ['id'];

    //relacion 1 a 1 inversa
    public function Lecciones()
    {
        return $this->belongsTo(Lesson::class, 'lesson_id');
    }
}

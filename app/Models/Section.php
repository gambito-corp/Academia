<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    public static $tabla = 'sections';

    protected $guarded = ['id'];

    //relaciones 1 a Muchos
    public function Lecciones()
    {
        return $this->hasMany(Lesson::class);
    }

    //relacion 1 a muchos Inversa
    public function Curso()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}

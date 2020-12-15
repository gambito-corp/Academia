<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audience extends Model
{
    use HasFactory;
    public static $tabla = 'audiences';

    protected $guarded = ['id'];

    //relacion 1 a muchos Inversa
    public function Curso()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}

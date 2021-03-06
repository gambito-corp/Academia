<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    use HasFactory;

    public static $tabla = 'requirements';

    protected $guarded = ['id'];


    //relacion 1 a muchos Inversa
    public function Curso()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}

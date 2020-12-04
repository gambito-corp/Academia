<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    //relacion 1 a muchos Inversa
    public function Curso()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}

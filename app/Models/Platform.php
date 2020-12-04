<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;


    protected $guarded = ['id'];


    //relacion 1 a muchos
    public function Lecciones()
    {
        return $this->HasMany(Lesson::class);
    }
}

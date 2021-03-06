<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    use HasFactory;
    public static $tabla = 'reactions';


    protected $guarded = ['id'];

    const LIKE = 1;
    const DISLIKE =2;

    public function reactionable()
    {
        return $this->morphTo();
    }

    //relacion 1 a muchos inversa
    public function Usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

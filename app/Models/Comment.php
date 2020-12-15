<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public static $tabla = 'comments';

    protected $guarded = ['id'];

    public function commnetable()
    {
        return $this->morphTo();
    }

    // Reaccion 1 a Muchos Polimorfica
    public function Comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
    public function Reaccions()
    {
        return $this->morphMany(Reaction::class, 'reactionable');
    }

    //relacion 1 a muchos inversa
    public function Usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


}

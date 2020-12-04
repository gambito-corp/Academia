<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion 1 a 1 inversa
    public function Usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

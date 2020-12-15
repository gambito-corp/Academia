<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    public static $tabla = 'lessons';


    protected $guarded = ['id'];

    //Atributos Personalizados
    public function getCompleteAttribute()
    {
        return $this->Usuarios->contains(auth()->id());
    }

    //relacion 1 a 1
    public function Descripcion()
    {
        return $this->HasOne(Description::class);
    }


    //relacion 1 a muchos Inversa
    public function Seccion()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }
    public function Plataforma()
    {
        return $this->belongsTo(Platform::class, 'platform_id');
    }

    // Relacion Muchos a Muchos
    public function Usuarios()
    {
        return $this->belongsToMany(User::class);
    }

    // relacion 1 a muchos polimorfica
    public function Resource()
    {
        return $this->morphMany(Resource::class, 'resourceable');
    }
    public function Comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
    public function Reactions()
    {
        return $this->morphMany(Reaction::class, 'reactionable');
    }

}

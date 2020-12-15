<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'status'];

    protected $withCount = ['Estudiante', 'Reviews'];

    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;

    public static $tabla = 'courses';

    public function getRatingAttribute()
    {
        $return = 5;
        if ($this->reviews_count){
            $return = round($this->Reviews->avg('rating'), 1);
        }
        return $return;
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    //Query Scopes
    public function scopeCategory($query, $category_id)
    {
        if($category_id){
            return $query->where('category_id', $category_id);
        }
    }
    public function scopeLevel($query, $level_id)
    {
        if($level_id){
            return $query->where('category_id', $level_id);
        }
    }

    //relacion 1 a muchos
    public function Reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function Requerimientos()
    {
        return $this->hasMany(Requirement::class);
    }

    public function Metas()
    {
        return $this->hasMany(Goal::class);
    }

    public function Audiencias()
    {
        return $this->hasMany(Audience::class);
    }

    public function Secciones()
    {
        return $this->hasMany(Section::class);
    }

    //relacion 1 a muchos Inversa
    public function Profesor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Nivel()
    {
        return $this->belongsTo(Level::class, 'level_id');
    }

    public function Categoria()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function Precio()
    {
        return $this->hasMany(Price::class, 'price_id');
    }

    //Relacion muchos a muchos inversa
    public function Estudiante()
    {
        return $this->belongsToMany(User::class);
    }

    //relacion 1 a 1 Polimorfica
    public function Imagen()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    //Relacion has many tro
    public function Leciones()
    {
        return $this->hasManyThrough(Lesson::class, Section::class);
    }
}

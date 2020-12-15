<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    public static $tabla = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'profile_photo_url',
    ];

    //Relaciones 1 a 1
    public function Perfil()
    {
        return $this->hasOne(Profile::class);
    }

    //relaciones 1 a Muchos
    public function Cursos_Dictados()
    {
        return $this->hasMany(Course::class);
    }
    public function Reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function Comnetarios()
    {
        return $this->hasMany(Comment::class);
    }
    public function Reacciones()
    {
        return $this->hasMany(Reaction::class);
    }
    public function Posts()
    {
        return $this->hasMany(Post::class);
    }

    //Relaciones Muchos a Muchos
    public function Cursos_Enrolled()
    {
        return $this->belongsToMany(Course::class);
    }
    public function Lecciones()
    {
        return $this->belongsToMany(Lesson::class);
    }

}

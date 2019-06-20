<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Jenssegers\Mongodb\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    
    protected $fillable = [
        'name','apellido', 'email', 'password','fecha_nacimiento','imgPerfil'
    ];

   
    protected $hidden = [
        'password', 'remember_token',
    ];

   
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function mangas()
    {
       return $this->hasMany('App\Manga');
    }

    public function compras()
    {
       return $this->hasMany('App\Compra');
    }
}

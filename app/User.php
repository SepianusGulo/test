<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function getAvatar()
    {
        if (!$this->avatar) {
            return asset('images/default.png');
        } else {
            return asset('images/' . $this->avatar);
        }
    }
    public  function pekerjaan()
    {
        return $this->belongsToMany(Pekerjaan::class);
    }

    public  function pelatihan()
    {
        return $this->belongsToMany(Pelatihan::class);
    }

    public  function Pendidikan()
    {
        return $this->belongsToMany(Pendidikan::class);
    }
}

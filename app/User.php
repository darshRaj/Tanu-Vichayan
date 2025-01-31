<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use Notifiable;

    protected $tabel = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname','mobile', 'dob', 'email', 'password','user_id'
    ];

    /**
     * The attributes that shoud be hidden for arrays.
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
    
    public function user()
    {
        return $this->hasMany('App\User');
    }
    public function likes()
    {
        return $this->hasMany('App\Like');
    }
    public function post()
    {
        return $this->hasMany('App\Post');
    }

    
}

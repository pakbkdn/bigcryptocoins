<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = ['username', 'email', 'avatar', 'password', 'phone_number', 'gender', 'roles'];
     // protected $table = 'users';
     public function articles()
         {
         	return $this->hasMany('App\Article','user_id','id');
         }


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

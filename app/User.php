<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    // バリデーション
    protected $guarded = array('id');
    public static $signinRules = array(
          'name' => 'required',
          'email' => 'email',
          'password' => 'required|min:6',
    );
    public static $loginRules = array(
          'email' => 'email',
          "password" => 'required|min:4',
    );


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

}

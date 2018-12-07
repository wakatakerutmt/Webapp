<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    // バリデーション
    protected $guarded = ['id'];
    public static $signinRules = [
          'name' => 'required',
          'email' => 'email',
          'password' => 'required|min:6',
    ];
    public static $loginRules = [
          'email' => 'email',
          "password" => 'required|min:4',
    ];

    public static $msg = [
          'email.email' => 'メールアドレスが正しくありません',
          'password.required' =>'パスワードが入力されていません'
    ];


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

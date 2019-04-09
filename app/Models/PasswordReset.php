<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PasswordReset extends Model
{
    use Notifiable;

    protected $casts = [
        'id' => 'bigInteger' ,
        'user_id' => 'bigInteger', 
        'email' => 'string' , 
        'token' => 'string' , 
    ] ; 

    public $table="password_resets" ;


    protected $fillable = [
        'id', 'email' , 'token' ,'user_id', 
    ];

    
    protected $dates = [
        'created_at',
    ];

  

 
}

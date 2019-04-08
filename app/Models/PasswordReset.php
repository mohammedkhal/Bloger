<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PasswordReset extends Model
{
    use Notifiable;

    public $table="password_resets" ;


    protected $fillable = [
        'id', 'email' , 'token' 
    ];

    
    protected $dates = [
        'created_at',
        'updated_at',
    ];

  

 
}

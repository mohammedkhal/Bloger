<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    public $table="Admins" ;

    protected $casts = [
        'id' => 'integer',   
        'first_name' => 'string',
        'second_name' => 'string',
        'third_name' => 'string',
        'email' => 'string',
        'phone_number' => 'string',
        'country' => 'string',
        'profile_pic' => 'string',
        'type' => 'string',
        'username' => 'string',
        'password' => 'integer',
        'status' => 'boolean',
    ];


    protected $fillable = [
        'id', 'first_name', 'second_name','third_name',
        'email','phone_number','country','profile_pic',
        'type','username','password','status',
    ];

    
    protected $hidden = [
        'password'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

  

 
}

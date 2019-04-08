<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public $table="writers" ;

    protected $casts = [
        'id' => 'integer',   
        'first_name' => 'string',
        'second_name' => 'string',
        'third_name' => 'string',
        'email' => 'string',
        'country' => 'string',
        'account' => 'string',
        'website' => 'string',
        'profile_pic' => 'string',
        'username' => 'string',
        'password' => 'string',
        'vote' => 'integer',
        'status' => 'string',
        'is_writer'=>'integer',
        'phone_number' => 'string',

    ];

    protected $fillable = [
        'id', 'first_name', 'second_name','third_name',
        'email','phone_number','country','profile_pic' ,
        'username','password','status','vote','is_writer'
    ];

    
    protected $hidden = [
        'password'
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
  

}

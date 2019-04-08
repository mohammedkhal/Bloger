<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public $table="users" ;

    protected $casts = [
        'id' => 'integer',   
        'first_name' => 'string',
        'second_name' => 'string',
        'third_name' => 'string',
        'email' => 'string',
        'phone_number' => 'string',
        'country' => 'string',
        'profile_pic' => 'string',
        'username' => 'string',
        'password' => 'string',
        'status' => 'string',
        'vote' => 'integer',
        'is_writer'=>'boolean',
        'account' => 'string',
        'website' => 'string',

    ];

    protected $fillable = [
        'id', 'first_name', 'second_name','third_name',
        'email','phone_number','country','profile_pic' ,
        'username','password','status','vote','is_writer',
        'account','website' 
    ];

    
    protected $hidden = [
        'password'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
  
    public function post()
    {
        return $this->hasMany('App\Models\Post' , 'user_id' , 'id');
    }

    public function postReview()
    {
        return $this->hasMany('App\Models\PostReview' , 'user_id' , 'id');
    }

    public function updatePostReview()
    {
        return $this->hasMany('App\Models\UpdatePostReview' , 'user_id' , 'id');
    }

    public function singinOperationUsers()
    {
        return $this->hasMany('App\Models\SinginOperationUser' , 'user_id' , 'id');
    }

    public function vote()
    {
        return $this->hasMany('App\Models\Vote' , 'user_id' , 'id');
    }
}

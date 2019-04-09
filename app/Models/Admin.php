<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

  const STATUS_ACTIVE = 'active';
  const STATUS_INACTIVE = 'inactive';
  const STATUS_BLOCKED = 'blocked';

  const TYPE_GENERAL_MANGER = 'general_manger';
  const TYPE_SUPERVISOR = 'supervisor';

    public $table="admins" ;

    protected $casts = [
        'id' => 'bigInteger',   
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
        'status' => 'enum',
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
 
    public function postReview()
    {
        return $this->hasMany('App\Models\PostReview', 'admin_id' , 'id');
    }

    public function updatePostReview()
    {
        return $this->hasMany('App\Models\UpdatePostReview', 'admin_id' , 'id');
    }

    public function singinOperationAdmin()
    {
        return $this->hasMany('App\Models\SinginOperationAdmin' , 'admin_id' , 'id');
    }
  

 
}

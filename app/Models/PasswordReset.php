<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{

    protected $casts = [
        'id' => 'integer' ,
        'user_id' => 'integer', 
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

<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PostReview extends Model
{
    use Notifiable;

    public $table="post_reviews" ;


    protected $fillable = [
        'id', 'admin_id' , 'ip', 'country', 'device_type' ,
        'browser' , 'operating_system' , 'login_date' , 'last_login' , 'session_end_date' 
    ];

    
    protected $dates = [
        'created_at',
        'updated_at',
    ];

  

 
}

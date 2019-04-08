<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PostReview extends Model
{
    use Notifiable;

    public $table="post_reviews" ;

    protected $casts = [
        'id' =>'integer' ,
     'post_id' =>'integer',
     'user_id' =>'integer',
     'admin_id' =>'string',
     'status' =>'boolean',
     'comment' =>'string',
     'accept_date' =>'date',
     'refuse_date' =>'date',
    ];


    protected $fillable = [
        'id', 'post_id' , 'user_id', 'admin_id', 'status' ,
        'comment' , 'accept_date' , 'refuse_date'  
    ];

    
    protected $dates = [
        'created_at',
        'updated_at',
    ];

  

 
}

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
     'id' =>'BigInteger' ,
     'post_id' =>'BigInteger',
     'user_id' =>'BigInteger',
     'admin_id' =>'string',
     'status' =>'boolean',
     'comment' =>'string',
     'accept_date' =>'timestamp',
     'refuse_date' =>'timestamp',
    ];


    protected $fillable = [
        'id', 'post_id' , 'user_id', 'admin_id', 'status' ,
        'comment' , 'accept_date' , 'refuse_date'  
    ];

    
    protected $dates = [
        'accept_date' ,
     'refuse_date'  
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User' , 'user_id' , 'id');
    }

    public function admin()
    {
        return $this->belongsTo('App\Models\Admin' , 'admin_id' , 'id');
    }

    public function post()
    {
        return $this->belongsTo('App\Models\Post' , 'post_id' , 'id');
    }

    


 
}

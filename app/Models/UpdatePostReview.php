<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UpdatePostReview extends Model
{
    use Notifiable;

    public $table="update_post_reviews" ;
    
    protected $casts = [
     'id' =>'integer' ,
     'post_review_id' =>'integer',
     'admin_id' =>'integer',
     'user_id' =>'integer',
     'status' =>'string',
     'comment' =>'string',
    ];


    protected $fillable = [
        'id', 'post_review_id', 'admin_id', 'user_id', 'status', 'comment', 
        'accept_at' , 'refuse_at' 
    ];

    
    protected $dates = [
        'accept_at',
        'refuse_at',
    ];

    public function updatePostReview()
    {
        return $this->belongsTo('App\Models\User' , 'user_id' , 'id');
    }

    public function admin()
    {
        return $this->belongsTo('App\Models\Admin' , 'admin_id' , 'id');
    }
  

 
}

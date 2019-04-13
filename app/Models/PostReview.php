<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostReview extends Model
{

    public $table="post_reviews" ;

    protected $casts = [
     'id' =>'integer' ,
     'post_id' =>'integer',
     'user_id' =>'integer',
     'admin_id' =>'string',
     'status' =>'boolean',
     'comment' =>'string',
  
    ];


    protected $fillable = [
        'id', 'post_id' , 'user_id', 'admin_id', 'status' ,
        'comment', 'accept_at', 'refuse_at'  
    ];

    
    protected $dates = [
     'accept_at' ,
     'refuse_at'  
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

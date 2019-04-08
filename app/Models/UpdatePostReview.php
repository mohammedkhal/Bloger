<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UpdatePostReview extends Model
{
    use Notifiable;

    public $table="update_post_reviews" ;


    protected $fillable = [
        'id', 'post_review_id' , 'status', 'comment' , 'accept_date' , 'refuse_date' , 'admin_id'
    ];

    
    protected $dates = [
        'created_at',
        'updated_at',
    ];

  

 
}

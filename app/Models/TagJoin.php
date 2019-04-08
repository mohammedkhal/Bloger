<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class TagJoin extends Model
{
    use Notifiable;

    public $table="tag_joins" ;


    protected $fillable = [
        'id', 'post_id' , 'tag_id'
    ];

    
    protected $dates = [
        'created_at',
        'updated_at',
    ];

  

 
}

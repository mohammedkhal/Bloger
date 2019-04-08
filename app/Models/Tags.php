<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Tag extends Model
{
    use Notifiable;

    public $table="tags" ;


    protected $fillable = [
        'id', 'tag_name' , 'slug', 'number_of_post' , 'creation_date' , 'last_use' ,
    ];

    
    protected $dates = [
        'created_at',
        'updated_at',
    ];

  

 
}

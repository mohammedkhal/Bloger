<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Vote extends Model
{
    use Notifiable;

    public $table="votes" ;
    

    protected $casts = [
        'id' => 'integer' , 
        'user_id' => 'integer' , 
        'vote' => 'integer' , 
    ];

    protected $fillable = [
        'id','user_id','vote'
    ];



    protected $dates = [
        'created_at',
        'updated_at',
    ];



 
}

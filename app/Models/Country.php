<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Country extends Model
{
    use Notifiable;

    public $table="countries" ;

    protected $casts = [
        'id' =>'integer' ,
        'code' => 'string',
        'country_name' =>'string'
    ];


    protected $fillable = [
        'id', 'country_name','code' 
    ];

     
    protected $dates = [
        'created_at',
        'updated_at',
    ];

  

 
}

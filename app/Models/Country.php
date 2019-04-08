<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Country extends Model
{
    use Notifiable;

    public $table="countries" ;


    protected $fillable = [
        'id', 'country_name' 
    ];

    
    protected $dates = [
        'created_at',
        'updated_at',
    ];

  

 
}

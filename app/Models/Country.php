<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

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

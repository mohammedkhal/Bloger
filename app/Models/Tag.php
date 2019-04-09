<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Tag extends Model
{
    use Notifiable;

    public $table="tags" ;

    protected $casts = [
        'id' => 'integer',
        'tag_name' => 'string',
        'slug' => 'string',
        'number_of_post' => 'integer',
       
    ];


    protected $fillable = [
        'id', 'tag_name' , 'slug', 'number_of_post' , 'created_at' , 'last_use' ,
    ];

    
    protected $dates = [
        'created_at',
        'last_use',
    ];

    public function tagJoin()
    {
        return $this->hasMany('App\Models\TagJoin', 'tag_id' , 'id');
    }
  

 
}

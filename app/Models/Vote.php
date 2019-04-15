<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{

    public $table="votes" ;
    

    protected $casts = [
        'id' => 'integer' , 
        'user_id' => 'integer' ,
        'post_id' => 'integer' , 
        'vote' => 'integer' , 
    ];

    protected $fillable = [
        'id','user_id','post_id','vote',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function post()
    {
        return $this->belongsTo('App\Models\Post', 'post_id' , 'id');
    }

    
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id' , 'id');
    }



 
}

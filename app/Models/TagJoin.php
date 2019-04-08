<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class TagJoin extends Model
{
    use Notifiable;

    public $table="tag_joins" ;

    protected $casts = [
        'id' => 'unsignedBigInteger',
        'post_id' => 'integer',
        'tag_id' => 'integer',
    ];
    protected $fillable = [
        'id', 'post_id' , 'tag_id'
    ];

    
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function post()
    {
        return $this->belongsTo('App\Models\Post', 'post_id' , 'id');
    }

    public function tag()
    {
        return $this->belongsTo('App\Models\Tag', 'tag_id' , 'id');
    }
  

 
}

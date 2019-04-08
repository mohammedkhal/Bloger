<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Post extends Authenticatable
{
    use Notifiable;

    public $table="posts" ;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $casts = [
        'id' => 'integer',   
        'title' => 'string',
        'slug' => 'string',
        'short_description' => 'string',
        'body' => 'string',
        'cover_pic' => 'string',
        'status' => 'boolean',
        'vote' => 'integer',
    ];

    protected $fillable = [
     'id','title','slug','short_description','body','cover_pic','status','vote',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    
}

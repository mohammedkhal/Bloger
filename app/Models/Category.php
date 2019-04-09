<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Category extends Authenticatable
{
    use Notifiable;

    public $table="categories" ;


    protected $casts = [
        'id' => 'integer',   
        'category_name' => 'string',
        'slug' => 'string',
        'cover' => 'string',
        'number_of_post' => 'integer',
        'vote' => 'integer',
    ];

    protected $fillable = [
     'id','category_name','slug','cover',
     'number_of_posts','last_use','created_at', 'vote_sum'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    protected $dates = [
        'created_at',
        'last_use',
    ];

    public function categoryJoin()
    {
        return $this->hasMany('App\Models\CategoryJoin', 'category_id' , 'id');
    }
    
}
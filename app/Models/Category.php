<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

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
     'number_of_posts','last_use_at','created_at', 'vote_sum'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    protected $dates = [
        'created_at',
        'last_use_at',
    ];

    public function categoryJoin()
    {
        return $this->belongsToMany('App\Models\CategoryJoin', 'category_id' , 'id');
    }
    
}
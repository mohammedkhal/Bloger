<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class CategoryJoin extends Model
{
    use Notifiable;

    public $table="category_joins" ;

    protected $casts = [
        'id' => 'integer',   
        'post_id' => 'integer',   
        'category_id' => 'integer',   
    ];

    protected $fillable = [
        'id', 'post_id', 'category_id' 
    ];

    
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function post()
    {
        return $this->belongsTo('App\Models\Post', 'post_id' , 'id');
    }
    
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id' , 'id');
    }
 
}

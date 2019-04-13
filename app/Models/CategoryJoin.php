<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryJoin extends Model
{

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

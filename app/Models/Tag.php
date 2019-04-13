<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    public $table="tags" ;

    protected $casts = [
        'id' => 'integer',
        'tag_name' => 'string',
        'slug' => 'string',
        'number_of_post' => 'integer',
       
    ];

    public $timestamps = false;

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

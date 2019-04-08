<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Post extends Authenticatable
{
    use Notifiable;
    
  const STATUS_DRAFT = 'Draft';
  const STATUS_SCHEDULED = 'Scheduled';
  const STATUS_PUBLISHED = 'Published';
  const STATUS_ARCHIVED = 'Archived';



    public $table="posts" ;


    protected $casts = [
        'id' => 'unsignedBigInteger',   
        'title' => 'string',
        'slug' => 'string',
        'short_description' => 'string',
        'body' => 'string',
        'cover_pic' => 'string',
        'status' => 'enum',
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

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id' , 'id');
    }

    public function postReview()
    {
        return $this->hasMany('App\Models\PostReview', 'post_id' , 'id');
    }

    public function categoryJoin()
    {
        return $this->hasMany('App\Models\CategoryJoin', 'post_id' , 'id');
    }

    public function tagJoin()
    {
        return $this->hasMany('App\Models\TagJoin', 'post_id' , 'id');
    }

    public function postVote()
    {
        return $this->hasMany('App\Models\Vote' , 'user_id' , 'id');
    }
    
}

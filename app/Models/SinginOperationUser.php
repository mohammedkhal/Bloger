<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class SinginOperationUsers extends Model
{
    use Notifiable;

    public $table="singin_operation_users" ;

    protected $casts = [
     'id' =>'integer' ,
     'admin_id' =>'integer',
     'ip' =>'string',
     'country' =>'string',
     'device_type' =>'string',
     'browser' =>'string',
     'operating_system' =>'string',
     
    ];


    protected $fillable = [
        'id', 'writer_id' , 'ip', 'country', 'device_type' ,
        'browser' , 'operating_system' , 'last_signin' , 'signin_at' , 'session_end_at' 
    ];

    
    protected $dates = [
        'last_signin',
        'signin_at',
        'session_end_at',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User' , 'user_id' , 'id');
    }

 
}

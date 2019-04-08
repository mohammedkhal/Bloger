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
     'id' =>'unsignedBigInteger' ,
     'admin_id' =>'integer',
     'ip' =>'string',
     'country' =>'string',
     'device_type' =>'string',
     'browser' =>'string',
     'operating_system' =>'string',
     'login_date' =>'date',
     'last_login' =>'date',
     'session_end_date' =>'date',
    ];


    protected $fillable = [
        'id', 'writer_id' , 'ip', 'country', 'device_type' ,
        'browser' , 'operating_system' , 'login_date' , 'last_login' , 'session_end_date' 
    ];

    
    protected $dates = [
        'login_date',
        'last_login',
        'session_end_date',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User' , 'user_id' , 'id');
    }

 
}

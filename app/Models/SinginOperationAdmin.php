<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class SinginOperationAdmin extends Model
{
    use Notifiable;

    public $table="singin_operation_admins" ;

    protected $casts = [
        'id' =>'integer' ,
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
        'id', 'admin_id' , 'ip', 'country', 'device_type' ,
        'browser' , 'operating_system' , 'login_date' , 'last_login' , 'session_end_date' 
    ];

    
    protected $dates = [
        'created_at',
        'updated_at',
    ];

  

 
}

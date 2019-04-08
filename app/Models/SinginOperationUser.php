<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class SinginOperationUsers extends Model
{
    use Notifiable;

    public $table="singin_operation_users" ;


    protected $fillable = [
        'id', 'writer_id' , 'ip', 'country', 'device_type' ,
        'browser' , 'operating_system' , 'login_date' , 'last_login' , 'session_end_date' 
    ];

    
    protected $dates = [
        'created_at',
        'updated_at',
    ];

  

 
}

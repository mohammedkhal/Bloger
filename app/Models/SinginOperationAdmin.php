<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SinginOperationAdmin extends Model
{

    public $table="singin_operation_admins" ;

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
        'id', 'admin_id' , 'ip', 'country', 'device_type' ,
        'browser' , 'operating_system' , 'last_signin' , 'signin_at' , 'session_end_at' 
    ];

    
    protected $dates = [
        'last_signin',
        'signin_at',
        'session_end_at',
    ];

  

 
}

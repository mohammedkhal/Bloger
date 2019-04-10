<?php

namespace App\Http\Controllers\Authorization;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
class SignOutController extends Controller
{

    public function destroyUser()
    {
        
        Auth::guard('user')->logout();
        if(!auth()->check()){
            //dd('correct');
        }
            
            return redirect()->back();
        
        
    }

    
   
}
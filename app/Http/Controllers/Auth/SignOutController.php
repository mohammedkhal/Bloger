<?php

namespace App\Http\Controllers\Authorization;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
class SignOutController extends Controller
{

    public function signOut()
    {
        Auth::guard('user')->logout();         
        return redirect()->back();       
    }

    
   
}
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
class SignOutController extends Controller
{
    public function __construct(AuthService $authService)
    {
        $this->auth = $authService;
    }

    public function signOut()
    {
        $this->auth->signout();
        Auth::guard('user')->logout();         
        return redirect()->route('');       
    }

    
   
}
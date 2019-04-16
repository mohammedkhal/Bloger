<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\AuthService;

class SignOutController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function signOut()
    {
        $this->authService->signout();
        return redirect()->route('auth.sign-in');       
    }

    
   
}
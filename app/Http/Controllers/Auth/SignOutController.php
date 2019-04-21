<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\AuthService;

class SignOutController extends Controller
{
    private $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function signOut()
    {
        $this->authService->signOut();
        return redirect()->route('auth.sign-in');       
    }

    
   
}
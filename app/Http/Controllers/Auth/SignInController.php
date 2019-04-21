<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\AuthService;
use Illuminate\Http\Request;

class SignInController extends Controller
{
    private $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function create()
    {
        return view('auth.user_signin');
    }

    public function auth(Request $request)
    {
        $data = $request->only(
            'username',
            'password',
            'ip',
            'User_Agent'
        );

        if ($this->authService->authSignIn($data)) {
            return redirect()->route('posts.index');
        } else {
            return redirect()->route('auth.sign-in')->with('message', 'username or password are not correct');
        }
    }
}

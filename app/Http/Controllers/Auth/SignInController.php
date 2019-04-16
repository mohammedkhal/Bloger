<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\AuthService;
use Illuminate\Http\Request;

class SignInController extends Controller
{

    public function __construct(AuthService $authService)
    {
        $this->auth = $authService;
    }

    public function create()
    {
        return view('auth.user_signin');
    }

    public function auth(Request $request)
    {
        $this->auth->signin($request);
        return redirect()->route('posts.index');
    }
}

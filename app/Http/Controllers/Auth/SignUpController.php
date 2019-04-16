<?php

namespace App\Http\Controllers\Auth;

use App\Services\SignupService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignUpController extends Controller
{

    public function  __construct(SignupService $signupService)
    {

        $this->user = $signupService;
    }

    public function create()
    {
        return view('auth.user_signup');
    }

    public function store(Request $request)
    {
        $this->user->store($request);
        return redirect()->route('posts.index');
    }
}

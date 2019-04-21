<?php

namespace App\Http\Controllers\Auth;

use App\Services\SignupService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserInfo;

class SignUpController extends Controller
{
    private $signupService;

    public function  __construct(SignupService $signupService)
    {

        $this->signupService = $signupService;
    }

    public function create()
    {
        return view('auth.user_signup');
    }

    public function store(StoreUserInfo $request)
    {
        $data = $request->all();
        $this->signupService->store($data);
        return redirect()->route('posts.index');
    }
}

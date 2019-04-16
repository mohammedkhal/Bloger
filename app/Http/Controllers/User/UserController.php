<?php

namespace App\Http\Controllers\User;

use App\Services\UserService;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users =  $this->userService->fetchUser();
        return view('user.index', compact('users'));
    }

    public function show($slug)
    {
        $user =  $this->userService->find($slug);
        return view('user.show', compact('user'));
    }
}

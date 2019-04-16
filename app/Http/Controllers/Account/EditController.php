<?php

namespace App\Http\Controllers\Account;

use App\Services\UserService;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function __construct(UserService $userService)
    {
        $this->user = $userService;
    }

    public function show($slug)
    {
        $user =  $this->user->find($slug);
        return view('user.view', compact('user'));
    }
}

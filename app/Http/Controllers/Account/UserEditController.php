<?php

namespace App\Http\Controllers\Account;

use App\Services\UserService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserEditeController extends Controller
{
    public function __construct(UserService $userService)
    {
        $this->user = $userService;
    }

    public function edit($slug)
    {
        $user =  $this->user->find($slug);
        return view('user.edit', compact('user'));
    }

    public function update($slug, Request $request)
    {
        $this->user->update($slug, $request);
        return redirect()->route('posts.index');
    }
}

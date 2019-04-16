<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function show($slug)
    {
        $user =  $this->userService->find($slug);
        return view('user.view', compact('user'));
    }
   
    public function edit($slug)
    {
        $user =  $this->userService->find($slug);
        return view('user.edit', compact('user'));
    }

    public function update($slug, Request $request)
    {
        $this->userService->update($slug, $request);
        return redirect()->route('posts.index');
    }

   
}

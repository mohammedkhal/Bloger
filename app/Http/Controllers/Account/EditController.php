<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserInfo;

class EditController extends Controller
{
    private $userService;

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

    public function update(UpdateUserInfo $request, $slug)
    {
        $data = $request->all();
        $this->userService->update($data, $slug);
        return redirect()->route('posts.index');
    }
}

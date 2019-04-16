<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class SignupService
{
    public function  __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function store(Request $request)
    {

        $request->validate([
            'first_name' => 'required|max:255',
            'second_name' => 'required|max:255',
            'third_name' => 'required|max:255',
            'username' => 'required|max:255',
            'password' => 'required',
            'email' => 'required|email|unique:users',
            'type' => 'required',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $avatarName = time() . '.' . request()->avatar->getClientOriginalExtension();
        $request->avatar->storeAs('avatars', $avatarName);
        $attributes = $request->all();
        $attributes['profile_pic'] = $avatarName;
        $this->user->store($attributes);
    }
}

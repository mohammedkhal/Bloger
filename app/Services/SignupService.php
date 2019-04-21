<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Auth;

class SignupService
{
    private $userRepository;

    public function  __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function store($data)
    {
        $avatarName = time() . '.' . $data->avatar->getClientOriginalExtension();
        $data->avatar->storeAs('avatars', $avatarName);
        $attributes = $data->all();
        $attributes['profile_pic'] = $avatarName;
        $user = $this->userRepository->store($attributes);
        auth('user')->login($user);
    }
}

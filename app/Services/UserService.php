<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserService
{
  public function  __construct(UserRepository $userRepository)
  {
    $this->userRepository = $userRepository;
  }

  public function fetchUser()
  {
    return  $this->user->fetch();
  }

  public function find($slug)
  {
    return $this->user->find($slug);
  }

  public function update($slug, Request $request)
  {
    $request->validate([
      'first_name' => 'required|max:255',
      'second_name' => 'required|max:255',
      'third_name' => 'required|max:255',
      'username' => 'required|max:255',
      'type' => 'required',
      'avatar' => 'required|image|mimes:jpeg,png,jpg,gif',

    ]);

    $avatarName = time() . '.' . request()->avatar->getClientOriginalExtension();
    $request->avatar->storeAs('avatars', $avatarName);
    $attributes = $request->all();
    $attributes['profile_pic'] = $avatarName;

    return  $this->user->update($slug, $attributes);
  }
}

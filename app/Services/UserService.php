<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{
  private $userRepository;

  public function  __construct(UserRepository $userRepository)
  {
    $this->userRepository = $userRepository;
  }

  public function fetchUser()
  {
    return  $this->userRepository->fetch();
  }

  public function find($slug)
  {
    return $this->userRepository->find($slug);
  }

  public function update($data, $slug)
  {
    $avatarName = time() . '.' . request()->avatar->getClientOriginalExtension();
    $data->avatar->storeAs('avatars', $avatarName);
    $data['profile_pic'] = $avatarName;
    return  $this->userRepository->update($slug, $data);
  }
}

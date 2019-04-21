<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
  public  function getModel()
  {
    return new  User;
  }

  public function store($attributes)
  {
    $user = $this->getModel();
    $user->first_name =   $attributes['first_name'];
    $user->second_name =   $attributes['second_name'];
    $user->third_name =   $attributes['third_name'];
    $user->website =   $attributes['website'];
    $user->country =   $attributes['country'];
    $user->username =   $attributes['username'];
    $user->password = bcrypt($attributes['password']);
    $user->email =   $attributes['email'];
    $user->type =   $attributes['type'];
    $user->profile_pic =  $attributes['profile_pic'];
    $user->save();
    return $user;
  }

  public function fetch()
  {
    $user = $this->getModel();
    return  $user->all();
  }

  public function find($slug)
  {
    $user = $this->getModel();
    return  $user->where('username', $slug)->first();
  }

  public function update($slug, $data)
  {
    $user = $this->find($slug);
    $user->first_name =   $data['first_name'];
    $user->second_name =   $data['second_name'];
    $user->third_name =   $data['third_name'];
    $user->website =   $data['website'];
    $user->country =   $data['country'];
    $user->username =   $data['username'];
    if ($data['password'] != Null) {
      $user->password = bcrypt($data['password']);
    }
    $user->email =   $data['email'];
    $user->type =   $data['type'];
    $user->profile_pic =  $data['profile_pic'];

    $user->save();
  }
}

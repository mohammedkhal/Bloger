<?php

namespace App\Repositories ; 

use App\Models\User ; 

class UserRepository {

    public  function getModel(){
      return new  User  ; 
    }

    public function store($attributes)
    {
        $user = $this->getModel();
        $user->first_name =   $attributes['first_name'] ;
        $user->second_name =   $attributes['second_name'] ;
        $user->third_name =   $attributes['third_name'] ;
        $user->website =   $attributes['website'] ;
        $user->country =   $attributes['country'] ;
        $user->username =   $attributes['username'] ;
        $user->password = $attributes['password'] ;
        $user->email =   $attributes['email'] ;
        $user->type =   $attributes['type'] ;
   
        $user->save();
        auth('user')->login($user);
     
    }

    public function show(){
      $user = $this->getModel();
      return  $user->all() ; 
    }

    public function showOne($username){
      $user = $this->getModel();
      return  $user->where('username' , $username )->first() ; 
    }
}
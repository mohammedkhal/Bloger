<?php

namespace App\Repositories ; 

use App\Models\User ;
use phpDocumentor\Reflection\Types\Null_;

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
        $user->password = bcrypt( $attributes['password'] );
        $user->email =   $attributes['email'] ;
        $user->type =   $attributes['type'] ;
        $user->profile_pic =  $attributes['profile_pic'];
      
        $user->save();
        auth('user')->login($user);
     
    }

    public function index(){
      $user = $this->getModel();
      return  $user->all() ;
  }

    public function find($slug){
      $user = $this->getModel();
      return  $user->where('username' , $slug )->first() ; 
    }

  public function update($slug, $attributes)
    {
        $user = $this->find($slug);
        $user->first_name =   $attributes['first_name'] ;
        $user->second_name =   $attributes['second_name'] ;
        $user->third_name =   $attributes['third_name'] ;
        $user->website =   $attributes['website'] ;
        $user->country =   $attributes['country'] ;
        $user->username =   $attributes['username'] ;
        if( $attributes['password'] != Null){
        $user->password = bcrypt( $attributes['password'] );
      }
        $user->email =   $attributes['email'] ;
        $user->type =   $attributes['type'] ;
        $user->profile_pic =  $attributes['profile_pic'];
      
        $user->save();
       
     
    }
}
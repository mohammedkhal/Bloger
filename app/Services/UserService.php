<?php

namespace App\Services;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserService {
    
     protected $user ;
    public function  __construct(UserRepository $user ) {

     $this->user = $user ; 
    }
   
    public function showUsers(){
       return  $this->user->show() ; 
    }
    
    public function oneUser($username){
       
      return  $this->user->showOne($username) ; 
   }
 
}
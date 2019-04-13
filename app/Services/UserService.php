<?php

namespace App\Services;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserService {
    
     protected $user ;
    public function  __construct(UserRepository $user ) {

     $this->user = $user ; 
    }
   
    public function show(){
       return  $this->user->show() ; 
    }
    
    public function find($slug){
       
      return  $this->user->find($slug) ; 
   }
 
}
<?php

namespace App\Services;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class SignupService {
    
     protected $user ;
    public function  __construct(UserRepository $user ) {

     $this->user = $user ; 
    }
   
    public function storeUser(Request $request){

        $request->validate([
			'first_name' => 'required|max:255',
			'second_name' => 'required|max:255',
			'third_name' => 'required|max:255',
			'username' => 'required|max:255',
            'password' => 'required',
            'email' => 'required|email|unique:users',
            'type' => 'required', 
		]);

        $attributes = $request->all();

        $this->user->store($attributes) ; 
    }


}
<?php

namespace App\Http\Controllers\Account ;
use App\Services\UserService ;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller {

    protected $user;

    public function __construct(UserService $user)
    {
        $this->user = $user;
    }
    
    public function allUser(){

        $users =  $this->user->showUsers() ; 
       // dd($users);
        return view('pages.showUser' , compact('users')) ;
    }
      


}
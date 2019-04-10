<?php

namespace App\Http\Controllers\Account ;
use App\Services\UserService ;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class EditController extends Controller {

    protected $user;

    public function __construct(UserService $user)
    {
        $this->user = $user;
    }

    public function showUser($username)
    {

        $user =  $this->user->oneUser($username) ; 
        //dd($user);
        return view('pages.readOneUser' , compact('user')) ;
    }
      


}
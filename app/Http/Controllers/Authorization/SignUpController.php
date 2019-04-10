<?php

namespace App\Http\Controllers\Authorization;
use App\Services\SignupService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

class SignUpController extends Controller
{

protected $user ;
public function  __construct(SignupService $user ) {

        $this->user = $user ; 
 }

public function createUser(){
    return view('auth.user_signup');
}

public function storeUser(Request $request ){

    $this->user->storeUser($request);
    return redirect()->route('articles.index');
}

}
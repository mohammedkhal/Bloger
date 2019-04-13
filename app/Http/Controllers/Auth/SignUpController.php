<?php

namespace App\Http\Controllers\Auth;
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

public function create(){
    return view('auth.user_signup');
}

public function store(Request $request ){

    $this->user->store($request);
    return redirect()->route('posts.index');
}

}
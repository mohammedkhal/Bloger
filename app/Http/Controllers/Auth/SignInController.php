<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Services\AuthService ;
use Illuminate\Http\Request;
use Auth;

class SignInController extends Controller {

       public function __construct(AuthService $auth)
       {
           $this->auth = $auth;
       }


       public function create()
       {
           return view('auth.user_signin');
       }
       
       public function auth(Request $request)
       {
           
                $this->auth->auth($request) ;
           return redirect()->route('posts.index');
       }
       

}
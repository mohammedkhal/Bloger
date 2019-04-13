<?php

namespace App\Http\Controllers\Dashboard ;
use App\Services\SignupService ;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller {

       public function create()
       {
           return view('auth.admin_signin');
       }
       
       public function store(Request $request)
       {
        if (!Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password]))
           {  
                return back()->withErrors([
                   'message' => 'The email or password is incorrect, please try again'
               ]);
           }
           
           return redirect()->route('auth.sign-up');
       }
       
       public function signout()
       {
        Auth::guard('admin')->logout();
           return redirect()->route('signin.store');
       }



}
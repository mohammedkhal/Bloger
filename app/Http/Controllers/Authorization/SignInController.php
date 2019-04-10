<?php

namespace App\Http\Controllers\Authorization ;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class SignInController extends Controller {



       public function createLogin()
       {
           return view('auth.user_signin');
       }
       
       public function storeUser(Request $request)
       {
           if (!Auth::guard('user')->attempt(['username' => $request->username, 'password' => $request->password]) )
            {   return back()->withErrors([
                   'message' => 'The email or password is incorrect, please try again'
               ]);
           }
           
           return redirect()->route('articles.index');
       }
       

}
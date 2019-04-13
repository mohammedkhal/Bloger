<?php

namespace App\Http\Controllers\Account ;
use App\Services\UserService ;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class UserEditeController extends Controller {

    protected $user;

    public function __construct(UserService $user)
    {
        $this->user = $user;
    }

    public function edite($slug)
    {
        $user =  $this->user->find($slug) ; 
        return view('users.show' , compact('user')) ;
    }

    public function update($slug , Request $request)
    { 
        $this->user->update($slug, $request) ; 
        return redirect()->back() ;
    }
      


}
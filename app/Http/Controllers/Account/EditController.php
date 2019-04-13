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

    public function find($slug)
    {
        $user =  $this->user->find($slug) ; 
        return view('pages.readOneUser' , compact('user')) ;
    }
      


}
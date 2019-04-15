
<?php

namespace App\Http\Controllers\User;

use App\Services\UserService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{

    protected $user;

    public function __construct(UserService $user)
    {
        $this->user = $user;
    }

    public function index()
    {

        $users =  $this->user->index();
        return view('pages.showUser', compact('users'));
    }

    public function find($slug)
    {

        $user =  $this->user->find($slug);
        return view('users.showOneUser', compact('user'));
    }
}

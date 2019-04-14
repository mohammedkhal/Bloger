<?php

namespace App\Http\Controllers\Dashboard;

use App\Services\DashboardService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class SignInController extends Controller
{
    public function __construct(DashboardService $auth)
    {
        $this->auth = $auth;
    }
    public function create()
    {
        return view('auth.admin_signin');
    }

    public function auth(Request $request)
    {
        $this->auth->auth($request);
        return redirect()->route('auth.sign-up');
    }

    public function signout()
    {
        $this->auth->signout();

        return redirect()->route('signin.store');
    }
}

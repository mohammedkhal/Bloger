<?php

namespace App\Http\Controllers\Dashboard;

use App\Services\DashboardService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignInController extends Controller
{
    public function __construct(DashboardService $dashboardService)
    {
        $this->auth = $dashboardService;
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

    public function signOut()
    {
        $this->auth->signout();
        return redirect()->route('signin.store');
    }
}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Services\DashboardService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignInController extends Controller
{
    protected $dashboardService;

    public function __construct(DashboardService $dashboardService)
    {
        $this->dashboardService = $dashboardService;
    }
    public function create()
    {
        return view('signin');
    }

    public function auth(Request $request)
    {
        if ($this->dashboardService->auth($request)) {
            return redirect()->route('posts.index');
        } else {
            return redirect()->route('signin')->with('message','username or password are not correct');
        }
    }

    public function signout()
    {
        $this->dashboardService->signout();
        return redirect()->route('signin');
    }
}

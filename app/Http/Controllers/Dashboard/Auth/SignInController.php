<?php

namespace App\Http\Controllers\Dashboard\Auth;

use App\Services\DashboardService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignInController extends Controller
{
    private $dashboardService;

    public function __construct(DashboardService $dashboardService)
    {
        $this->dashboardService = $dashboardService;
    }
    public function create()
    {
        return view('signin');
    }

    public function auth(AuthSignIn $request)
    {
        $data = $request->only(
            'username',
            'password',
            'ip',
            'User_Agent'
        );

        if ($this->dashboardService->auth($data)) {
            return redirect()->route('posts.index');
        } else {
            return redirect()->route('signin')->with('message', 'username or password are not correct');
        }
    }

    public function signout()
    {
        $this->dashboardService->signOut();
        return redirect()->route('signin');
    }
}

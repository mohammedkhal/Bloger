<?php

namespace App\Http\Controllers\Dashboard\Auth;

use App\Services\DashboardService;
use App\Http\Controllers\Controller;

class SignInController extends Controller
{
    private $dashboardService;

    public function __construct(DashboardService $dashboardService)
    {
        $this->dashboardService = $dashboardService;
    }

    public function signOut()
    {
        $this->dashboardService->signout();
        return redirect()->route('signin');
    }
}

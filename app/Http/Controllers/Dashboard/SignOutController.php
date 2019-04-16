<?php

namespace App\Http\Controllers\Dashboard;

use App\Services\DashboardService;
use App\Http\Controllers\Controller;

class SignInController extends Controller
{
    protected $dashboardService;

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

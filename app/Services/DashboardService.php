<?php

namespace App\Services;

use App\Repositories\SinginOperationAdminRepository;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use Auth;

class DashboardService
{
    public function  __construct(SinginOperationAdminRepository $SinginOperationAdmin)
    {

        $this->SinginOperationAdmin = $SinginOperationAdmin;
    }

    public function auth(Request $request)
    {
        $agent = new Agent();
        if (!Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }

        $data = ([
            'admin_id' => auth('admin')->id(),
            'ip' =>  $request->ip(),
            'device' => strtolower($agent->device()),
            'country' => strtolower(geoip()->getLocation($request->ip())->country),
            'browser' => strtolower($agent->browser()),
            'operating_system' => strtolower($agent->platform()),
            'signin' => date("Y-m-d h:i:sa"),
        ]);
        return  $this->SinginOperationAdmin->adminAgent($data);
    }

    public function signout()
    {
        if (Auth::guard('admin')->logout())
            return true;
    }
}

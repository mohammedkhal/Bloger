<?php

namespace App\Services;

use App\Repositories\SinginOperationAdminRepository;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use Auth;

class DashboardService
{
    protected $SinginOperationAdminRepository;

    public function  __construct(SinginOperationAdminRepository $SinginOperationAdminRepository)
    {
        $this->SinginOperationAdminRepository = $SinginOperationAdminRepository;
    }

    public function auth(Request $request)
    {
        $agent = new Agent();
        
        if (!Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return false;
        }

        $data = [
            'admin_id' => auth('admin')->id(),
            'ip' =>  $request->ip(),
            'device' => strtolower($agent->device()),
            'country' => strtolower(geoip()->getLocation($request->ip())->country),
            'browser' => strtolower($agent->browser()),
            'operating_system' => strtolower($agent->platform()),
            'signin' => date("Y-m-d h:i:s"),
        ];
        return  $this->SinginOperationAdminRepository->store($data);
    }

    public function signout()
    {
        if (Auth::guard('admin')->logout())
            return true;
    }
}

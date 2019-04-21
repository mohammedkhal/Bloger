<?php

namespace App\Services;

use App\Repositories\SinginOperationAdminRepository;
use Jenssegers\Agent\Agent;
use Auth;

class DashboardService
{
    private $SinginOperationAdminRepository;

    public function  __construct(SinginOperationAdminRepository $SinginOperationAdminRepository)
    {
        $this->SinginOperationAdminRepository = $SinginOperationAdminRepository;
    }

    public function auth($data)
    {
        $agent = new Agent();
        $value = $data->header('User-Agent');
        $agent->setUserAgent($value);

        if (!Auth::guard('admin')->attempt(['username' => $data->username, 'password' => $data->password])) {
            return false;
        }

        $data = [
            'admin_id' => auth('admin')->id(),
            'ip' =>  $data->ip(),
            'device' => strtolower($agent->device()),
            'country' => strtolower(geoip()->getLocation($data->ip())->country),
            'browser' => strtolower($agent->browser()),
            'operating_system' => strtolower($agent->platform()),
            'signin' => date("Y-m-d h:i:s"),
        ];
        return  $this->SinginOperationAdminRepository->store($data);
    }

    public function signOut()
    {
        Auth::guard('admin')->logout();
    }
}

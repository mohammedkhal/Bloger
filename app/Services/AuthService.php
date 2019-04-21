<?php

namespace App\Services;

use App\Repositories\SinginOperationUserRepository;
use Jenssegers\Agent\Agent;
use Auth;

class AuthService
{
    private $SinginOperationUserRepository;

    public function  __construct(SinginOperationUserRepository $SinginOperationUserRepository)
    {
        $this->SinginOperationUserRepository = $SinginOperationUserRepository;
    }

    public function authSignIn($data)
    {
        $agent = new Agent();
        $value = $data->header('User-Agent');
        $agent->setUserAgent($value);

        if (!Auth::guard('user')->attempt(['username' => $data->username, 'password' => $data->password])) {
            return false;
        }

        $data = [
            'user_id' => auth('user')->id(),
            'ip' =>  $data->ip(),
            'device' => strtolower($agent->device()),
            'country' => strtolower(geoip()->getLocation($data->ip())->country),
            'browser' => strtolower($agent->browser()),
            'operating_system' => strtolower($agent->platform()),
            'signin' => now(),
        ];
        return  $this->SinginOperationUserRepository->store($data);
    }

    public function signOut()
    {
        return Auth::guard('user')->logout();
    }
}

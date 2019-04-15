<?php

namespace App\Services;

use App\Repositories\SinginOperationUserRepository;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use Auth;

class AuthService
{


    public function  __construct(SinginOperationUserRepository $SinginOperationUser)
    {

        $this->SinginOperationUser = $SinginOperationUser;
    }

    public function auth(Request $request)
    {
        $agent = new Agent();
        if (!Auth::guard('user')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }

        $data = ([
            'user_id' => auth('user')->id(),
            'ip' =>  $request->ip(),
            'device' => strtolower($agent->device()),
            'country' => strtolower(geoip()->getLocation($request->ip())->country),
            'browser' => strtolower($agent->browser()),
            'operating_system' => strtolower($agent->platform()),
            'signin' => date("Y-m-d h:i:s"),


        ]);
        return  $this->SinginOperationUser->userAgent($data);
    }
}

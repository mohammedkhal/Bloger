<?php

namespace App\Repositories;

use App\Models\SinginOperationUser;

class SinginOperationUserRepository
{
    public function getModel()
    {
        return new SinginOperationUser;
    }

    public function store($data)
    {
        $SinginOperationUser = $this->getModel();
        $SinginOperationUser->user_id = $data['user_id'];
        $SinginOperationUser->ip = $data['ip'];
        $SinginOperationUser->country = $data['country'];
        $SinginOperationUser->device = $data['device'];
        $SinginOperationUser->browser = $data['browser'];
        $SinginOperationUser->signin = $data['signin'];
        $SinginOperationUser->operating_system = $data['operating_system'];
        return $SinginOperationUser->save();
    }
}

<?php

namespace App\Repositories;

use App\Models\SinginOperationAdmin;

class SinginOperationAdminRepository
{
    protected $SinginOperationAdmin;

    public function getModel()
    {
        return new SinginOperationAdmin;
    }

    public function adminAgent($data)
    {
        $SinginOperationAdmin = $this->getModel();
        $SinginOperationAdmin->admin_id = $data['admin_id'];
        $SinginOperationAdmin->ip = $data['ip'];
        $SinginOperationAdmin->country = $data['country'];
        $SinginOperationAdmin->device = $data['device'];
        $SinginOperationAdmin->browser = $data['browser'];
        $SinginOperationAdmin->signin = $data['signin'];
        $SinginOperationAdmin->operating_system = $data['operating_system'];
        if ($SinginOperationAdmin->save()) {
            return true;
        }
    }
}

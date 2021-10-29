<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterAppsRoleModel extends Model
{
    protected $table = 'tbl_apps_role';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_apps', 'role', 'status'];

    public function getAppsRole($id_apps_role = false)
    {
        if ($id_apps_role == false) {
            return $this->findAll();
        }

        return $this->where(['id_apps_role' => $id_apps_role])->first();
    }
}

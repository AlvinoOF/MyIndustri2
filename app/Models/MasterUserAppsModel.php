<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterUserAppsModel extends Model
{
    protected $table = 'tbl_user_apps';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_user_apps', 'id_apps', 'id_user', 'status'];

    public function getUserApps($id_user_apps = false)
    {
        if ($id_user_apps == false) {
            return $this->findAll();
        }

        return $this->where(['id_user_apps' => $id_user_apps])->first();
    }
}

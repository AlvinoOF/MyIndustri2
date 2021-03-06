<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterAplikasiModel extends Model
{
    protected $primaryKey = 'id_apps';
    protected $table = 'tbl_apps';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_apps', 'nama_apps', 'link_apps'];

    public function getAplikasi($id_apps = false)
    {
        if ($id_apps == false) {
            return $this->findAll();
        }

        return $this->where(['id_apps' => $id_apps])->first();
    }
}

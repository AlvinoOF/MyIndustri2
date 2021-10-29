<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'tbl_user';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_user', 'id_unit', 'ktp', 'nama', 'tempat_lahir', 'tgl_lahir', 'jenis_kelamin', 'alamat', 'tlp', 'email', 'npp', 'kontrak', 'tgl_mulai', 'tgl_selesai', 'jabatan', 'status', 'profil_img', 'password', 'created_by', 'updated_by', 'deleted_by'];

    public function getUser($id_user = false)
    {
        if ($id_user == false) {
            return $this->findAll();
        }

        return $this->where(['id_user' => $id_user])->first();
    }

    public function getAdmin($id_user = false)
    {
        if ($id_user == false) {
            return $this->findAll();
        }

        return $this->where(['id_user' => $id_user])->first();
    }
}

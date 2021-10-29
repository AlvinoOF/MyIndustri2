<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'tbl_user';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_user', 'id_unit', 'ktp', 'nama', 'tempat_lahir', 'tgl_lahir', 'jenis_kelamin', 'alamat', 'tlp', 'email', 'npp', 'kontrak', 'tgl_mulai', 'tgl_selesai', 'jabatan', 'status', 'profil_img', 'password', 'created_by', 'updated_by', 'deleted_by'];

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function getUser($id_user = null)
    {
        $builder = $this->db->table('tbl_user');
        $builder->select('tbl_user.id_user as userid, id_unit, ktp, nama, tempat_lahir, tgl_lahir, jenis_kelamin, alamat, tlp, email, npp, kontrak, tgl_mulai, tgl_selesai, jabatan, status, profil_img, password, created_by, updated_by, deleted_by');
        $builder->join('tbl_user_apps', 'tbl_user_apps.id_user = tbl_user.id_user');
        $builder->join('tbl_unit', 'tbl_unit.id_unit = tbl_user.id_unit');
        if ($id_user != null) :
            $builder->where('tbl_user.id_user', $id_user);
        endif;
        return $builder->get();
    }
}

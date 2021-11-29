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

    public function getUser($id_user = null, $id_apps = null)
    {
        $builder = $this->db->table('tbl_user');
        $builder->select('tbl_user.id_user as userid, ktp, nama, tempat_lahir, tgl_lahir, jenis_kelamin, alamat, tlp, email, npp, kontrak, tgl_mulai, tgl_selesai, jabatan, profil_img');
        if ($id_user != null) :
            $builder->where('tbl_user.id_user', $id_user);
        endif;
        if ($id_apps != null) :
            $builder->where('tbl_apps_role.id_apps', $id_apps);
        endif;
        return $builder->get();
    }

    public function getLogin($user, $password, $id_apps)
    {
        $builder = $this->db->table('tbl_user');
        $builder->join('tbl_unit', 'tbl_unit.id_unit = tbl_user.id_unit');
        $builder->join('tbl_user_apps', 'tbl_user_apps.id_user = tbl_user.id_user');
        $builder->join('tbl_apps_role', 'tbl_apps_role.id_apps_role  = tbl_user_apps.id_role');
        $builder->where('tbl_user.email', $user);
        $builder->where('tbl_user.password', $password);
        $builder->where('tbl_apps_role.id_apps', $id_apps);
        return $builder->get();
    }

    public function getRole()
    {
        $builder = $this->db->table('tbl_apps_role');
        return $builder->get();
    }

    public function getUnit()
    {
        $builder = $this->db->table('tbl_unit');
        return $builder->get()->getResult();
    }
}

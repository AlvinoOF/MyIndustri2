<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\AdminModel;
use App\Models\MasterUnitModel;


class Admin extends BaseController
{

    protected $db, $builder;

    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('tbl_user');
        $this->user = new UsersModel();
        $this->MasterUnitModel = new MasterUnitModel();
    }

    public function index()
    {
        $data = array(
            'title' => 'User List',
            'tbl_user' => $this->user->getUser()
        );
        return view('admin/index', $data);
    }

    public function detail($id_user = null)
    {
        $data = array(
            'title' => 'User Detail',
            'user' => $this->user->getUser($id_user)->getRow()
        );

        if (empty($data['user'])) {
            return redirect()->to('/admin');
        }

        return view('admin/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah User',
            'validation' => \Config\Services::validation(),
            // 'roles' => $this->user->getRole()
            // 'tbl_unit' => $this->user->getUnit()
            'tbl_unit' => $this->MasterUnitModel->paginate(6, 'tbl_unit'),
        ];

        return view('admin/create', $data);
    }

    public function edit()
    {
        $data = [
            'title' => 'Form Update Profile'
        ];

        return view('admin/edit', $data);
    }

    public function delete($id_user)
    {
        $this->userModel->delete($id_user);
        session()->setFlashdata('pesan', 'Berhasil dihapus');
        return redirect()->to('/admin');
    }

    public function save()
    {
        // $session = \Config\Services::session();
        // $jabatan = $session->get('jabatan');
        // var_dump($jabatan);
        // exit;

        $builder       = $this->db->table('tbl_user');
        $data = array(

            'id_unit'           => $this->request->getVar('id_unit'),
            'ktp'           => $this->request->getVar('ktp'),
            'nama'          => $this->request->getVar('nama'),
            'tempat_lahir'  => $this->request->getVar('tempat_lahir'),
            'tgl_lahir'     => $this->request->getVar('tgl_lahir'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'alamat'        => $this->request->getVar('alamat'),
            'tlp'           => $this->request->getVar('tlp'),
            'email'         => $this->request->getVar('email'),
            'npp'           => $this->request->getVar('npp'),
            'kontrak'       => $this->request->getVar('kontrak'),
            'tgl_mulai'     => $this->request->getVar('tgl_mulai'),
            'tgl_selesai'   => $this->request->getVar('tgl_selesai'),
            'jabatan'       => $this->request->getVar('jabatan'),
            'updated_by'    => $this->request->getVar('updated_by'),
            'deleted_by'    => $this->request->getVar('deleted_by'),
            'status'        => 1
        );

        // $this->controller = \App\Controllers\User();
        $builder->insert($data);

        return redirect()->to('/admin');
    }

    public function update($id_user)
    {
        $this->userModel->save([
            'id_user'       => $id_user,
            'id_unit'           => $this->request->getVar('id_unit'),
            'ktp'           => $this->request->getVar('ktp'),
            'nama'          => $this->request->getVar('nama'),
            'tempat_lahir'  => $this->request->getVar('tempat_lahir'),
            'tgl_lahir'     => $this->request->getVar('tgl_lahir'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'alamat'        => $this->request->getVar('alamat'),
            'tlp'           => $this->request->getVar('tlp'),
            'email'         => $this->request->getVar('email'),
            'npp'           => $this->request->getVar('npp'),
            'kontrak'       => $this->request->getVar('kontrak'),
            'tgl_mulai'     => $this->request->getVar('tgl_mulai'),
            'tgl_selesai'   => $this->request->getVar('tgl_selesai'),
            'jabatan'       => $this->request->getVar('jabatan'),
            'updated_by'    => $this->request->getVar('updated_by'),
            'deleted_by'    => $this->request->getVar('deleted_by'),
            'status'        => 1
        ]);

        return redirect()->to('/admin');
    }
}

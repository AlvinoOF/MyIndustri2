<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Admin extends BaseController
{

    protected $db, $builder;

    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('tbl_user');
        $this->userModel = new UserModel();
        $this->user = new UsersModel();
    }

    public function index()
    {
        $data = array(
            'title' => 'User List',
            'users' => $this->user->getUser()
        );
        return view('admin/index', $data);
    }

    public function detail($id = null)
    {
        $data = array(
            'title' => 'User Detail',
            'user' => $this->user->getUser($id)->getRow()
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
            'roles' => $this->user->getRole()
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
        $jabatan = $this->request->getVar('jabatan');
        $data = array(
            'email' => $this->request->getVar('email'),
            'nama'  => $this->request->getVar('nama'),
            'password'  => $this->request->getVar('password'),
            'status' => 1
        );
        $dt = new User($data);
        $this->userModel->withGroup($jabatan)->save($dt);

        return redirect()->to('/admin');
    }

    public function update($id)
    {
        $slug = url_title($this->request->getVar('username'), '-', true);
        $this->userModel->save([
            'id'       => $id,
            'email'    => $this->request->getVar('email'),
            'username'  => $this->request->getVar('username'),
            'password'  => $this->request->getVar('password'),
            'slug'     => $slug
        ]);

        return redirect()->to('/admin');
    }
}

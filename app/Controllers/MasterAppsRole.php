<?php

namespace App\Controllers;

use App\Models\MasterAppsRoleModel;

class MasterAppsRole extends BaseController
{
    protected $MasterAppsRoleModel, $builder;

    public function __construct()
    {
        $this->MasterAppsRoleModel = new MasterAppsRoleModel();
    }

    public function index()
    {

        $currentPage = $this->request->getVar('page_master_apps_role') ? $this->request->getVar('page_master_apps_role') : 1;

        $data = [
            'title' => 'Daftar Role per Aplikasi',
            'tbl_apps_role' => $this->MasterAppsRoleModel->paginate(6, 'tbl_apps_role'),
            'pager' => $this->MasterAppsRoleModel->pager,
            'currentPage' => $currentPage
        ];

        return view('masterappsrole/index', $data);
    }

    public function create_apps_role()
    {
        $data = [
            'title' => 'Form Tambah Role per Aplikasi',
            'validation' => \Config\Services::validation()
        ];

        return view('masterappsrole/create', $data);
    }

    public function save_apps_role()
    {
        $this->MasterAplikasiModel->save([
            'id_apps_role' => $this->request->getVar('id_apps_role'),
            'id_apps' => $this->request->getVar('id_apps'),
            'role' => $this->request->getVar('role'),
            'status' => $this->request->getVar('status'),
        ]);

        session()->setFlashdata('pesan', 'Berhasil ditambahkan');

        return redirect()->to('/masterappsrole');
    }

    public function edit_apps_role($id_apps_role)
    {
        $data = [
            'title' => 'Form Update Aplikasi',
            'validation' => \Config\Services::validation(),
            'tbl_apps_role' => $this->MasterAplikasiModel->getMasterAplikasi($id_apps_role)
        ];

        return view('masterappsrole/edit_apps_role', $data);
    }

    public function update_apps_role($id_apps_role)
    {
        $this->MasterAplikasiModel->save([
            'id_apps_role' => $id_apps_role,
            'id_apps'      => $this->request->getVar('id_apps'),
            'role'         => $this->request->getVar('role'),
            'status'       => $this->request->getVar('status')
        ]);

        session()->setFlashdata('pesan', 'Berhasil diupdate');

        return redirect()->to('/masterappsrole');
    }

    public function delete_apps_role($id_apps_role)
    {
        $this->MasterAppsRoleModel->delete($id_apps_role);
        session()->setFlashdata('pesan', 'Berhasil dihapus');
        return redirect()->to('/masterappsrole');
    }
}

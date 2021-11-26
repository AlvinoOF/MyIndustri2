<?php

namespace App\Controllers;

use App\Models\MasterUserAppsModel;

class MasterUserApps extends BaseController
{
    protected $MasterUserAppsModel, $builder;

    public function __construct()
    {
        $this->MasterUserAppsModel = new MasterUserAppsModel();
    }

    public function index()
    {

        $currentPage = $this->request->getVar('page_master_user_apps') ? $this->request->getVar('page_master_user_apps') : 1;

        $data = [
            'title' => 'Daftar User per Aplikasi',
            'tbl_user_apps' => $this->MasterUserAppsModel->paginate(6, 'tbl_user_apps'),
            'pager' => $this->MasterUserAppsModel->pager,
            'currentPage' => $currentPage
        ];

        return view('masteruserapps/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah User per Aplikasi',
            'validation' => \Config\Services::validation()
        ];

        return view('masteruserapps/create', $data);
    }

    public function save()
    {
        $this->MasterUserAppsModel->save([
            'id_user_apps' => $this->request->getVar('id_user_apps'),
            'id_apps' => $this->request->getVar('id_apps'),
            'id_user' => $this->request->getVar('id_user'),
            'status' => $this->request->getVar('status'),
        ]);

        session()->setFlashdata('pesan', 'Berhasil ditambahkan');

        return redirect()->to('/masteruserapps');
    }

    public function edit($id_user_apps)
    {
        $data = [
            'title' => 'Form Update User per Aplikasi',
            'validation' => \Config\Services::validation(),
            'tbl_user_apps' => $this->MasterUserAppsModel->getMasterAplikasi($id_user_apps)
        ];

        return view('masteruserapps/edit', $data);
    }

    public function update($id_user_apps)
    {
        $this->MasterUserAppsModel->save([
            'id_user_apps' => $id_user_apps,
            'id_apps' => $this->request->getVar('id_apps'),
            'id_user' => $this->request->getVar('id_user'),
            'status' => $this->request->getVar('status')
        ]);

        session()->setFlashdata('pesan', 'Berhasil diupdate');

        return redirect()->to('/masteruserapps');
    }

    public function delete($id_user_apps)
    {
        $this->MasterUserAppsModel->delete($id_user_apps);
        session()->setFlashdata('pesan', 'Berhasil dihapus');
        return redirect()->to('/masteruserapps');
    }
}

<?php

namespace App\Controllers;

use App\Models\MasterAplikasiModel;

class MasterAplikasi extends BaseController
{
    protected $MasterAplikasiModel, $builder;

    public function __construct()
    {
        $this->MasterAplikasiModel = new MasterAplikasiModel();
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_master_aplikasi') ? $this->request->getVar('page_master_aplikasi') : 1;

        $data = [
            'title' => 'Daftar Aplikasi',
            'tbl_apps' => $this->MasterAplikasiModel->paginate(6, 'tbl_apps'),
            'pager' => $this->MasterAplikasiModel->pager,
            'currentPage' => $currentPage
        ];

        return view('masteraplikasi/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Aplikasi',
            'validation' => \Config\Services::validation()
        ];

        return view('masteraplikasi/create', $data);
    }

    public function save()
    {
        $this->MasterAplikasiModel->save([
            'nama_apps'   => $this->request->getVar('nama_apps'),
            'link_apps'   => $this->request->getVar('link_apps'),
            'status_apps' => $this->request->getVar('status_apps'),
        ]);

        session()->setFlashdata('pesan', 'Berhasil ditambahkan');

        return redirect()->to('/masteraplikasi');
    }

    public function edit($id_apps)
    {
        $data = [
            'title' => 'Form Update Aplikasi',
            'validation' => \Config\Services::validation(),
            'master_aplikasi' => $this->MasterAplikasiModel->getMasterAplikasi($id_apps)
        ];

        return view('masteraplikasi/edit', $data);
    }

    public function update($id_apps)
    {
        $this->MasterAplikasiModel->save([
            'id_apps'     => $id_apps,
            'nama_apps'   => $this->request->getVar('nama_apps'),
            'link_apps'   => $this->request->getVar('link_apps'),
            'status_apps' => $this->request->getVar('status_apps')
        ]);

        session()->setFlashdata('pesan', 'Berhasil diupdate');

        return redirect()->to('/masteraplikasi');
    }

    public function delete($id_apps)
    {
        $this->MasterAplikasiModel->delete($id_apps);
        session()->setFlashdata('pesan', 'Berhasil dihapus');
        return redirect()->to('/masteraplikasi');
    }
}

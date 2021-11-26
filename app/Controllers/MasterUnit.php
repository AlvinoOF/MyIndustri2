<?php

namespace App\Controllers;

use App\Models\MasterUnitModel;

class MasterUnit extends BaseController
{
    protected $MasterUnitModel, $builder;

    public function __construct()
    {
        $this->MasterUnitModel = new MasterUnitModel();
    }

    public function index()
    {

        $currentPage = $this->request->getVar('page_master_unit') ? $this->request->getVar('page_master_unit') : 1;

        $data = [
            'title' => 'Daftar Unit',
            'tbl_unit' => $this->MasterUnitModel->paginate(6, 'tbl_unit'),
            'pager' => $this->MasterUnitModel->pager,
            'currentPage' => $currentPage
        ];

        return view('masterunit/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Unit',
            'validation' => \Config\Services::validation()
        ];

        return view('masterunit/create', $data);
    }

    public function save()
    {
        $this->MasterUnitModel->save([
            'jenis_unit'       => $this->request->getVar('jenis_unit'),
            'nama_unit' => $this->request->getVar('nama_unit'),
            'created_by' => $this->request->getVar('created_by'),

        ]);

        session()->setFlashdata('pesan', 'Berhasil ditambahkan');

        return redirect()->to('/masterunit');
    }

    public function edit($id_unit)
    {
        $data = [
            'title' => 'Form Update Unit',
            'validation' => \Config\Services::validation(),
            'tbl_unit' => $this->MasterAuthModel->getMasterUnit($id_unit)
        ];

        return view('masterunit/edit', $data);
    }

    public function update($id_unit)
    {
        $this->MasterUnitModel->save([
            'id_unit'   => $id_unit,
            'jenis_unit'       => $this->request->getVar('jenis_unit'),
            'nama_unit' => $this->request->getVar('nama_unit'),
            'updated_by' => $this->request->getVar('updated_by'),

        ]);

        session()->setFlashdata('pesan', 'Berhasil diupdate');

        return redirect()->to('/masterunit');
    }

    public function delete($id_unit)
    {
        $this->MasterUnitModel->delete($id_unit);
        session()->setFlashdata('pesan', 'Berhasil dihapus');
        return redirect()->to('/masterunit');
    }
}

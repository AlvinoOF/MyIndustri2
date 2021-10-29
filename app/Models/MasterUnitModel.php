<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterUnitModel extends Model
{
    protected $table = 'tbl_unit';
    protected $useTimestamps = true;
    protected $allowedFields = ['jenis_unit', 'nama_unit'];

    public function getUnit($id_unit = false)
    {
        if ($id_unit == false) {
            return $this->findAll();
        }

        return $this->where(['id_unit' => $id_unit])->first();
    }
}

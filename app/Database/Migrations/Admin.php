<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_unit'          => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'ktp'       => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'tempat_lahir' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'tgl_lahir' => [
                'type' => 'DATE',
                'null' => FALSE,
            ],
            'jenis_kelamin' => [
                'type' => 'SET',
                'value' => 'L', 'P',
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'tlp' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'npp' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'kontrak' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'tgl_mulai' => [
                'type' => 'DATE',
                'null' => FALSE
            ],
            'tgl_selesai' => [
                'type' => 'DATE',
                'null' => FALSE
            ],
            'jabatan' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'status' => [
                'type' => 'TINYINT',
                'constraint' => 1,
            ],
            'profil_img' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'null' => TRUE
            ],
            'created_by' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => TRUE
            ],
            'updated_by' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => TRUE
            ],
            'deleted_by' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ]
        ]);
        $this->forge->addKey('id_user', true);
        $this->forge->createTable('tbl_user');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_user');
    }
}

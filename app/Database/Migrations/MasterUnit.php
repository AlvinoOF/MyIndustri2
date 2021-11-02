<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MasterUnit extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_unit'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'jenis_unit' => [
				'type' => 'SET',
				'value' => 'Pusat', 'Cabang', 'Unit Pembantu',
			],
			'nama_unit' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
			'created_at' => [
				'type' => 'TIMESTAMP',
				'null' => TRUE
			],
			'created_by' => [
				'type' => 'INT',
				'constraint' => 11
			],
			'updated_at' => [
				'type' => 'TIMESTAMP',
				'null' => TRUE
			],
			'updated_by' => [
				'type' => 'INT',
				'constraint' => 11
			],
			'deleted_at' => [
				'type' => 'TIMESTAMP',
				'null' => TRUE
			],
			'deleted_by' => [
				'type' => 'INT',
				'constraint' => 11
			]
		]);
		$this->forge->addKey('id_unit', true);
		$this->forge->createTable('tbl_unit');
	}

	public function down()
	{
		$this->forge->dropTable('tbl_unit');
	}
}

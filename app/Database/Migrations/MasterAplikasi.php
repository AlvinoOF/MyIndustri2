<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MasterAplikasi extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_apps'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama_apps' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
			'link_apps' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
			'status_apps' => [
				'type' => 'TINYINT',
				'constraint' => 11,
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
		$this->forge->addKey('id_apps', true);
		$this->forge->createTable('tbl_apps');
	}

	public function down()
	{
		$this->forge->dropTable('tbl_apps');
	}
}

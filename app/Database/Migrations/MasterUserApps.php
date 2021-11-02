<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MasterUserApps extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_user_apps'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'id_apps' => [
				'type' => 'INT',
				'constraint' => 11,
			],
			'id_user' => [
				'type' => 'INT',
				'constraint' => 11,
			],
			'status' => [
				'type' => 'TINYINT',
				'constraint' => 1,
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
		$this->forge->addKey('id_user_apps', true);
		$this->forge->createTable('tbl_user_apps');
	}

	public function down()
	{
		$this->forge->dropTable('tbl_user_apps');
	}
}

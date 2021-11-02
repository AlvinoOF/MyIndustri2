<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Home extends BaseController
{
	public function __construct()
	{

		$this->UsersModel = new UsersModel();
	}
	public function index()
	{
		return view('auth/login');
	}

	public function login()
	{
		$id_apps = 1;
		$user = $this->request->getPost('nama');
		$password = $this->request->getPost('password');
		$check = $this->UsersModel->getLogin($user, $password, $id_apps);
		if ($check->getNumRows() > 0) {
			$data = $check->getRow();
			$usr = array(
				'id_user' => $data->id_user,
				'nama_user' => $data->nama,
				'role' => $data->role,
				'profil_img' => $data->profil_img,
			);

			return redirect()->to('/dashboard');
		}
	}

	public function user()
	{
		return view('dashboard');
	}
}

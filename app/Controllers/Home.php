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
		$check = session()->has('role');
		if ($check) {
			return redirect()->to('/' . $this->session->get('role') . '/Dashboard');
		}
		return view('auth/login');
	}

	public function login()
	{
		$id_apps = 1;
		$user = $this->request->getPost('nama');
		$password = md5($this->request->getPost('password'));
		$check = $this->UsersModel->getLogin($user, $password, $id_apps);
		if ($check->getNumRows() > 0) {
			$data = $check->getRow();
			$usr = array(
				'id_user' => $data->id_user,
				'nama_user' => $data->nama,
				'role' => $data->role,
				'profil_img' => $data->profil_img,
			);

			$this->session->set($usr);

			return redirect()->to('/' . $data->role . '/Dashboard');
		} else {
			return redirect()->back()->withInput()->with('error', 'user atau password salah');
		}
	}

	public function logout()
	{
		$this->session->destroy();
		return redirect()->to('/')->withInput()->with('success', 'logout berhasil');
	}
}

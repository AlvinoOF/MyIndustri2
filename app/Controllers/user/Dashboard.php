<?php

namespace App\Controllers\user;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{

    public function __construct()
    {
    }

    public function index()
    {
        $check = session()->get('role');
        if ($check != 'user') {
            return redirect()->to('/')->withInput()->with('error', 'anda tidak dapat mengakses halaman ini');
        }

        $data = [
            'title' => 'Dashboard',
        ];
        return view('dashboard_user', $data);
    }
}

<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{

    public function __construct()
    {
    }

    public function index()
    {
        $check = session()->get('role');
        if ($check != 'kabag') {
            return redirect()->to('/')->withInput()->with('error', 'anda tidak dapat mengakses halaman ini');
        }

        $data = [
            'title' => 'Dashboard',
        ];
        return view('dashboard', $data);
    }
}

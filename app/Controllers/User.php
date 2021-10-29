<?php

namespace App\Controllers;

use App\Models\UsersModel;

class User extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UsersModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
        ];
        return view('user/index', $data);
    }

    public function edit()
    {
        $data = [
            'title' => 'Form Update Profile'
        ];

        return view('user/edit', $data);
    }

    public function simpan()
    {
        $data = [
            'title' => 'Form Update Profile'
        ];

        return view('user/edit', $data);
    }
}

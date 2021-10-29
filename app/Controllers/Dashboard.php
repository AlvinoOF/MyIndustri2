<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        if (in_groups('admin')) {
            return view('dashboard');
        } else if (in_groups('user')) {
            return view('dashboard_user');
        } else if (in_groups('kabag')) {
            return view('dashboard_kabag');
        } else if (in_groups('pimpinan')) {
            return view('dashboard_pimpinan');
        }
    }
}

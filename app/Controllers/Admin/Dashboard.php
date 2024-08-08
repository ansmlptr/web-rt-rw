<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    function index()
    {
        $data = [];
        $data ['templateJudul'] = "Dashboard Admin";
        echo view('Admin/v_header', $data);
        echo view('Admin/v_dashboard', $data);
        echo view('Admin/v_footer', $data);
    }
}
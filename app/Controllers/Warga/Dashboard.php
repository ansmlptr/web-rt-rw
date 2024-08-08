<?php

namespace App\Controllers\Warga;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    function index()
    {
        $data = [];
        $data ['templateJudul'] = "Dashboard Warga";
        echo view('Warga/v_header', $data);
        echo view('Admin/v_dashboard', $data);
        echo view('Admin/v_footer', $data);
    }
}
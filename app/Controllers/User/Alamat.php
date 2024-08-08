<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\AdminWargaModel;

class Alamat extends BaseController
{
    function __construct()
    {
        $this->adminwarga = new AdminWargaModel(); // Gunakan $this untuk mengakses variabel di tingkat kelas
    }

    public function index()
    {
        $data['adminwarga'] = $this->adminwarga->findAll();
        echo view('User/v_header');
        echo view('User/v_alamat', $data);
        echo view('User/v_footer');
    }
}
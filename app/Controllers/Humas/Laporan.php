<?php

namespace App\Controllers\Humas;

use App\Controllers\BaseController;

class Laporan extends BaseController
{
    function __construct()
    {
        $session = \Config\Services::session();
        $dataAkun = $session->get(); // Menggunakan $session untuk mengambil data sesi
        $akun = [
            'level' => $dataAkun['level'] // Jika level ada dalam data akun
        ];
        $session->set($akun); // Menggunakan $session untuk mengatur data sesi
    }

    function admin()
    {
        $data = [];
        $data ['templateJudul'] = "Dashboard Admin";
        $data ['dataAkun'] = session()->get(); // Mendapatkan data sesi
        echo view('Admin/v_header', $data);
        echo view('Humas/v_laporan', $data);
        echo view('Admin/v_footer', $data);
    }

    function warga()
    {
        $data = [];
        $data ['templateJudul'] = "Dashboard Warga";
        $data ['dataAkun'] = session()->get(); // Mendapatkan data sesi
        echo view('Warga/v_header', $data);
        echo view('Humas/v_laporan', $data);
        echo view('Admin/v_footer', $data);
    }

    function tambah()
    {
        $data = [];
        $data ['templateJudul'] = "Dashboard Admin";
        echo view('Admin/v_header', $data);
        echo view('Humas/v_tambah_laporan', $data);
        echo view('Admin/v_footer', $data);
    }

    function tambahwarga()
    {
        $data = [];
        $data ['templateJudul'] = "Dashboard Warga";
        echo view('Warga/v_header', $data);
        echo view('Humas/v_tambah_laporan', $data);
        echo view('Admin/v_footer', $data);
    }
}
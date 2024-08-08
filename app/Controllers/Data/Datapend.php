<?php

namespace App\Controllers\Data;

use App\Controllers\BaseController;
use App\Models\AdminWargaModel;

class Datapend extends BaseController
{
    protected $adminwarga;

    protected $dataAkun;
    
    function __construct()
    {
        $session = \Config\Services::session();
        $this->dataAkun = session()->get(); // Menggunakan $session untuk mengambil data sesi
        $akun = [
            'level' => $this->dataAkun['level'] // Jika level ada dalam data akun
        ];
        $session->set($akun); // Menggunakan $session untuk mengatur data sesi

        $this->adminwarga = new AdminWargaModel(); // Gunakan $this untuk mengakses variabel di tingkat kelas
    }
    
    public function index()
    {
        $data = [];
        $data ['dataAkun'] = session()->get(); // Mendapatkan data sesi
        $data ['adminwarga'] = $this->adminwarga->findAll();

        // Periksa jenis pengguna yang masuk berdasarkan session login
        if ($_SESSION['level'] === 'admin') {
            $data ['templateJudul'] = "Dashboard Admin";
            echo view('Admin/v_header', $data);
        } elseif ($_SESSION['level'] === 'warga') {
            $data ['templateJudul'] = "Dashboard Warga";
            echo view('Warga/v_header', $data);
        }

        echo view('Data/v_dp', $data);
        echo view('Admin/v_footer', $data);
    }

    public function tambah()
    {
        $data = [];
        
        // Periksa jenis pengguna yang masuk berdasarkan session login
        if ($_SESSION['level'] === 'admin') {
            $data ['templateJudul'] = "Dashboard Admin";
            echo view('Admin/v_header', $data);
        } elseif ($_SESSION['level'] === 'warga') {
            $data ['templateJudul'] = "Dashboard Warga";
            echo view('Warga/v_header', $data);
        }

        echo view('Data/v_tambah_dp', $data);
        echo view('Admin/v_footer', $data);
    }

    function tambahdb()
    {
        $data = [
            'nm_warga' => $this->request->getPost('nm_warga'),
            'nkk' => $this->request->getPost('nkk'),
            'nik' => $this->request->getPost('nik'),
            'tpt_lahir' => $this->request->getPost('tpt_lahir'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'jk' => $this->request->getPost('jk'),
            'gol_darah' => $this->request->getPost('gol_darah'),
            'alamat' => $this->request->getPost('alamat'),
            'agama' => $this->request->getPost('agama'),
            'status' => $this->request->getPost('status'),
            'telp' => $this->request->getPost('telp'),
            'email' => $this->request->getPost('email'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'id_username' =>session()->get('akun_username'),
        ];

        $this->adminwarga->save($data);

        return redirect()->to(site_url('data/penduduk'));
    }

    public function edit($id_warga = null)  
    {
        $data = [];
        $data ['adminwarga'] = $this->adminwarga->find($id_warga);
        $data ['templateJudul'] = "Edit Data";

        // Periksa jenis pengguna yang masuk berdasarkan session login
        if ($_SESSION['level'] === 'admin') {
            echo view('Admin/v_header', $data);
        } elseif ($_SESSION['level'] === 'warga') {
            echo view('Warga/v_header', $data);
        }

        echo view('Data/v_edit_dp', $data);
        echo view('Admin/v_footer', $data);
    }

    public function update($id_warga = null)
    {
        $data = [
            'nm_warga' => $this->request->getPost('nm_warga'),
            'nkk' => $this->request->getPost('nkk'),
            'nik' => $this->request->getPost('nik'),
            'tpt_lahir' => $this->request->getPost('tpt_lahir'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'jk' => $this->request->getPost('jk'),
            'gol_darah' => $this->request->getPost('gol_darah'),
            'alamat' => $this->request->getPost('alamat'),
            'agama' => $this->request->getPost('agama'),
            'status' => $this->request->getPost('status'),
            'telp' => $this->request->getPost('telp'),
            'email' => $this->request->getPost('email'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'id_username' =>session()->get('akun_username'),
        ];
        $this->adminwarga->update($id_warga, $data);

        return redirect()->to(site_url('data/penduduk'));
    }

    public function delete($id_warga = null) 
    {
        $data = [];
        $this->adminwarga->delete($id_warga);

        return redirect()->to(site_url('data/penduduk'));
    }

    public function semua()
    {   $data = [];
        $data['adminwarga'] = $this->adminwarga->findAll();
        $data ['templateJudul'] = "Semua Data";
        
        echo view('Admin/v_header', $data);
        echo view('Data/v_all_data', $data);
        echo view('Admin/v_footer', $data);
    }
}
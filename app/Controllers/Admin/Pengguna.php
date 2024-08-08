<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Pengguna extends BaseController
{
    protected $user;

    function __construct()
    {
        $this->user = new UserModel();
    }

    public function index()
    {
        $data = [];
        $data ['templateJudul'] = "Dashboard Admin";
        $data['user'] = $this->user->findAll();
        echo view('Admin/v_header', $data);
        echo view('Admin/v_pengguna', $data);
        echo view('Admin/v_footer', $data);
    }

    public function tambah()
    {
        $data = [];
        $data ['templateJudul'] = "Dashboard Admin";
        echo view('Admin/v_header', $data);
        echo view('Admin/v_tambah_pengguna', $data);
        echo view('Admin/v_footer', $data);
    }

    public function tambahdb()
    {
        $username = $this->request->getPost('username');

        // Periksa keberadaan username dalam database
        $existingUser = $this->user->where('username', $username)->first();
    
        if ($existingUser) {
            // Jika username sudah ada, tampilkan pesan kesalahan
            session()->setFlashdata('error', 'Username sudah digunakan. Silakan pilih username lain.');
            return redirect()->to(site_url('admin/tambah pengguna'));
        }
    
        // Jika username belum ada, simpan data pengguna ke database
        $data = [
            'username' => $username,
            'password' => $this->request->getPost('password'),
            'email' => $this->request->getPost('email'),
            'level' => $this->request->getPost('level'),
        ];
    
        $this->user->save($data);
    
        return redirect()->to(site_url('admin/pengguna'));
    }

    public function edit($id = null) 
    {
        $data = [];
        $data ['user'] = $this->user->find($id);
        $data ['templateJudul'] = "Edit Pengguna";

        echo view('Admin/v_header', $data);
        echo view('Admin/v_edit_pengguna', $data);
        echo view('Admin/v_footer', $data);
    }

    public function update($id = null)
    {
        $data = [
            'username' =>  $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'email' => $this->request->getPost('email'),
            'level' => $this->request->getPost('level'),
        ];
        
        $existingData = $this->user->where('id', $id)->first();

        if ($existingData) {
            // Data already exists, perform update
            $this->user->update($id, $data);
        } else {
            // Data does not exist, perform insert
            $this->user->insert($data);
        }

        return redirect()->to(site_url('admin/pengguna'));
    }

    public function delete($id = null) 
    {
        $data = [];
        $this->user->delete($id);

        return redirect()->to(site_url('admin/pengguna'));
    }
}
<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;


class Admin extends BaseController
{
    protected $m_admin;
    function __construct()
    {
        $this->m_admin = new UserModel();
        $this->validation = \Config\Services::validation();
        helper("cookie");
        helper("global_fungsi_helper");
    }

    public function login()
    {
        if (get_cookie('cookie_username') && get_cookie('cookie_password')) {
            $username = get_cookie('cookie_username');
            $password = get_cookie('cookie_password');

            $dataAkun = $this->m_admin->getData($username);
            if ($password != $dataAkun['password']) {
                $err[] = "Akun yang kamu masukkan tidak sesuai";
                return redirect()->to('admin/login');
            }

            $akun = [
                'akun_username' => $username,
                'akun_email' => $dataAkun['email']
            ];
            session()->set($akun);
            return redirect()->to('admin/sukses');
        }

        $data = [];
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Username harus diisi'
                    ]
                ],
                'password' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Password harus diisi'
                    ]
                ]
            ];
            if (!$this->validate($rules)) {
                session()->setFlashdata("warning", $this->validation->getErrors());
                return redirect()->to("admin/login");
            }

            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $remember_me = $this->request->getVar('remember');

            $dataAkun = $this->m_admin->getData($username);
            if ($password != $dataAkun['password']) {
                $err[] = "Akun yang kamu masukkan tidak sesuai";
                session()->setFlashdata('username', $username);
                session()->setFlashdata('warning', $err);
                return redirect()->to('admin/login');
            }
            
            if ($remember_me == 'true') {
                set_cookie("cookie_username", $username, 3600 * 24 * 30);
                set_cookie("cookie_password", $dataAkun['password'], 3600 * 24 * 30);
            }


            $akun = [
                'akun_username' => $dataAkun['username'],
                'akun_email' => $dataAkun['email'],
                'level' => $dataAkun['level'] // Jika level ada dalam data akun
            ];
            session()->set($akun);
            return redirect()->to("admin/sukses")->withCookies();
        }
        return view ("Admin/v_login", $data);
    }

    function sukses()
    {
        $dataAkun = session()->get(); // Mendapatkan data akun dari sesi

        if (isset($dataAkun['akun_username'])) {
            // Jika login berhasil, arahkan ke dashboard yang sesuai dengan peran pengguna
            if (isset($dataAkun['level']) && $dataAkun['level'] == 'warga') {
                return redirect()->to('warga/dashboard');
            } elseif (isset($dataAkun['level']) && $dataAkun['level'] == 'admin') {
                return redirect()->to('admin/dashboard');
            }
        } else {
            return redirect()->to('admin/login'); // Redirect ke halaman login jika tidak ada data akun
        }
    }

    function logout()
    {
        delete_cookie("cookie_username");
        delete_cookie("cookie_password");
        session()->destroy();
        if (session()->get('akun_username') != '') {
            session()->setFlashdata("success", "Anda berhasil logout");
        }
        return view("admin/v_login");
    }

} 
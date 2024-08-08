<?php

namespace App\Controllers\Humas;

use App\Controllers\BaseController;
use App\Models\HumasBeritaModel;


class Berita extends BaseController
{
    function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->m_berita = new HumasBeritaModel();
    }

    function index()
    {
        $data = [];
        $data ['templateJudul'] = "Dashboard Admin";
        echo view('Admin/v_header', $data);
        echo view('Humas/v_berita', $data);
        echo view('Admin/v_footer', $data);
    }
    function tambah()
    {
        $data = [];

        if ($this->request->getMethod() == 'post') {
            $data = $this->request->getVar(); #setiap yang diinputkan akan dikembalikan ke view
            $aturan = [
                'judul' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Judul Berita harus diisi'
                    ],
                ],
                'berita' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Deskripsi Berita harus diisi'
                    ],
                ],
                'gambar' => [
                    'rules' => 'is_image[gambar]',
                    'errors' => [
                        'is_image' => 'Hanya gambar yang diperbolehkan untuk diupload'
                    ]
                ]
            ];
            $file = $this->request->getFile('gambar');
            if (!$this->validate($aturan)) {
                session()->setFlashdata('warning', $this->validation->getErrors());
            } else {
                $gambar = '';
                if ($file->getName()) {
                    $gambar = $file->getRandomName();
                }
                $record = [
                    'judul' => $this->request->getVar('judul'),
                    'tgl' => date('Y-m-d'),
                    'gambar' => $gambar,
                    'berita' => $this->request->getVar('berita'),
                    'status' => $this->request->getVar('status')
                ];
                $aksi = $this->m_berita->insertBerita($record);
            }
        }
        $data ['templateJudul'] = "Dashboard Admin";
        echo view('Admin/v_header', $data);
        echo view('Humas/v_tambah_berita', $data);
        echo view('Admin/v_footer', $data);
    }
}
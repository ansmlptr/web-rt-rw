<?php

namespace App\Controllers\Surat;

use App\Controllers\BaseController;
use App\Models\AdminWargaModel;
use Config\Services;
use FPDF;


class Pengantar extends BaseController
{
    protected $adminwarga;
    
    function __construct()
    {
        $this->session = Services::session();
        $this->dataAkun = $this->session->get(); // Menggunakan $session untuk mengambil data sesi
        $akun = [
            'level' => $this->dataAkun['level'] // Jika level ada dalam data akun
        ];
        $this->session->set($akun); // Menggunakan $session untuk mengatur data sesi
    
        $this->adminwarga = new AdminWargaModel(); // Gunakan $this untuk mengakses variabel di tingkat kelas
        $penduduk = $this->adminwarga->findAll();
    }

    public function index()
    {
        $data = [];
        $id_username = $this->dataAkun['akun_username']; // Mengambil id_username dari data sesi
        $data['penduduk'] = $this->adminwarga->where('id_username', $id_username)->findAll();

        // Periksa jenis pengguna yang masuk berdasarkan session login
        if ($_SESSION['level'] === 'admin') {
            $data ['templateJudul'] = "Dashboard Admin";
            echo view('Admin/v_header', $data);
        } elseif ($_SESSION['level'] === 'warga') {
            $data ['templateJudul'] = "Dashboard Warga";
            echo view('Warga/v_header', $data);
        }

        echo view('Surat/v_supengantar', $data);
        echo view('Admin/v_footer', $data);
    }

    public function downloadPDF($id_warga = null)
    {
        // Menggunakan nilai $penduduk yang sudah diteruskan sebagai ID warga yang dipilih
        $selectedId = $this->adminwarga->find($id_warga);
        
        // Buat file PDF
        $pdf = new FPDF('P','mm', 'A4');
        $pdf->AddPage();
        $pdf->Image('C:\puput\kuliah\semester 4\web scie\ci-web\public\images\Coat_of_arms_of_West_Java.png', 10, 10, 30, 0);
        $pdf->setFont('times', 'B', 16);
        $pdf->cell(210, 6, 'PEMERINTAH KABUPATEN BEKASI', 0, 1, 'C');
        $pdf->setFont('times', 'B', 12);
        $pdf->cell(210, 6, 'RUKUN WARGA RW 026 / RUKUN TETANGGA RT 005', 0, 1, 'C');
        $pdf->cell(210, 6, 'PERUM BEKASI GRIYA ASRI 2 BLOK G', 0, 1, 'C');
        $pdf->cell(210, 6, 'Desa Sumber Jaya Kec.Tambun Selatan Kab.Bekasi JABAR 17519', 0, 1, 'C');

        // Menggambar garis horizontal
        $startX = 40; // Koordinat X awal garis
        $endX = 200; // Koordinat X akhir garis
        $y = $pdf->GetY() + 2; // Menambahkan 2mm dari posisi teks
        $pdf->Line($startX, $y, $endX, $y);

        $pdf->setFont('times', 'B', 16);
        $pdf->cell(180, 20, 'SURAT PENGANTAR', 0, 1, 'C');
        $pdf->cell(210, 1, '', 0, 1);
        $pdf->setFont('times', '', 12);
        $pdf->cell(80, 8, 'Yang betanda tangan di bawah ini pengurus RT 005 Perumahan Griya Asri 2 Blk. G Desa', 0, 1, 'L');
        $pdf->cell(80, 8, 'Sumber Jaya Kecamatan Tambun Selatan Kabupaten Bekasi menerangkan bahwa :', 0, 1, 'L');
        $pdf->cell(100, 2, '', 0, 1);
        $pdf->setFont('times', 'B', 12);

        $pdf->cell(10, 8, '', 0, 0);
        $pdf->cell(20, 8, 'Nama', 0, 0, 'L');
        $pdf->cell(25);
        if ($selectedId !== null && isset($selectedId['nm_warga'])) {
            $pdf->cell(25, 8, ': ' .$selectedId['nm_warga'], 0, 1, 'L');
        } else {
            $pdf->cell(25, 8, ': ', 0, 1, 'L');
        }

        $pdf->cell(10, 8, '', 0, 0);
        $pdf->cell(20, 8, 'Tempat Tanggal Lahir', 0, 0, 'L');   
        $pdf->cell(25);
        if ($selectedId !== null && isset($selectedId['tpt_lahir']) && isset($selectedId['tgl_lahir'])) {
            $formattedDate = date('d/m/Y', strtotime($selectedId['tgl_lahir']));
            $pdf->cell(20, 8, ': ' .$selectedId['tpt_lahir'], 0, 0, 'L');
            $pdf->cell(50, 8, ', ' .$formattedDate, 0, 1, 'L');
        } else {
            $pdf->cell(25, 8, ': ', 0, 1, 'L');
        }

        $pdf->cell(10, 8, '', 0, 0);
        $pdf->cell(20, 8, 'Jenis Kelamin', 0, 0, 'L');
        $pdf->cell(25);
        if ($selectedId !== null && isset($selectedId['jk'])) {
            $pdf->cell(25, 8, ': ' .$selectedId['jk'], 0, 1, 'L');
        } else {
            $pdf->cell(25, 8, ': ', 0, 1, 'L');
        }

        $pdf->cell(10, 8, '', 0, 0);
        $pdf->cell(20, 8, 'Alamat', 0, 0, 'L');
        $pdf->cell(25);
        if ($selectedId !== null && isset($selectedId['alamat'])) {
            $pdf->cell(25, 8, ': ' .$selectedId['alamat'], 0, 1, 'L');
        } else {
            $pdf->cell(25, 8, ': ', 0, 1, 'L');
        }

        $pdf->cell(10, 8, '', 0, 0);
        $pdf->cell(20, 8, 'Agama', 0, 0, 'L');
        $pdf->cell(25);
        if ($selectedId !== null && isset($selectedId['agama'])) {
            $pdf->cell(25, 8, ': ' .$selectedId['agama'], 0, 1, 'L');
        } else {
            $pdf->cell(25, 8, ': ', 0, 1, 'L');
        }

        $pdf->cell(10, 8, '', 0, 0);
        $pdf->cell(20, 8, 'Pekerjaan', 0, 0, 'L');
        $pdf->cell(25);
        if ($selectedId !== null && isset($selectedId['pekerjaan'])) {
            $pdf->cell(25, 8, ': ' .$selectedId['pekerjaan'], 0, 1, 'L');
        } else {
            $pdf->cell(25, 8, ': ', 0, 1, 'L');
        }

        $pdf->cell(10, 8, '', 0, 0);
        $pdf->cell(20, 8, 'NO. KTP/KK', 0, 0, 'L');
        $pdf->cell(25);
        if ($selectedId !== null && isset($selectedId['nik'])) {
            $pdf->cell(25, 8, ': ' .$selectedId['nik'], 0, 1, 'L');
        } else {
            $pdf->cell(25, 8, ': ', 0, 1, 'L');
        }

        $pdf->cell(10, 8, '', 0, 0);
        $pdf->cell(20, 8, 'Maksud dan Tujuan', 0, 0, 'L');
        $pdf->cell(25);
        $pdf->cell(25, 8, ':', 0, 1, 'L');

        $pdf->cell(10, 8, '', 0, 0);
        $pdf->cell(20, 8, 'Lampiran', 0, 0, 'L');
        $pdf->cell(25);
        $pdf->cell(25, 8, ':', 0, 1, 'L');

        $pdf->cell(10, 8, '', 0, 0);
        $pdf->cell(20, 8, 'Nomor', 0, 0, 'L');
        $pdf->cell(25);
        $pdf->cell(25, 8, ':', 0, 1, 'L');

        $pdf->cell(10, 8, '', 0, 0);
        $pdf->cell(20, 8, 'Tanggal', 0, 0, 'L');
        $pdf->cell(25);
        $pdf->cell(25, 8, ': ' .date('d/m/Y'), 0, 1, 'L');

        $pdf->cell(100, 5, '', 0, 1);
        $pdf->setFont('times', '', 12);
        $pdf->cell(80, 8, 'Demikian Surat Pengantar ini dibuat dan dipergunakan sesuai dengan Maksud dan Tujuan-nya', 0, 1, 'L');

        $pdf->cell(100, 10, '', 0, 1);
        $pdf->cell(80, 8, 'Mengetahui', 0, 0, 'L');
        $pdf->cell(25);
        $pdf->cell(80, 8, 'Bekasi, ' .date('d/m/Y'), 0, 1, 'L');

        $pdf->cell(100, 2, '', 0, 1);
        $pdf->cell(80, 8, 'Ketua RW 026', 0, 0, 'L');
        $pdf->cell(25);
        $pdf->cell(80, 8, 'Ketua RT 05 RW 026', 0, 1, 'L');

        $pdf->cell(100, 20, '', 0, 1);
        $pdf->cell(80, 8, 'Muhlasin,S.Ag', 0, 0, 'L');
        $pdf->cell(25);
        $pdf->cell(80, 8, 'Basrudin', 0, 1, 'L');


        $pdf->output(); // Menyimpan file dengan nama 'surat.pdf'
    }
}
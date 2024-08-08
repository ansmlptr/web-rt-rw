<?php

namespace App\Models;

use CodeIgniter\Model;

class HumasBeritaModel extends Model
{
    protected $table = 'humas_berita';
    protected $primaryKey = 'id_berita';
    protected $allowedFields = [
        'judul', 'tgl', 'gambar', 'berita', 'status'
    ];
    protected $useAutoIncrement = true;

    function insertBerita($data)
    {
        $builder = $this->table($this->table);

        $aksi = null; // Inisialisasi variabel $aksi
        
        if (isset($data['id_berita'])) {
            $aksi = $builder->insert($data);
            $id = $data['id_berita'];
        }

        if ($aksi) {
            return $id;
        } else {

            $errors = $this->db->error();
            print_r($errors); // Tampilkan pesan error

            return false;
        }
    }

    // public function adminWarga()
    // {
    //     return $this->belongsTo(AdminWargaModel::class, 'id_admin');
    // }
}

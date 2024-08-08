<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminWargaModel extends Model
{
    protected $table = 'admin_warga';
    protected $primaryKey = 'id_warga';
    protected $allowedFields = [
        'nm_warga', 'nkk', 'nik', 'tpt_lahir', 'tgl_lahir', 'jk', 'gol_darah',
        'alamat', 'agama', 'status', 'pekerjaan', 'telp', 'email',
        'id_username'
    ];

    protected $useAutoIncrement = true;

    public function user()
    {
        return $this->belongsTo(UserModel::class, 'id_username');
    }

    public function getDataPenduduk()
    {
        return $this->findAll();
    }
}

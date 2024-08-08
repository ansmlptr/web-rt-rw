<?php

namespace App\Models;

use CodeIgniter\Model;

class KeuanganMasukModel extends Model
{
    protected $table = 'keuangan_masuk';
    protected $primaryKey = 'id_uangmasuk';
    protected $allowedFields = [
        'tgl', 'ket', 'jumlah', 'id_admin'
    ];
    protected $useAutoIncrement = true;

    public function adminWarga()
    {
        return $this->belongsTo(AdminWargaModel::class, 'id_admin');
    }
}

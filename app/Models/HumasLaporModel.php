<?php

namespace App\Models;

use CodeIgniter\Model;

class HumasLaporModel extends Model
{
    protected $table = 'humas_lapor';
    protected $primaryKey = 'id_lapor';
    protected $allowedFields = [
        'nm_warga', 'tgl', 'jenis', 'uraian', 'status', 'id_user'
    ];
    protected $useAutoIncrement = true;

    public function user()
    {
        return $this->belongsTo(UserModel::class, 'id_user');
    }
}

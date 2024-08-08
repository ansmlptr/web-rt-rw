<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'username', 'password', 'email', 'level'
    ];
    protected $useAutoIncrement = true;

    public function getData($parameter)
    {
        $builder = $this->table($this->table);
        $builder->where('username', $parameter)
                ->orWhere('email', $parameter);
        $query = $builder->get();
        return $query->getRowArray();
    }

    public function updateData($data)
    {
        $builder = $this->table($this->table);
        if ($builder->save($data)) {
            return true;
        } else {
            return false;
        }
    }
}

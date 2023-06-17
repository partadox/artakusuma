<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_experience extends Model
{
    protected $table      = 'tb_experience';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'year', 'description'];

    public function list()
    {
        return $this->table('tb_experience')
            ->orderBy('id', 'DESC')
            ->get()->getResultArray();
    }

}

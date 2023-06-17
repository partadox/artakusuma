<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_publication extends Model
{
    protected $table      = 'tb_publication';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'event', 'link'];

    public function list()
    {
        return $this->table('tb_publication')
            ->orderBy('id', 'DESC')
            ->get()->getResultArray();
    }

}

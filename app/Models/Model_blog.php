<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_blog extends Model
{
    protected $table      = 'tb_blog';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'category', 'date', 'cover', 'content'];

    public function list()
    {
        return $this->table('tb_blog')
            ->orderBy('id', 'DESC')
            ->get()->getResultArray();
    }

}

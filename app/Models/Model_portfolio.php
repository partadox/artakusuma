<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_portfolio extends Model
{
    protected $table      = 'tb_portfolio';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'category', 'cover', 'content'];

    public function list()
    {
        return $this->table('tb_portfolio')
            ->orderBy('id', 'DESC')
            ->get()->getResultArray();
    }

    public function list_category()
    {
        return $this->table('tb_portfolio')
            ->select('category')
            ->orderBy('category', 'ASC')
            ->distinct()
            ->get()->getResultArray();
    }

}

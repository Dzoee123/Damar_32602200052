<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMovie extends Model
{
    protected $table = 'movie_list';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'tahun', 'genre', 'sutradara', 'deskripsi', 'poster', 'backdrop'];

    public function tampil_data()
    {
        return $this->findAll();
    }
    
    public function tampil_detail($where)
    {
        return $this->where($where)->first();
    }

    public function input_data($data)
    {
        return $this->insert($data);
    }

    public function edit_data($id, $data)
    {
        return $this->update($id, $data);
    }

    public function hapus_data($where)
    {
        return $this->where($where)->delete();
    }
}

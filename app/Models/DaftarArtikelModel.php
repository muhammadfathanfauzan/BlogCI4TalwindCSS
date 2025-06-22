<?php namespace App\Models;

use CodeIgniter\Model;

class DaftarArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'kategori', 'created_at', 'filename'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    
}

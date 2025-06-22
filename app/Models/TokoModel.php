<?php

namespace App\Models;

use CodeIgniter\Model;

class TokoModel extends Model
{
    protected $table = 'toko';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nama_toko', 'alamat', 'kontak', 'status'];
    protected $useTimestamps = false;
}

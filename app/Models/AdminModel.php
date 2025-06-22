<?php
namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin_blog';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'email', 'password'];
}

<?php namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model {
    protected $table = 'categories';

    public function countAllCategories() {
        return $this->countAllResults();
    }
}

<?php namespace App\Models;

use CodeIgniter\Model;

class CommentModel extends Model {
    protected $table = 'comments';

    public function countAllComments() {
        return $this->countAllResults();
    }
}

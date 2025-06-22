<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTokoTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => ['type' => 'INT', 'auto_increment' => true],
            'nama_toko'  => ['type' => 'VARCHAR', 'constraint' => 100],
            'alamat'     => ['type' => 'TEXT'],
            'kontak'     => ['type' => 'VARCHAR', 'constraint' => 20],
            'status'     => ['type' => 'ENUM("aktif","nonaktif")', 'default' => 'aktif'],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('toko');
    }

    public function down()
    {
        $this->forge->dropTable('toko');
    }
}

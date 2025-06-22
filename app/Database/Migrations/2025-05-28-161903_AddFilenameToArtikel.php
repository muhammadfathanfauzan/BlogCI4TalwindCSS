<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddFilenameToArtikel extends Migration
{
    public function up()
    {
        $fields = [
            'filename' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
                'after' => 'kategori' // letak kolom setelah kategori
            ],
        ];
        $this->forge->addColumn('artikel', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('artikel', 'filename');
    }
}

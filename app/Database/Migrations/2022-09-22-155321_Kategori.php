<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kategori extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'    => ['type' => 'int', 'constraint' => 10, 'unsigned' => true, 'auto_increment' => true],
            'kategori'  => ['type' => 'varchar', 'constraint' => 100]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('Kategori');
    }

    public function down()
    {
        $this->forge->dropTable('Kategori');
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Arsip extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'    => ['type' => 'int', 'constraint' => 10, 'unsigned' => true, 'auto_increment' => true],
            'nama'  => ['type' => 'varchar', 'constraint' => 225, 'null' => true],

        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('arsip');
    }

    public function down()
    {
        $this->forge->dropTable('arsip');
    }
}

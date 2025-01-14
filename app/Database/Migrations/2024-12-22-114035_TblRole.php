<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblRole extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_role' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'jenis_role' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
        ]);
        $this->forge->addPrimaryKey('id_role');
        $this->forge->createTable('tbl_role');
    }

    public function down()
    {
        //
    }
}

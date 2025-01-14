<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'password' => [
                'type' => 'varchar',
                'constraint' => 20,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'index' => [
                'type' => 'INT',
                'constraint' => 15,
            ],
            'id_role' => [
                'type' => 'int',
                'constraint' => 1,
            ],
        ]);
        $this->forge->addPrimaryKey('id_user');
        $this->forge->createTable('tbl_user');
    }

    public function down()
    {
        //
    }
}

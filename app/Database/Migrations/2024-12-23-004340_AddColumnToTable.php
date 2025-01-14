<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumnToTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('tbl_user', [
            'index' => [
                'type'       => 'INT',
                'constraint' => '15',
                'after'      => 'id_role' // Kolom baru akan ditambahkan setelah kolom_lama
            ],
        ]);
    }

    public function down()
    {
        //
    }
}

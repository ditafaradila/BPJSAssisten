<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblBpjskes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_bpjskes' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'jenis_bpjs' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'nomor_KIS' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'kis_anak' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'nik_pekerja' => [
                'type' => 'INT',
                'constraint' => 30,
            ],
            'nik_anak' => [
                'type' => 'INT',
                'constraint' => 30,
            ],
            'nik_ortu' => [
                'type' => 'INT',
                'constraint' => 30,
            ],
            'no_hp' => [
                'type' => 'int',
                'constraint' => 15,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'index' => [
                'type' => 'int',
                'constraint' => 10,
            ],
            'nama_pekerja' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'jenis_layanan' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'lampiran' => [
                'type' => 'VARCHAR',
                'constraint' => 1000
            ],
            'tanggal' => [
                'type' => 'DATE'
            ],
            'sla' => [
                'type' => 'INT',
                'constraint' => 2
            ],
            'faskes' => [
                'type' => 'VARCHAR',
                'constraint' => 30
            ],
            'note' => [
                'type' => 'VARCHAR',
                'constraint' => 500
            ],
            'tanggal_approve' => [
                'type' => 'DATE',
            ],
            'approve' => [
                'type' => 'VARCHAR',
                'constraint' => 5
            ],
            'note_petugas' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'approve_by' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'skor_sla' => [
                'type' => 'VARCHAR',
                'constraint' => 15
            ],
            'nomor_bpjs' => [
                'type' => 'VARCHAR',
                'constraint' => 20
            ],
        ]);       
        $this->forge->addPrimaryKey('id_bpjskes');
        $this->forge->createTable('tbl_bpjskes');
    }

    public function down()
    {
        //
    }
}

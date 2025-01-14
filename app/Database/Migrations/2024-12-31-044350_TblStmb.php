<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblStmb extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_stmb' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'tanggal_pengajuan' => [
                'type'       => 'DATE',
            ],
            'no_kit_pekerja' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
            ],
            'nama_pekerja' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'nik_pekerja' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'bisnis_unit' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'divisi' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'departemen' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'no_kit_mandor' => [
                'type' => 'VARCHAR',
                'constraint' => 15
            ],
            'nama_mandor' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'cost_center' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'tanggal_kecelakaan' => [
                'type' => 'DATE',
            ],
            'plkk' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'nama_dokter' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'tanggal_mulai' => [
                'type' => 'DATE',
            ],
            'tanggal_selesai' => [
                'type' => 'DATE',
            ],
            'jumlah_hari' => [
                'type' => 'TINYINT',
                'constraint' => 3
            ],
            'keterangan_skd' => [
                'type' => 'VARCHAR',
                'constraint' => 200
            ],
            'surat_skd' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'bap_k3' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'approve_hrbp' => [
                'type' => 'ENUM',
                'constraint' => ['Yes', 'No', 'Wait'],
                'default' => 'Wait'
            ],
            'approve_hrService' => [
                'type' => 'ENUM',
                'constraint' => ['Yes', 'No', 'Wait'],
                'default' => 'Wait'
            ],
            'approve_klinik' => [
                'type' => 'ENUM',
                'constraint' => ['Yes', 'No', 'Wait'],
                'default' => 'Wait'
            ],
            'approve_atasan' => [
                'type' => 'ENUM',
                'constraint' => ['Yes', 'No', 'Wait'],
                'default' => 'Wait'
            ],
            'upah' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'tanggal_approve_hrbp' => [
                'type' => 'DATE',
            ],
            'tanggal_approve_klinik' => [
                'type' => 'DATE',
            ],
            'tanggal_approve_hrService' => [
                'type' => 'DATE',
            ],
            'tanggal_approve_atasan' => [
                'type' => 'DATE',
            ],
        ]);       
        $this->forge->addPrimaryKey('id_stmb');
        $this->forge->createTable('tbl_stmb');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_stmb');
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class STMB extends Model{
    protected $table            = 'tbl_stmb';
    protected $primaryKey       = 'id_stmb';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_stmb', 'tanggal_pengajuan', 'no_kit_pekerja', 'nama_pekerja', 'nik_pekerja',
     'bisnis_unit', 'divisi', 'departemen', 'no_kit_mandor', 'nama_mandor', 'cost_center', 'tanggal_kecelakaan', 
     'plkk', 'nama_dokter', 'tanggal_mulai', 'tanggal_selesai', 'jumlah_hari', 'keterangan_skd', 'surat_skd', 'bap_k3',
      'approve_hrbp', 'approve_hrService', 'approve_klinik', 'approve_atasan', 'upah', 'tanggal_approve_hrbp',
        'tanggal_approve_klinik', 'tanggal_approve_hrService', 'tanggal_approve_atasan'];

    public function getSTMB(){
        return $this->db->table('tbl_stmb')
        ->where('tbl_stmb.approve_hrService', 'Wait')  // Filter only records where approve = 'Wait'
        ->get()
        ->getResultArray();
    }

    public function admin() {
        return $this->db->table('tbl_stmb')
            ->groupStart()
                ->where('tbl_stmb.approve_hrService', 'Yes')
                ->orWhere('tbl_stmb.approve_hrbp', 'Yes')
                ->orWhere('tbl_stmb.approve_klinik', 'Yes')
            ->groupEnd()
            ->get()
            ->getResultArray();
    }      

    public function getApprove(){
        return $this->db->table('tbl_stmb')
        ->where('tbl_stmb.approve_hrService', 'Yes')  // Filter only records where approve = 'Yes'
        ->where('tbl_stmb.upah', '') 
        ->get()
        ->getResultArray();
    }

    public function approveAtasan(){
        return $this->db->table('tbl_stmb')
        ->where('tbl_stmb.approve_atasan', 'Wait')
        ->where('tbl_stmb.upah !=', '')
        ->get()
        ->getResultArray();
    }

    public function detailRequest($id_stmb){
        return $this->db->table($this->table)
            ->where('tbl_stmb.id_stmb', $id_stmb)
            ->get()
            ->getRowArray();  // Ambil 1 data
    }  
}

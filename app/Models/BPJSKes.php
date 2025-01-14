<?php

namespace App\Models;

use CodeIgniter\Model;

class BPJSKes extends Model{
    protected $table            = 'tbl_bpjskes';
    protected $primaryKey       = 'id_bpjskes';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_bpjskes', 'jenis_bpjs', 'nomor_KIS', 'kis_anak', 'nik_pekerja', 'nik_anak',
     'nik_ortu', 'no_hp', 'email', 'index', 'jenis_layanan', 'lampiran', 'tanggal', 
     'faskes', 'note', 'tanggal_approve', 'approve', 'note_petugas', 'approve_by', 'skor_sla', 'sla', 'nama_pekerja', 'nomor_bpjs'];

    public function getAll(){
        return $this->db->table('tbl_bpjskes')
        ->get()
        ->getResultArray();
    }
    
    public function getBpjsKes(){
        return $this->db->table('tbl_bpjskes')
            ->where('tbl_bpjskes.approve', 'Wait')  // Filter only records where approve = 'Wait'
            ->get()
            ->getResultArray();
    }
    
    public function getBpjsKesApp(){
        return $this->db->table('tbl_bpjskes')
            ->where('tbl_bpjskes.approve', 'Yes')  // Filter only records where approve = 'No'
            ->get()
            ->getResultArray();
    }

    public function detailReqKes($id_bpjskes){
        return $this->db->table($this->table)  // tbl_bpjskes
            ->where('tbl_bpjskes.id_bpjskes', $id_bpjskes)
            ->get()
            ->getRowArray();  // Ambil 1 data
    }

    public function filterBpjsKes($approvalType = null, $month = null) {
        $builder = $this->db->table($this->table);
    
        if (!empty($approvalType)) {
            $builder->where('approve', $approvalType);
        }
    
        if (!empty($month)) {
            $builder->where("DATE_FORMAT(tanggal, '%Y-%m')", $month);  // Gunakan format yang sesuai
        }
    
        return $builder->get()->getResultArray();
    }
    
    
}

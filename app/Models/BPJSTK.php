<?php

namespace App\Models;

use CodeIgniter\Model;

class BPJSTK extends Model{
    protected $table            = 'tbl_bpjstk';
    protected $primaryKey       = 'id_bpjstk';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_bpjstk', 'NIK', 'no_hp', 'email',
     'index', 'jenis_layanan', 'lampiran', 'tanggal'];
}

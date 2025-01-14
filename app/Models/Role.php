<?php

namespace App\Models;

use CodeIgniter\Model;

class Role extends Model
{
    protected $table            = 'tbl_role';
    protected $primaryKey       = 'id_role';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_role', 'jenis_role'];

}

<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table            = 'tbl_user';
    protected $primaryKey       = 'id_user';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_user', 'username', 'password', 'id_role', 'nama', 'index'];

    public function login($username, $password){
        $user = $this->db->table('tbl_user')
            ->where('username', $username)
            ->where('password', $password)
            ->get()
            ->getRowArray();
        return $user;
    }

    public function getAll(){
        return $this->db->table('tbl_user')
        ->join('tbl_role', 'tbl_role.id_role = tbl_user.id_role')
        ->get()
        ->getResultArray();
    }

}

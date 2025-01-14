<?php

namespace App\Controllers;

use App\Models\User;

class Home extends BaseController
{
    public function index(): string
    {
        return view('login');
    }

    public function login(){
        $session = session();
        $userModel = new User();
    
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
    
        // Cari user berdasarkan username
        $user = $userModel->where('username', $username)->first();
    
        if ($user) {
            session()->set([
                'logged_in' => true,
                'username' => $username,
                'nama' => $user['nama'],
                'id_role' => $user['id_role'],
                'index' => $user['index']
            ]);
            return redirect()->to(base_url('/dashboard'));
        } else {
            return redirect()->back()->with('error', 'Username tidak ditemukan.');
        }
    }
    

    public function logout(){
        session()->destroy();
        $data = [
            'title' => 'Logout',
        ];
        return redirect()->to(base_url('/'));
    }

    public function storeAkun(){
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required|is_unique[tbl_user.username]',
            'nama'     => 'required',
            'index'    => 'required',
            'password' => 'required|min_length[6]',
        ]);
    
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->with('error', $validation->getErrors());
        }
    
        // Cek apakah index sudah ada
        $userModel = new User();
        $existingUser = $userModel->where('index', $this->request->getPost('index'))->first();
    
        if ($existingUser) {
            return redirect()->back()->with('error', 'Akun dengan index tersebut sudah ada.');
        }
    
        // Ambil data dari form
        $data = [
            'username' => $this->request->getPost('username'),
            'nama'     => $this->request->getPost('nama'),
            'index'    => $this->request->getPost('index'),
            'password' => $this->request->getPost('password'),
            'id_role'  => $this->request->getPost('id_role'), // Default 1
        ];
    
        // Simpan ke database
        $userModel->insert($data);
    
        // Redirect dengan pesan sukses
        return redirect()->to('/')->with('success', 'Akun berhasil dibuat.');
    }
}

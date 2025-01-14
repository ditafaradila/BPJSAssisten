<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\BPJSKes;
use App\Models\Role;
use App\Models\User;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    public function index(){
        $accountModel = new User();
        $account = $accountModel->getAll();
        $roleModel = new Role();
        $roles = $roleModel->findAll();

        $data = [
            'title' => 'User',
            'account' => $account,
            'roles' => $roles
        ];
        return view('pages/account', $data);
    }

    public function updateAkun($id_user){
        $accountModel = new User();

        $data = [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'nama' => $this->request->getPost('nama'),
            'index' => $this->request->getPost('index'),
            'id_role' => $this->request->getPost('id_role'),
        ];

        $accountModel->update($id_user, $data);
        return redirect()->to('/account');    
    }

    public function hapusAkun($id_user){
        $accountModel = new User();
        $accountModel->delete($id_user);

        return redirect()->to('/account');
    }
}

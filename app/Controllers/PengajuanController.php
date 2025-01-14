<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PengajuanController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Request',
        ];
        return view('pages/pengajuan', $data);
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BPJSKes;
use App\Models\STMB;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function index()
    {
        $bpjskesModel = new BPJSKes();
        $request = $bpjskesModel->getBpjsKes();
        $approve = $bpjskesModel->getBpjsKesApp();
        $stmbModel = new STMB();
        $stmb = $stmbModel->getSTMB();
        $stmbApprove = $stmbModel->getApprove();
        $stmbAdmin = $stmbModel->admin();
        $approveAtasan = $stmbModel->approveAtasan();

        $data = [
            'title' => 'Dashboard',
            'request' => $request,
            'approve' => $approve,
            'stmb' => $stmb,
            'stmbApprove' => $stmbApprove,
            'stmbAdmin' => $stmbAdmin,
            'hrbpklinik' => $stmbAdmin,
            'approveAtasan' => $approveAtasan,
        ];
        return view('pages/dashboard', $data);
    }

    public function indexx(){
        $bpjskesModel = new BPJSKes();
        $request = $bpjskesModel->getBpjsKes();
        $approve = $bpjskesModel->getBpjsKesApp();

        $data = [
            'title' => 'Dashboard',
            'request' => $request,
            'approve' => $approve
        ];
        return view('pages/dashboardPekerja', $data);
    }
}

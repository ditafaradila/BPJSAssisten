<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BPJSKes;
use CodeIgniter\HTTP\ResponseInterface;

class BPJSKesController extends BaseController{
    public function storeBpjskes(){
        $BpjskesModel = new BPJSKes();
        $dataBerkas = $this->request->getFile('lampiran');
        $fileName = $dataBerkas->getName();

        // Validasi ekstensi file
        $allowedExtensions = ['png', 'jpeg', 'jpg', 'pdf'];
        $fileExt = $dataBerkas->getClientExtension();
        if (!in_array($fileExt, $allowedExtensions)) {
            return redirect()->to('/produk')->with('error', 'Ekstensi file harus PDF, PNG, JPEG, atau JPG!');
        }

        $BpjskesModel->insert([
            'id_bpjskes' => $this->request->getPost('id_bpjskes'),
            'index' => $this->request->getPost('index'),
            'nomor_KIS' => $this->request->getPost('nomor_KIS'),
            'nik_anak' => $this->request->getPost('nik_anak'),
            'faskes' => $this->request->getPost('faskes'),
            'jenis_layanan' => $this->request->getPost('jenis_layanan'),
            'tanggal' => $this->request->getPost('tanggal'),
            'lampiran' => $fileName,
            'note' => $this->request->getPost('note'),
        ]);

        $dataBerkas->move('lampiran', $fileName);
        session()->setFlashdata('success', 'Foto Berhasil diupload');
        return redirect()->to('dashboard');
    }

    public function detailRequest($id_bpjskes){
        $BpjskesModel = new BPJSKes();
        $request = $BpjskesModel->detailReqKes($id_bpjskes);  // Panggil method kustom
    
        if (!$request) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }
    
        $data = [
            'title' => 'Detail BPJS Kesehatan',
            'request' => $request,
        ];
    
        return view('pages/detailReqKes', $data);
    }
    
}

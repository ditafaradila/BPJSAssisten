<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BPJSKes;
use CodeIgniter\HTTP\ResponseInterface;

class BPJSKesController extends BaseController
{
    public function storeBpjskes()
    {
        $BpjskesModel = new BPJSKes();
        $dataBerkas = $this->request->getFile('lampiran');
        $fileName = $dataBerkas->getName();

        // Validasi ekstensi file
        $allowedExtensions = ['png', 'jpeg', 'jpg', 'pdf'];
        $fileExt = $dataBerkas->getClientExtension();
        if (!in_array($fileExt, $allowedExtensions)) {
            return redirect()->to('/dashboardPekerja')->with('error', 'Ekstensi file harus PDF, PNG, JPEG, atau JPG!');
        }

        $BpjskesModel->insert([
            'id_bpjskes' => $this->request->getPost('id_bpjskes'),
            'index' => $this->request->getPost('index'),
            'nama_pekerja' => $this->request->getPost('nama_pekerja'),
            'no_hp' => $this->request->getPost('no_hp'),
            'nomor_KIS' => $this->request->getPost('nomor_KIS'),
            'nik_anak' => $this->request->getPost('nik_anak'),
            'faskes' => $this->request->getPost('faskes'),
            'jenis_layanan' => $this->request->getPost('jenis_layanan'),
            'tanggal' => $this->request->getPost('tanggal'),
            'lampiran' => $fileName,
            'note' => $this->request->getPost('note'),
            'approve' => $this->request->getPost('approve'),
            'sla' => $this->request->getPost('sla'),
            'jenis_bpjs' => $this->request->getPost('jenis_bpjs'),
        ]);

        $dataBerkas->move('lampiran', $fileName);
        session()->setFlashdata('modal', true);
        session()->setFlashdata(
            'modalMessage',
            '<h6>Request Anda telah masuk 😊</h6>
            <p style="color: #6c757d; font-size: 14px; margin-top: 5px;">
            Mohon tunggu selama <b>2 hari</b>.
            </p>'
        );
        return redirect()->to('dashboardPekerja');
    }

    public function storeAktivasi()
    {
        $BpjskesModel = new BPJSKes();
        $dataBerkas = $this->request->getFile('lampiran');
        $fileName = $dataBerkas->getName();

        // Validasi ekstensi file
        $allowedExtensions = ['png', 'jpeg', 'jpg', 'pdf'];
        $fileExt = $dataBerkas->getClientExtension();
        if (!in_array($fileExt, $allowedExtensions)) {
            return redirect()->to('/dashboardPekerja')->with('error', 'Ekstensi file harus PDF, PNG, JPEG, atau JPG!');
        }

        $BpjskesModel->insert([
            'id_bpjskes' => $this->request->getPost('id_bpjskes'),
            'index' => $this->request->getPost('index'),
            'nama_pekerja' => $this->request->getPost('nama_pekerja'),
            'no_hp' => $this->request->getPost('no_hp'),
            'nomor_KIS' => $this->request->getPost('nomor_KIS'),
            'nik_anak' => $this->request->getPost('nik_anak'),
            'kis_anak' => $this->request->getPost('kis_anak'),
            'jenis_layanan' => $this->request->getPost('jenis_layanan'),
            'tanggal' => $this->request->getPost('tanggal'),
            'lampiran' => $fileName,
            'note' => $this->request->getPost('note'),
            'approve' => $this->request->getPost('approve'),
            'sla' => $this->request->getPost('sla'),
            'jenis_bpjs' => $this->request->getPost('jenis_bpjs'),
        ]);

        $dataBerkas->move('lampiran', $fileName);
        session()->setFlashdata('modal', true);
        session()->setFlashdata(
            'modalMessage',
            '<h6>Request Anda telah masuk 😊</h6>
            <p style="color: #6c757d; font-size: 14px; margin-top: 5px;">
            Mohon tunggu selama <b>2 hari</b>.
            </p>'
        );
        return redirect()->to('dashboardPekerja');
    }

    public function storeBpjskesOrtu()
    {
        $BpjskesModel = new BPJSKes();
        $dataBerkas = $this->request->getFile('lampiran');
        $fileName = $dataBerkas->getName();

        // Validasi ekstensi file
        $allowedExtensions = ['png', 'jpeg', 'jpg', 'pdf'];
        $fileExt = $dataBerkas->getClientExtension();
        if (!in_array($fileExt, $allowedExtensions)) {
            return redirect()->to('/dashboardPekerja')->with('error', 'Ekstensi file harus PDF, PNG, JPEG, atau JPG!');
        }

        $BpjskesModel->insert([
            'id_bpjskes' => $this->request->getPost('id_bpjskes'),
            'index' => $this->request->getPost('index'),
            'nama_pekerja' => $this->request->getPost('nama_pekerja'),
            'no_hp' => $this->request->getPost('no_hp'),
            'nomor_KIS' => $this->request->getPost('nomor_KIS'),
            'nik_ortu' => $this->request->getPost('nik_ortu'),
            'faskes' => $this->request->getPost('faskes'),
            'jenis_layanan' => $this->request->getPost('jenis_layanan'),
            'tanggal' => $this->request->getPost('tanggal'),
            'lampiran' => $fileName,
            'note' => $this->request->getPost('note'),
            'approve' => $this->request->getPost('approve'),
            'sla' => $this->request->getPost('sla'),
            'jenis_bpjs' => $this->request->getPost('jenis_bpjs'),

        ]);

        $dataBerkas->move('lampiran', $fileName);
        session()->setFlashdata('modal', true);
        session()->setFlashdata(
            'modalMessage',
            '<h6>Request Anda telah masuk 😊</h6>
            <p style="color: #6c757d; font-size: 14px; margin-top: 5px;">
            Mohon tunggu selama <b>30 hari</b> karena menunggu dari pihak BPJS.
            </p>'
        );
        return redirect()->to('dashboardPekerja');
    }

    public function storeResetJKN()
    {
        $BpjskesModel = new BPJSKes();

        $BpjskesModel->insert([
            'id_bpjskes' => $this->request->getPost('id_bpjskes'),
            'index' => $this->request->getPost('index'),
            'nama_pekerja' => $this->request->getPost('nama_pekerja'),
            'no_hp' => $this->request->getPost('no_hp'),
            'nik_pekerja' => $this->request->getPost('nik_pekerja'),
            'no_hp' => $this->request->getPost('no_hp'),
            'jenis_layanan' => $this->request->getPost('jenis_layanan'),
            'tanggal' => $this->request->getPost('tanggal'),
            'email' => $this->request->getPost('email'),
            'note' => $this->request->getPost('note'),
            'approve' => $this->request->getPost('approve'),
            'sla' => $this->request->getPost('sla'),
            'jenis_bpjs' => $this->request->getPost('jenis_bpjs'),
        ]);

        session()->setFlashdata('modal', true);
        session()->setFlashdata(
            'modalMessage',
            '<h6>Request Anda telah masuk 😊</h6>
            <p style="color: #6c757d; font-size: 14px; margin-top: 5px;">
            Mohon tunggu selama <b>2 hari</b>.
            </p>'
        );
        return redirect()->to('dashboardPekerja');
    }

    public function storekoreksiBpjskes()
    {
        $BpjskesModel = new BPJSKes();
        $dataBerkas = $this->request->getFileMultiple('lampiran');  // Ambil semua file
        $allowedExtensions = ['png', 'jpeg', 'jpg', 'pdf'];
        $fileNames = [];

        foreach ($dataBerkas as $file) {
            if ($file->isValid() && !$file->hasMoved()) {
                $fileExt = $file->getClientExtension();

                // Validasi ekstensi file
                if (!in_array($fileExt, $allowedExtensions)) {
                    return redirect()->to('/dashboardPekerja')->with('error', 'Ekstensi file harus PDF, PNG, JPEG, atau JPG!');
                }

                $fileName = $file->getName();
                $file->move('lampiran', $fileName);
                $fileNames[] = $fileName;  // Simpan nama file ke array
            }
        }

        // Gabungkan nama file dengan koma
        $lampiranString = implode(',', $fileNames);

        // Simpan data ke database
        $BpjskesModel->insert([
            'id_bpjskes' => $this->request->getPost('id_bpjskes'),
            'index' => $this->request->getPost('index'),
            'nama_pekerja' => $this->request->getPost('nama_pekerja'),
            'no_hp' => $this->request->getPost('no_hp'),
            'nik_pekerja' => $this->request->getPost('nik_pekerja'),
            'jenis_layanan' => $this->request->getPost('jenis_layanan'),
            'tanggal' => $this->request->getPost('tanggal'),
            'lampiran' => $lampiranString,  // Simpan dalam satu kolom
            'note' => $this->request->getPost('note'),
            'approve' => $this->request->getPost('approve'),
            'sla' => $this->request->getPost('sla'),
            'jenis_bpjs' => $this->request->getPost('jenis_bpjs'),
        ]);

        session()->setFlashdata('modal', true);
        session()->setFlashdata(
            'modalMessage',
            '<h6>Request Anda telah masuk 😊</h6>
            <p style="color: #6c757d; font-size: 14px; margin-top: 5px;">
            Mohon tunggu selama <b>7 hari</b>.
            </p>'
        );
        return redirect()->to('dashboardPekerja');
    }

    public function storenonaktifBpjs()
    {
        $BpjskesModel = new BPJSKes();
        $dataBerkas = $this->request->getFileMultiple('lampiran');  // Ambil semua file
        $allowedExtensions = ['png', 'jpeg', 'jpg', 'pdf'];
        $fileNames = [];

        foreach ($dataBerkas as $file) {
            if ($file->isValid() && !$file->hasMoved()) {
                $fileExt = $file->getClientExtension();

                // Validasi ekstensi file
                if (!in_array($fileExt, $allowedExtensions)) {
                    return redirect()->to('/dashboardPekerja')->with('error', 'Ekstensi file harus PDF, PNG, JPEG, atau JPG!');
                }

                $fileName = $file->getName();
                $file->move('lampiran', $fileName);
                $fileNames[] = $fileName;  // Simpan nama file ke array
            }
        }

        // Gabungkan nama file dengan koma
        $lampiranString = implode(',', $fileNames);

        // Simpan data ke database
        $BpjskesModel->insert([
            'id_bpjskes' => $this->request->getPost('id_bpjskes'),
            'index' => $this->request->getPost('index'),
            'nama_pekerja' => $this->request->getPost('nama_pekerja'),
            'no_hp' => $this->request->getPost('no_hp'),
            'no_KIS' => $this->request->getPost('no_KIS'),
            'nomor_bpjs' => $this->request->getPost('nomor_bpjs'),
            'nik_pekerja' => $this->request->getPost('nik_pekerja'),
            'jenis_layanan' => $this->request->getPost('jenis_layanan'),
            'tanggal' => $this->request->getPost('tanggal'),
            'lampiran' => $lampiranString,  // Simpan dalam satu kolom
            'note' => $this->request->getPost('note'),
            'approve' => $this->request->getPost('approve'),
            'sla' => $this->request->getPost('sla'),
            'jenis_bpjs' => $this->request->getPost('jenis_bpjs'),
        ]);

        session()->setFlashdata('modal', true);
        session()->setFlashdata(
            'modalMessage',
            '<h6>Request Anda telah masuk 😊</h6>
            <p style="color: #6c757d; font-size: 14px; margin-top: 5px;">
            Mohon tunggu selama <b>30 hari</b> karena harus menunggu respon dari pihak BPJS.
            </p>'
        );
        return redirect()->to('dashboardPekerja');
    }

    public function storekoreksiBpjstk()
    {
        $BpjskesModel = new BPJSKes();
        $dataBerkas = $this->request->getFileMultiple('lampiran');  // Ambil semua file
        $allowedExtensions = ['png', 'jpeg', 'jpg', 'pdf'];
        $fileNames = [];

        foreach ($dataBerkas as $file) {
            if ($file->isValid() && !$file->hasMoved()) {
                $fileExt = $file->getClientExtension();

                // Validasi ekstensi file
                if (!in_array($fileExt, $allowedExtensions)) {
                    return redirect()->to('/dashboardPekerja')->with('error', 'Ekstensi file harus PDF, PNG, JPEG, atau JPG!');
                }

                $fileName = $file->getName();
                $file->move('lampiran', $fileName);
                $fileNames[] = $fileName;  // Simpan nama file ke array
            }
        }

        // Gabungkan nama file dengan koma
        $lampiranString = implode(',', $fileNames);

        // Simpan data ke database
        $BpjskesModel->insert([
            'id_bpjskes' => $this->request->getPost('id_bpjskes'),
            'index' => $this->request->getPost('index'),
            'nama_pekerja' => $this->request->getPost('nama_pekerja'),
            'no_hp' => $this->request->getPost('no_hp'),
            'nik_pekerja' => $this->request->getPost('nik_pekerja'),
            'jenis_layanan' => $this->request->getPost('jenis_layanan'),
            'tanggal' => $this->request->getPost('tanggal'),
            'lampiran' => $lampiranString,  // Simpan dalam satu kolom
            'note' => $this->request->getPost('note'),
            'approve' => $this->request->getPost('approve'),
            'sla' => $this->request->getPost('sla'),
            'jenis_bpjs' => $this->request->getPost('jenis_bpjs'),
        ]);

        session()->setFlashdata('modal', true);
        session()->setFlashdata(
            'modalMessage',
            '<h6>Request Anda telah masuk 😊</h6>
            <p style="color: #6c757d; font-size: 14px; margin-top: 5px;">
            Mohon tunggu selama <b>30 hari</b> karena menunggu dari pihak BPJS.
            </p>'
        );
        return redirect()->to('dashboardPekerja');
    }

    public function storegabungSaldo()
    {
        $BpjskesModel = new BPJSKes();
        $dataBerkas = $this->request->getFileMultiple('lampiran');  // Ambil semua file
        $allowedExtensions = ['png', 'jpeg', 'jpg', 'pdf'];
        $fileNames = [];

        foreach ($dataBerkas as $file) {
            if ($file->isValid() && !$file->hasMoved()) {
                $fileExt = $file->getClientExtension();

                // Validasi ekstensi file
                if (!in_array($fileExt, $allowedExtensions)) {
                    return redirect()->to('/dashboardPekerja')->with('error', 'Ekstensi file harus PDF, PNG, JPEG, atau JPG!');
                }

                $fileName = $file->getName();
                $file->move('lampiran', $fileName);
                $fileNames[] = $fileName;  // Simpan nama file ke array
            }
        }

        // Gabungkan nama file dengan koma
        $lampiranString = implode(',', $fileNames);

        // Simpan data ke database
        $BpjskesModel->insert([
            'id_bpjskes' => $this->request->getPost('id_bpjskes'),
            'index' => $this->request->getPost('index'),
            'nama_pekerja' => $this->request->getPost('nama_pekerja'),
            'no_hp' => $this->request->getPost('no_hp'),
            'nik_pekerja' => $this->request->getPost('nik_pekerja'),
            'jenis_layanan' => $this->request->getPost('jenis_layanan'),
            'tanggal' => $this->request->getPost('tanggal'),
            'lampiran' => $lampiranString,  // Simpan dalam satu kolom
            'note' => $this->request->getPost('note'),
            'approve' => $this->request->getPost('approve'),
            'sla' => $this->request->getPost('sla'),
            'jenis_bpjs' => $this->request->getPost('jenis_bpjs'),
        ]);

        session()->setFlashdata('modal', true);
        session()->setFlashdata(
            'modalMessage',
            '<h6>Request Anda telah masuk 😊</h6>
            <p style="color: #6c757d; font-size: 14px; margin-top: 5px;">
            Mohon tunggu selama <b>30 hari</b> karena menunggu dari pihak BPJS.
            </p>'
        );
        return redirect()->to('dashboardPekerja');
    }

    public function storeResetJMO()
    {
        $BpjskesModel = new BPJSKes();

        $BpjskesModel->insert([
            'id_bpjskes' => $this->request->getPost('id_bpjskes'),
            'index' => $this->request->getPost('index'),
            'nama_pekerja' => $this->request->getPost('nama_pekerja'),
            'nik_pekerja' => $this->request->getPost('nik_pekerja'),
            'no_hp' => $this->request->getPost('no_hp'),
            'jenis_layanan' => $this->request->getPost('jenis_layanan'),
            'tanggal' => $this->request->getPost('tanggal'),
            'email' => $this->request->getPost('email'),
            'note' => $this->request->getPost('note'),
            'approve' => $this->request->getPost('approve'),
            'sla' => $this->request->getPost('sla'),
            'jenis_bpjs' => $this->request->getPost('jenis_bpjs'),
        ]);

        session()->setFlashdata('modal', true);
        session()->setFlashdata(
            'modalMessage',
            '<h6>Request Anda telah masuk 😊</h6>
            <p style="color: #6c757d; font-size: 14px; margin-top: 5px;">
            Mohon tunggu selama <b>2 hari</b>.
            </p>'
        );
        return redirect()->to('dashboardPekerja');
    }

    public function detailReqKes($id_bpjskes)
    {
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

    public function approveBpjsKes($id_bpjskes)
    {
        $BpjskesModel = new BPJSKes();
        $note_petugas = $this->request->getPost('note_petugas');
        $approve_by = $this->request->getPost('approve_by');
        $tanggal_approve = date('Y-m-d H:i:s');  // Pakai datetime untuk presisi

        // Ambil data pengajuan dan SLA
        $request = $BpjskesModel->find($id_bpjskes);
        $tanggal_pengajuan = $request['tanggal'];
        $sla = $request['sla'];

        // Hitung selisih hari dalam bentuk desimal
        $selisih_hari = (strtotime($tanggal_approve) - strtotime($tanggal_pengajuan)) / (60 * 60 * 24);

        // Hitung skor SLA
        if ($selisih_hari > $sla) {
            $skor_sla = 0;  // Terlambat, skor 0
        } else {
            $persentase = ($selisih_hari / $sla) * 100;

            if ($persentase <= 20) {
                $skor_sla = 5;
            } elseif ($persentase <= 40) {
                $skor_sla = 4;
            } elseif ($persentase <= 60) {
                $skor_sla = 3;
            } elseif ($persentase <= 80) {
                $skor_sla = 2;
            } else {
                $skor_sla = 1;  // 100% tepat waktu
            }
        }


        // Update data
        $data = [
            'approve' => 'Yes',
            'tanggal_approve' => $tanggal_approve,
            'approve_by' => $approve_by,
            'note_petugas' => $note_petugas,
            'skor_sla' => $skor_sla
        ];

        $BpjskesModel->update($id_bpjskes, $data);
        // Prepare WhatsApp message
        $formatted_no_hp = '+62' . ltrim($request['no_hp'], '0');  // Format the phone number
        $nama_pekerja = $request['nama_pekerja'];  // Get the worker's name
        $jenis_layanan = $request['jenis_layanan'];
        $message = "Hai " . $nama_pekerja . "!\nPengajuan layanan " . $jenis_layanan . " anda sudah selesai!";

        // Encode the message to make it URL-safe
        $encoded_message = urlencode($message);

        // Redirect to WhatsApp
        return redirect()->to("https://wa.me/{$formatted_no_hp}?text={$encoded_message}");
    }

    public function rejectBpjsKes($id_bpjskes)
    {
        $BpjskesModel = new BPJSKes();
        $note_petugas = $this->request->getPost('note_petugas');
        $approve_by = $this->request->getPost('approve_by');

        // Ambil data pengajuan dan SLA
        $request = $BpjskesModel->find($id_bpjskes);

        // Update data
        $data = [
            'approve' => 'No',
            'approve_by' => $approve_by,
            'note_petugas' => $note_petugas,
        ];

        $BpjskesModel->update($id_bpjskes, $data);
        // Prepare WhatsApp message
        $formatted_no_hp = '+62' . ltrim($request['no_hp'], '0');  // Format the phone number
        $nama_pekerja = $request['nama_pekerja'];  // Get the worker's name
        $jenis_layanan = $request['jenis_layanan'];
        $message = "Hai " . $nama_pekerja . "!\nPengajuan layanan " . $jenis_layanan . " anda gagal, dengan alasan " . $note_petugas . ". Silakan lakukan pengajuan ulang.";
        // Encode the message to make it URL-safe
        $encoded_message = urlencode($message);

        // Redirect to WhatsApp
        return redirect()->to("https://wa.me/{$formatted_no_hp}?text={$encoded_message}");
    }
}

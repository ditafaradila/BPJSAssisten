<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BPJSKes;
use App\Models\STMB;
use CodeIgniter\HTTP\ResponseInterface;
use PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel\Date;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use TCPDF;

class STMBController extends BaseController
{
    public function index(){
        $stmbModel = new STMB();
        $stmb = $stmbModel->findAll();

        $data = [
            'title' => 'STMB',
            'stmb' => $stmb
        ];
        return view('pages/pengajuanSTMB', $data);
    }

    public function requestSTMB($id_stmb){
        $stmbModel = new STMB();
        $stmb = $stmbModel->detailRequest($id_stmb);

        if (!$stmb) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        $data = [
            'title' => 'Request STMB',
            'stmb' => $stmb,
        ];

        return view('pages/requestSTMB', $data);
    }

    public function requestUpah($id_stmb){
        $stmbModel = new STMB();
        $stmb = $stmbModel->detailRequest($id_stmb);

        if (!$stmb) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        $data = [
            'title' => 'Request STMB',
            'stmb' => $stmb,
        ];

        return view('pages/requestUpah', $data);
    }

    public function approveSTMB($id_stmb){
        $stmbModel = new STMB();
        $data = [
            'approve_hrService' => 'Yes',
            'tanggal_approve_hrService' => date('Y-m-d'),
        ];
        $stmbModel->update($id_stmb, $data);
        return redirect()->to("/dokumenSTMB/$id_stmb");
    }

    public function approveHrbp($id_stmb){
        $stmbModel = new STMB();
        $data = [
            'approve_hrbp' => 'Yes',
            'tanggal_approve_hrbp' => date('Y-m-d'),
        ];
        $stmbModel->update($id_stmb, $data);
        return redirect()->to("/dashboard");
    }

    public function approveKlinik($id_stmb){
        $stmbModel = new STMB();
        $data = [
            'approve_klinik' => 'Yes',
            'tanggal_approve_klinik' => date('Y-m-d'),
        ];
        $stmbModel->update($id_stmb, $data);
        return redirect()->to("/dashboard");
    }

    public function approveAtasan($id_stmb){
        $stmbModel = new STMB();
        $data = [
            'approve_atasan' => 'Yes',
            'tanggal_approve_atasan' => date('Y-m-d'),
        ];
        $stmbModel->update($id_stmb, $data);
        return redirect()->to("/dashboard");
    }

    public function upahSTMB($id_stmb){
        $stmbModel = new STMB();
        $upah = $this->request->getPost('upah');
        $data = [
            'upah' => $upah,
        ];
        $stmbModel->update($id_stmb, $data);
        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }

    public function reportSTMB(){
        $stmbModel = new STMB();
        $stmb = $stmbModel->findAll();

        $data = [
            'title' => 'Report STMB',
            'stmb' => $stmb
        ];
        return view('pages/reportSTMB', $data);
    }

    public function storeSTMB()
    {
        $stmbModel = new STMB();
        $tanggalMulai  = strtotime($this->request->getPost('tanggal_mulai'));
        $tanggalSelesai = strtotime($this->request->getPost('tanggal_selesai'));
        $jumlahHari = round(($tanggalSelesai - $tanggalMulai) / (60 * 60 * 24)) + 1;

        $data = [
            'tanggal_pengajuan' => date('Y-m-d'),
            'no_kit_pekerja'    => $this->request->getPost('no_kit_pekerja'),
            'nama_pekerja'      => $this->request->getPost('nama_pekerja'),
            'nik_pekerja'       => $this->request->getPost('nik_pekerja'),
            'bisnis_unit'       => $this->request->getPost('bisnis_unit'),
            'divisi'            => $this->request->getPost('divisi'),
            'departemen'        => $this->request->getPost('departemen'),
            'no_kit_mandor'     => $this->request->getPost('no_kit_mandor'),
            'nama_mandor'       => $this->request->getPost('nama_mandor'),
            'cost_center'       => $this->request->getPost('cost_center'),
            'tanggal_kecelakaan'=> $this->request->getPost('tanggal_kecelakaan'),
            'plkk'              => $this->request->getPost('plkk'),
            'nama_dokter'       => $this->request->getPost('nama_dokter'),
            'tanggal_mulai'     => $this->request->getPost('tanggal_mulai'),
            'tanggal_selesai'   => $this->request->getPost('tanggal_selesai'),
            'jumlah_hari'       => $jumlahHari,
            'approve_hrbp'      => 'Wait',
            'approve_hrService' => 'Wait',
            'approve_klinik'    => 'Wait',
            'approve_atasan'    => 'Wait',
        ];

        if ($this->request->getFile('surat_skd')->isValid()) {
            $suratSkd = $this->request->getFile('surat_skd');
            $fileName = $suratSkd->getName();
            $suratSkd->move('lampiran', $fileName);
            $data['surat_skd'] = $fileName;
        }

        if ($this->request->getFile('bap_k3')->isValid()) {
            $bapK3 = $this->request->getFile('bap_k3');
            $fileName = $bapK3->getName();
            $bapK3->move('lampiran', $fileName);
            $data['bap_k3'] = $fileName;
        }

        $stmbModel->insert($data);

        return redirect()->to('/dashboard')->with('success', 'Pengajuan STMB berhasil disimpan.');
    }

    public function dokumenSTMB($id_stmb){
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, 'A4', true, 'UTF-8', false);
        // header data
        $pdf->SetPrintHeader(false);
        $pdf->SetPrintFooter(false);
        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        // $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        // $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        $pdf->setFontSubsetting(true);
        // $pdf->SetFont('times', '', 11, '', true);
        $pdf->SetFont('dejavusans', '', 12);

        // Add Page
        $pdf->AddPage();

        $stmbModel = new STMB();
        $stmb = $stmbModel->find($id_stmb);

        $data = [
            'title' => 'STMB',
            'stmb' => $stmb
        ];
        $html = view('pages/dokumenSTMB', $data);

        $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
        $this->response->setContentType('application/pdf');
        $pdf->Output('STMB.pdf', 'I');
    }

    public function downloadExcel()
    {
        $stmbModel = new STMB();
        $stmb = $stmbModel->findAll();
        
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        
        // Judul Laporan
        $sheet->mergeCells('A1:Y1');
        $sheet->setCellValue('A1', 'REPORT STMB');
        $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(16);
        $sheet->getStyle('A1')->getAlignment()->setHorizontal('center');
        
        // Header
        $headers = [
            'A' => 'No Pengajuan',
            'B' => 'Tanggal Pengajuan',
            'C' => 'No KIT Pekerja',
            'D' => 'Nama Pekerja',
            'E' => 'NIK Pekerja',
            'F' => 'Bisnis Unit',
            'G' => 'Divisi',
            'H' => 'Departemen',
            'I' => 'Nomor KIT Mandor',
            'J' => 'Nama Mandor',
            'K' => 'Cost Center',
            'L' => 'Tanggal Kecelakaan',
            'M' => 'PLKK',
            'N' => 'Nama Dokter',
            'O' => 'Tanggal Mulai SKD',
            'P' => 'Tanggal Selesai SKD',
            'Q' => 'Jumlah Hari SKD',
            'R' => 'Keterangan SKD',
            'S' => 'Surat SKD',
            'T' => 'BAP K3',
            'U' => 'Tanggal Approve HRBP',
            'V' => 'Tanggal Approve HR Service',
            'W' => 'Tanggal Approve Klinik',
            'X' => 'Tanggal Approve Atasan',
            'Y' => 'Upah',
        ];
        
        $rowHeader = 3;
        foreach ($headers as $col => $text) {
            $sheet->setCellValue($col . $rowHeader, $text);
            $sheet->getStyle($col . $rowHeader)->getFont()->setBold(true);
            $sheet->getStyle($col . $rowHeader)->getAlignment()->setHorizontal('center');
        }
        
        $row = 4;
        foreach ($stmb as $report) {
            $sheet->setCellValue('A' . $row, $report['id_stmb']);
            $sheet->setCellValue('B' . $row, $report['tanggal_pengajuan']);
            $sheet->setCellValue('C' . $row, $report['no_kit_pekerja']);
            $sheet->setCellValue('D' . $row, $report['nama_pekerja']);
            $sheet->setCellValue('E' . $row, $report['bisnis_unit']);
            $sheet->setCellValue('F' . $row, $report['divisi']);
            $sheet->setCellValue('G' . $row, $report['departemen']);
            $sheet->setCellValue('H' . $row, $report['no_kit_mandor']);
            $sheet->setCellValue('I' . $row, $report['nama_mandor']);
            $sheet->setCellValue('J' . $row, $report['cost_center']);
            $sheet->setCellValue('K' . $row, $report['tanggal_kecelakaan']);
            $sheet->setCellValue('L' . $row, $report['plkk']);
            $sheet->setCellValue('M' . $row, $report['nama_dokter']);
            $sheet->setCellValue('N' . $row, $report['tanggal_mulai']);
            $sheet->setCellValue('O' . $row, $report['tanggal_selesai']);
            $sheet->setCellValue('P' . $row, $report['jumlah_hari']);
            $sheet->setCellValue('Q' . $row, $report['keterangan_skd']);
            $sheet->setCellValue('R' . $row, $report['surat_skd']);
            $sheet->setCellValue('S' . $row, $report['bap_k3']);
            $sheet->setCellValue('U' . $row, $report['tanggal_approve_hrbp']);
            $sheet->setCellValue('V' . $row, $report['tanggal_approve_hrService']);
            $sheet->setCellValue('W' . $row, $report['tanggal_approve_klinik']);
            $sheet->setCellValue('X' . $row, $report['tanggal_approve_atasan']);
            $sheet->setCellValue('Y' . $row, $report['upah']);
            $row++;
        }
        
        foreach (range('A', 'T') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }
        
        $lastRow = $row - 1;
        $styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => '000000'],
                ],
            ],
        ];
        $sheet->getStyle('A3:Y' . $lastRow)->applyFromArray($styleArray);
        
        $sheet->getStyle('A3:Y3')->applyFromArray([
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => ['argb' => '00B050'],
            ],
            'font' => [
                'color' => ['argb' => 'FFFFFF'],
            ],
        ]);
        
        $writer = new Xlsx($spreadsheet);
        $fileName = 'Report_STMB.xlsx';
        
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $fileName . '"');
        header('Cache-Control: max-age=0');
        
        $writer->save('php://output');
        exit();
    }
    
}

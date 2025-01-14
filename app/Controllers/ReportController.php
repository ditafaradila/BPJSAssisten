<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BPJSKes;
use CodeIgniter\HTTP\ResponseInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ReportController extends BaseController
{
    public function index(){
        $bpjskesModel = new BPJSKes();
        $report = $bpjskesModel->getAll();

        $data = [
            'title' => 'Report',
            'report' => $report
        ];
        return view('pages/report', $data);
    }

    public function downloadExcel()
    {
        $model = new BPJSKes();
        
        // Tangkap parameter dari form
        $approvalType = $this->request->getGet('approvalType');
        $month = $this->request->getGet('month');
        
        // Gunakan method filterBpjsKes untuk mendapatkan data yang sudah difilter
        $reports = $model->filterBpjsKes($approvalType, $month);
        
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        
        // Judul Laporan
        $sheet->mergeCells('A1:T1');
        $sheet->setCellValue('A1', 'REPORT LAYANAN');
        $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(16);
        $sheet->getStyle('A1')->getAlignment()->setHorizontal('center');
        
        // Header
        $headers = [
            'A' => 'No Pengajuan',
            'B' => 'Jenis BPJS',
            'C' => 'Jenis Layanan',
            'D' => 'Index Pekerja',
            'E' => 'Nama Pekerja',
            'F' => 'Nomor KIS Pekerja',
            'G' => 'Nomor KIS Anak',
            'H' => 'Nomor NIK Pekerja',
            'I' => 'Nomor NIK Anak',
            'J' => 'Nomor NIK Orang Tua',
            'K' => 'Nomor Handphone',
            'L' => 'Email',
            'M' => 'Tanggal Pengajuan',
            'N' => 'SLA',
            'O' => 'Faskes',
            'P' => 'Note Pengajuan',
            'Q' => 'Tanggal Approve',
            'R' => 'Approve',
            'S' => 'Note Petugas',
            'T' => 'Approve By',
            'U' => 'Skor SLA',
        ];
        
        $rowHeader = 3;
        foreach ($headers as $col => $text) {
            $sheet->setCellValue($col . $rowHeader, $text);
            $sheet->getStyle($col . $rowHeader)->getFont()->setBold(true);
            $sheet->getStyle($col . $rowHeader)->getAlignment()->setHorizontal('center');
        }
        
        $row = 4;
        foreach ($reports as $report) {
            $sheet->setCellValue('A' . $row, $report['id_bpjskes']);
            $sheet->setCellValue('B' . $row, $report['jenis_bpjs']);
            $sheet->setCellValue('C' . $row, $report['jenis_layanan']);
            $sheet->setCellValue('D' . $row, $report['index']);
            $sheet->setCellValue('E' . $row, $report['nama_pekerja']);
            $sheet->setCellValue('F' . $row, $report['nomor_KIS']);
            $sheet->setCellValue('G' . $row, $report['kis_anak']);
            $sheet->setCellValue('H' . $row, $report['nik_pekerja']);
            $sheet->setCellValue('I' . $row, $report['nik_anak']);
            $sheet->setCellValue('J' . $row, $report['nik_ortu']);
            $sheet->setCellValue('K' . $row, $report['no_hp']);
            $sheet->setCellValue('L' . $row, $report['email']);
            $sheet->setCellValue('M' . $row, $report['tanggal']);
            $sheet->setCellValue('N' . $row, $report['sla']);
            $sheet->setCellValue('O' . $row, $report['faskes']);
            $sheet->setCellValue('P' . $row, $report['note']);
            $sheet->setCellValue('Q' . $row, $report['tanggal_approve']);
            $sheet->setCellValue('R' . $row, $report['approve']);
            $sheet->setCellValue('S' . $row, $report['note_petugas']);
            $sheet->setCellValue('T' . $row, $report['approve_by']);
            $sheet->setCellValue('U' . $row, $report['skor_sla']);
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
        $sheet->getStyle('A3:T' . $lastRow)->applyFromArray($styleArray);
        
        $sheet->getStyle('A3:T3')->applyFromArray([
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => ['argb' => '00B050'],
            ],
            'font' => [
                'color' => ['argb' => 'FFFFFF'],
            ],
        ]);
        
        $writer = new Xlsx($spreadsheet);
        $fileName = 'Report_Layanan.xlsx';
        
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $fileName . '"');
        header('Cache-Control: max-age=0');
        
        $writer->save('php://output');
        exit();
    }
    
}

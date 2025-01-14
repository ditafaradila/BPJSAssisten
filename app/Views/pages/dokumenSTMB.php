<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        td {
            height: 20px;
            /* Atur tinggi sel */
            text-align: left;
            vertical-align: middle;
            /* Posisi vertikal di tengah */
            line-height: 1.5;
            /* Atur tinggi baris agar lebih rapi */
        }
    </style>
</head>

<strong style="font-size:12pt; text-align: center;">FORMULIR PENGAJUAN SANTUNAN TIDAK MAMPU BEKERJA (STMB)</strong><br>
<span style="font-size:11pt; text-align: center;">PEKERJA HARIAN</span>
<br><br><br><br>
<table style="width: 100%; border-collapse: collapse; font-size:10pt;" class="table align-items-center mb-0">
    <tr>
        <td colspan="4" style="padding: 6px; background-color: #f4f4f4; color: #6c757d; font-weight: bold;">
            Informasi Personal Data dan Lokasi Kerja
        </td>
    </tr>
    <tr style="font-size:8pt;">
        <td style="text-align: left; width: 25%; color: #6c757d;">Nomor KIT Pekerja</td>
        <td style="text-align: left; width: 25%; "><?= $stmb['no_kit_pekerja'] ?></td>
        <td style="text-align: left; width: 25%;  color: #6c757d;">Nama</td>
        <td style="text-align: left; width: 25%; "><?= $stmb['nama_pekerja'] ?></td>
    </tr>
    <tr style="font-size:8pt;">
        <td style="text-align: left; width: 25%; color: #6c757d;">NIK KTP</td>
        <td style="text-align: left; width: 25%; "><?= $stmb['nik_pekerja'] ?></td>
        <td style="text-align: left; width: 25%; color: #6c757d;">Bisnis Unit</td>
        <td style="text-align: left; width: 25%; "><?= $stmb['bisnis_unit'] ?></td>
    </tr>
    <tr style="font-size:8pt;">
        <td style="text-align: left; width: 25%; color: #6c757d;">Divisi/Sub Divisi</td>
        <td style="text-align: left; width: 25%; "><?= $stmb['divisi'] ?></td>
        <td style="text-align: left; width: 25%; color: #6c757d;">Sub/Departemen</td>
        <td style="text-align: left; width: 25%; "><?= $stmb['departemen'] ?></td>
    </tr>
    <tr style="font-size:8pt;">
        <td style="text-align: left; width: 25%; color: #6c757d;">Nomor KIT Mandor</td>
        <td style="text-align: left; width: 25%; "><?= $stmb['no_kit_mandor'] ?></td>
        <td style="text-align: left; width: 25%; color: #6c757d;">Nama Mandor</td>
        <td style="text-align: left; width: 25%; "><?= $stmb['nama_mandor'] ?></td>
    </tr>
    <tr style="font-size:8pt;">
        <td style="text-align: left; width: 25%;">Cost Center</td>
        <td style="text-align: left; width: 25%; "><?= $stmb['cost_center'] ?></td>
    </tr>
</table>
<br><br>
<table style="font-size:10pt; width: 100%; border-collapse: collapse;">
    <tr style="font-size:10pt;">
        <td colspan="4" style="padding: 6px; background-color: #f4f4f4; color: #6c757d; font-weight: bold;">
            Informasi Kecelakaan dan Surat Keterangan Dokter
        </td>
    </tr>
    <tr style="font-size:8pt;">
        <td style="text-align: left; width: 25%; color: #6c757d;">Tanggal Kec. Kerja</td>
        <td style="text-align: left; width: 25%; "><?= $stmb['tanggal_kecelakaan'] ?></td>
        <td style="text-align: left; width: 25%; color: #6c757d;">PLKK (RS/Klinik)</td>
        <td style="text-align: left; width: 25%; "><?= $stmb['plkk'] ?></td>
    </tr>
    <tr style="font-size:8pt;">
        <td style="text-align: left; width: 25%; color: #6c757d;">Nama Dokter</td>
        <td style="text-align: left; width: 25%; "><?= $stmb['nama_dokter'] ?></td>
        <td style="text-align: left; width: 25%; color: #6c757d;">Tanggal SKD</td>
        <td style="text-align: left; width: 25%; "><?= $stmb['tanggal_mulai'] ?> s.d <?= $stmb['tanggal_selesai'] ?></td>
    </tr>
    <tr style="font-size:8pt;">
        <td style="text-align: left; width: 25%; color: #6c757d;">Jumlah Hari Istirahat</td>
        <td style="text-align: left; width: 25%; "><?= $stmb['jumlah_hari'] ?></td>
        <td style="text-align: left; width: 25%; color: #6c757d;">Keterangan SKD</td>
        <td style="text-align: left; width: 25%; "><?= $stmb['keterangan_skd'] ?></td>
    </tr>
</table>
<br><br>
<table style="width: 100%; border-collapse: collapse;  font-size:10pt;">
    <tr>
        <td colspan="4" style="padding: 6px; background-color: #f4f4f4; color: #6c757d; font-weight: bold;">
            Dokumen Pendukung
        </td>
    </tr>
    <tr style="font-size:8pt;">
        <td style=" text-align: left; width: 30%; color: #6c757d;">Surat Keterangan Dokter</td>
        <td style=" width: 10%;">
            <?= !empty($stmb['surat_skd']) ?
                '<span style="display: inline-block; width: 16px; height: 16px; border: 1px solid #000; text-align: center; line-height: 14px;">&#10003;</span>' :
                '<span style="display: inline-block; width: 16px; height: 16px; border: 1px solid #000; text-align: center; line-height: 14px;"> </span>'; ?>
        </td>
        <td style=" text-align: left; width: 30%; color: #6c757d;">BAP K3</td>
        <td style=" width: 10%;">
            <?= !empty($stmb['bap_k3']) ?
                '<span style="display: inline-block; width: 16px; height: 16px; border: 1px solid #000; text-align: center; line-height: 14px;">&#10003;</span>' :
                '<span style="display: inline-block; width: 16px; height: 16px; border: 1px solid #000; text-align: center; line-height: 14px;"> </span>'; ?>
        </td>
    </tr>
</table>
<br><br>
<table style="width: 100%; border-collapse: collapse; font-size:10pt; text-align: center; font-size:10pt;">
    <tr style="background-color: #f4f4f4; color: #6c757d; font-weight: bold;">
        <th style="border: 0.5px solid #000; padding: 8px;">HRBP</th>
        <th style="border: 0.5px solid #000; padding: 8px;">Klinik/Dokter Perusahaan</th>
        <th style="border: 0.5px solid #000; padding: 8px;">HR Service</th>
    </tr>
    <tr>
        <td style="border: 0.5px solid #000; height: 40px; vertical-align: middle; text-align: center; padding: 8px;">
            <span style="border: 0.5px solid #000; padding: 6px 10px;">&#10003;</span><br><br>
            <span style="font-size: 8pt; color: #6c757d;">Approved on: </span><span style="font-size: 8pt;"><?= date('d-m-Y', strtotime($stmb['tanggal_approve_hrbp'] ?? '')) ?></span>
        </td>
        <td style="border: 0.5px solid #000; height: 40px; vertical-align: middle; text-align: center; padding: 8px;">
            <span style="border: 0.5px solid #000; padding: 6px 10px;">&#10003;</span><br><br>
            <span style="font-size: 8pt; color: #6c757d;">Approved on: </span><span style="font-size: 8pt;"><?= date('d-m-Y', strtotime($stmb['tanggal_approve_klinik'] ?? '')) ?></span>
        </td>
        <td style="border: 0.5px solid #000; height: 40px; vertical-align: middle; text-align: center; padding: 8px;">
            <span style="border: 0.5px solid #000; padding: 6px 10px;">&#10003;</span><br><br>
            <span style="font-size: 8pt; color: #6c757d;">Approved on: </span><span style="font-size: 8pt;"><?= date('d-m-Y', strtotime($stmb['tanggal_approve_hrService'] ?? '')) ?></span>
        </td>
    </tr>
</table>
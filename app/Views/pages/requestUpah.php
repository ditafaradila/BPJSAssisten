<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .dropdown-menu {
            border: 2px solid #4CAF50;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm">
                        <a class="opacity-5 text-dark" href="javascript:;">View Inbox #<?= $stmb['id_stmb'] ?></a>
                    </li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">stmb</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Santunan Tidak Mampu Bekerja</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <ul class="ms-md-auto navbar-nav justify-content-end">
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-3 d-flex align-items-center">
                                <h6 class="mb-0">Detail Request STMB</h6>
                            </div>
                            <div class="col-9 justify-content-end d-inline-flex">
                                <?php if ($stmb['approve_hrService'] == 'Yes') : ?>
                                    <form method="POST" action="/approveAtasan/<?= $stmb['id_stmb'] ?>" class="d-inline">
                                        <button type="submit" class="btn btn-outline-success btn-sm d-flex justify-content-center align-items-center" style="width:100px; height:30px;">
                                            <i class="fas fa-check" style="font-size: 15px;"></i>
                                            <span style="font-size: 10px;">Approve</span>
                                        </button>
                                    </form>

                                    <button type="button" class="btn btn-outline-danger btn-sm d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#rejectBPJSKes-<?= $stmb['id_stmb'] ?>" style="width:100px; height:30px; margin-left:10px;">
                                        <i class="fas fa-xmark" style="font-size: 15px;"></i>
                                        <span style="font-size: 10px;">Reject</span>
                                    </button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-3">
                            <table class="table align-items-center mb-0">
                                <tbody id="bodyTable">
                                    <tr>
                                        <td colspan="4" class="text-secondary font-weight-bold text-sm py-2 bg-light">
                                            Informasi Personal Data dan Lokasi Kerja
                                        </td>
                                    </tr>

                                    <tr>
                                        <?php if ($stmb['no_kit_pekerja'] != 0): ?>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    No KIT
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $stmb['no_kit_pekerja'] ?>
                                                </a>
                                            </td>
                                        <?php endif; ?>

                                        <?php if ($stmb['nama_pekerja'] != 0): ?>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    Nama Pekerja
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $stmb['nama_pekerja'] ?>
                                                </a>
                                            </td>
                                        <?php endif; ?>
                                    </tr>

                                    <tr>
                                        <?php if ($stmb['nik_pekerja'] != 0): ?>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    NIK Pekerja
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $stmb['nik_pekerja'] ?>
                                                </a>
                                            </td>
                                        <?php endif; ?>

                                        <?php if ($stmb['bisnis_unit'] != 0): ?>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    Bisnis Unit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $stmb['bisnis_unit'] ?>
                                                </a>
                                            </td>
                                        <?php endif; ?>
                                    </tr>

                                    <tr>
                                        <?php if ($stmb['divisi'] != 0): ?>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    Divisi/Sub Divisi
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $stmb['divisi'] ?>
                                                </a>
                                            </td>
                                        <?php endif; ?>

                                        <?php if ($stmb['departemen'] != 0): ?>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    Sub/Departemen
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $stmb['departemen'] ?>
                                                </a>
                                            </td>
                                        <?php endif; ?>
                                    </tr>

                                    <tr>
                                        <?php if ($stmb['no_kit_mandor'] != 0): ?>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    No KIT Mandor
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $stmb['no_kit_mandor'] ?>
                                                </a>
                                            </td>
                                        <?php endif; ?>

                                        <?php if ($stmb['nama_mandor'] != 0): ?>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    Nama Mandor
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $stmb['nama_mandor'] ?>
                                                </a>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                    <tr>
                                        <?php if ($stmb['cost_center'] != 0): ?>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    Cost Center
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $stmb['cost_center'] ?>
                                                </a>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-secondary font-weight-bold text-sm py-2 bg-light">
                                            Informasi Kecelakaan dan Surat Keterangan Dokter
                                        </td>
                                    </tr>
                                    <tr>
                                        <?php if ($stmb['tanggal_kecelakaan'] != 0): ?>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    Tanggal Kecelakaan
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $stmb['tanggal_kecelakaan'] ?>
                                                </a>
                                            </td>
                                        <?php endif; ?>

                                        <?php if (!empty($stmb['plkk'])): ?>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    PLKK (RS/Klinik)
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $stmb['plkk'] ?>
                                                </a>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                    <tr>
                                        <?php if (!empty($stmb['nama_dokter'])): ?>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    Nama Dokter
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $stmb['nama_dokter'] ?>
                                                </a>
                                            </td>
                                        <?php endif; ?>

                                        <?php if (!empty($stmb['jumlah_hari'])): ?>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    Jumlah Hari
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $stmb['jumlah_hari'] ?>
                                                </a>
                                            </td>
                                        <?php endif; ?>
                                    </tr>

                                    <tr>
                                        <?php if (!empty($stmb['keterangan_skd'])): ?>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    Keterangan SKD
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $stmb['keterangan_skd'] ?>
                                                </a>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-secondary font-weight-bold text-sm py-2 bg-light">
                                            Informasi Upah (Santunan Tidak Mampu Bekerja) STMB
                                        </td>
                                    </tr>
                                    <tr>
                                        <?php if ($stmb['upah'] != 0): ?>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    Upah STMB
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= "Rp. " . number_format($stmb['upah']) ?>
                                                </a>
                                            </td>
                                        <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-3 d-flex align-items-center">
                                <h6 class="mb-0">stmb Events</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="timeline timeline-one-side">
                            <div class="timeline-block mb-3">
                                <span class="timeline-step">
                                    <i class="fa fa-file text-success" style="color: #336633;"></i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-secondary text-sm font-weight-bold mb-0">STMB Submitted on <?= $stmb['tanggal_pengajuan'] ?> by
                                        <span style="color:#336633"><?= $stmb['nama_pekerja'] ?></span>
                                        (<span style="color:#336633"><?= $stmb['no_kit_pekerja'] ?></span>)
                                    </h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                                        <?php
                                        $lampiranList = [$stmb['surat_skd'], $stmb['bap_k3']];  // Masukkan surat_skd dan bap_k3 ke dalam array
                                        foreach ($lampiranList as $lampiran):
                                            if (!empty($lampiran)):  // Tampilkan hanya jika lampiran tidak kosong
                                        ?>
                                                <a href="/lampiran/<?= trim($lampiran) ?>" target="_blank" style="color: #336633">
                                                    <?= trim($lampiran) ?>
                                                </a><br>
                                        <?php
                                            endif;
                                        endforeach;
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>
<?= $this->endSection() ?>
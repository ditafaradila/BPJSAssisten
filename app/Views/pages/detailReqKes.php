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
                        <a class="opacity-5 text-dark" href="javascript:;">View Inbox #<?= $request['id_bpjskes'] ?></a>
                    </li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Request</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Layanan BPJS</h6>
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
                                <h6 class="mb-0">Request Details</h6>
                            </div>
                            <div class="col-9 justify-content-end d-inline-flex">
                                <?php if (session()->get('id_role') != 1 && session()->get('id_role') != 3 && $request['approve'] != 'Yes') : ?>
                                    <button type="button" class="btn btn-outline-success btn-sm d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#approveBPJSKes-<?= $request['id_bpjskes'] ?>" style="width:100px; height:30px;">
                                        <i class="fas fa-check" style="font-size: 15px;"></i> <!-- Ikon List -->
                                        <span style="font-size: 10px;">Approve</span>
                                    </button>
                                    <button type="button" class="btn btn-outline-danger btn-sm d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#rejectBPJSKes-<?= $request['id_bpjskes'] ?>" style="width:100px; height:30px; margin-left:10px;">
                                        <i class="fas fa-xmark" style="font-size: 15px;"></i> <!-- Ikon List -->
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
                                    <?php if ($request['jenis_bpjs'] != 0): ?>
                                        <tr>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    Jenis BPJS
                                                </a>
                                            </td>
                                            <td style="width:80%;">
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $request['jenis_bpjs'] ?>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php if ($request['jenis_layanan'] != 0): ?>
                                        <tr>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    Jenis Layanan
                                                </a>
                                            </td>
                                            <td style="width:80%;">
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $request['jenis_layanan'] ?>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php if ($request['index'] != 0): ?>
                                        <tr>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    Index Pekerja
                                                </a>
                                            </td>
                                            <td style="width:80%;">
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $request['index'] ?>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php if ($request['nama_pekerja'] != 0): ?>
                                        <tr>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    Nama Pekerja
                                                </a>
                                            </td>
                                            <td style="width:80%;">
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $request['nama_pekerja'] ?>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php if ($request['nomor_KIS'] != 0): ?>
                                        <tr>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    Nomor KIS Pekerja
                                                </a>
                                            </td>
                                            <td style="width:80%;">
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $request['nomor_KIS'] ?>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php if ($request['nik_anak'] != 0): ?>
                                        <tr>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    NIK Anak
                                                </a>
                                            </td>
                                            <td style="width:80%;">
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $request['nik_anak'] ?>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php if ($request['kis_anak'] != 0): ?>
                                        <tr>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    Nomor KIS Anak
                                                </a>
                                            </td>
                                            <td style="width:80%;">
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $request['kis_anak'] ?>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php if ($request['nik_ortu'] != 0): ?>
                                        <tr>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    NIK Orang Tua
                                                </a>
                                            </td>
                                            <td style="width:80%;">
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $request['nik_ortu'] ?>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php if ($request['nik_pekerja'] != 0): ?>
                                        <tr>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    NIK Pekerja
                                                </a>
                                            </td>
                                            <td style="width:80%;">
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $request['nik_pekerja'] ?>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php if ($request['faskes'] != 0): ?>
                                        <tr>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    Faskes
                                                </a>
                                            </td>
                                            <td style="width:80%;">
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $request['faskes'] ?>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php if ($request['no_hp'] != 0): ?>
                                        <tr>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    Nomor Handphone
                                                </a>
                                            </td>
                                            <td style="width:80%;">
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $request['no_hp'] ?>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php if (!empty($request['email'])): ?>
                                        <tr>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    Email
                                                </a>
                                            </td>
                                            <td style="width:80%;">
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $request['email'] ?>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php if (!empty($request['note'])): ?>
                                        <tr>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    Note
                                                </a>
                                            </td>
                                            <td style="width:80%;">
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $request['note'] ?>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php if (!empty($request['note_petugas']) && $request['approve'] == 'Yes'):  ?>
                                        <tr>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    Note Approve
                                                </a>
                                            </td>
                                            <td style="width:80%;">
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $request['note_petugas'] ?>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php if (!empty($request['skor_sla']) && $request['approve'] == 'Yes' && session()->get('id_role') != 1): ?>
                                        <tr>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    Skor SLA
                                                </a>
                                            </td>
                                            <td style="width:80%;">
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $request['skor_sla'] ?>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php if (!empty($request['approve_by']) && $request['approve'] == 'Yes'): ?>
                                        <tr>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    Approve By
                                                </a>
                                            </td>
                                            <td style="width:80%;">
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $request['approve_by'] ?>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php if (!empty($request['tanggal_approve']) && $request['approve'] == 'Yes'): ?>
                                        <tr>
                                            <td>
                                                <a class="text-secondary text-xs font-weight-bold">
                                                    Approve On
                                                </a>
                                            </td>
                                            <td style="width:80%;">
                                                <a class="text-dark text-xs font-weight-bold">
                                                    <?= $request['tanggal_approve'] ?>
                                                </a>
                                            </td>
                                        </tr>
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
                                <h6 class="mb-0">Request Events</h6>
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
                                    <h6 class="text-secondary text-sm font-weight-bold mb-0">Request Submitted on <?= $request['tanggal'] ?> by
                                        <span style="color:#336633"><?= $request['nama_pekerja'] ?></span>
                                        (<span style="color:#336633"><?= $request['index'] ?></span>)
                                    </h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                                        <?php
                                        $lampiranList = explode(',', $request['lampiran']);  // Pisahkan string lampiran
                                        foreach ($lampiranList as $lampiran): ?>
                                            <a href="/lampiran/<?= trim($lampiran) ?>" target="_blank" style="color: #336633">
                                                <?= trim($lampiran) ?>
                                            </a><br>
                                        <?php endforeach; ?>
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

<!-- Modal Approve -->
<div class="modal fade" id="approveBPJSKes-<?= $request['id_bpjskes'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Approve</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('/approveBpjsKes/' . $request['id_bpjskes']) ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="note_petugas">Catatan</label>
                            <textarea class="form-control" name="note_petugas" id="note_petugas" rows="4" placeholder="Masukkan catatan di sini..."></textarea>
                        </div>
                        <input type="hidden" name="tanggal_approve" value="<?= date('Y-m-d') ?>">
                        <input type="hidden" name="approve_by" value="<?= session()->get('nama'); ?>">
                        <div align="center">
                            <button type="submit" class="btn bg-gradient-dark mb-0">Approve</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Reject -->
<div class="modal fade" id="rejectBPJSKes-<?= $request['id_bpjskes'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Approve</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('/rejectBpjsKes/' . $request['id_bpjskes']) ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="note_petugas">Catatan</label>
                            <textarea class="form-control" name="note_petugas" id="note_petugas" rows="4" placeholder="Masukkan catatan di sini..."></textarea>
                        </div>
                        <input type="hidden" name="approve_by" value="<?= session()->get('nama'); ?>">
                        <div align="center">
                            <button type="submit" class="btn bg-gradient-dark mb-0">Approve</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
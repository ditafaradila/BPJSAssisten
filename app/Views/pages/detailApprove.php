<?= $this->extend('templates') ?>
<?= $this->section('content') ?>

<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm">
                    <a class="opacity-5 text-dark" href="javascript:;">View Inbox #<?= $request['id_bpjskes'] ?></a>
                </li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Request</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">BPJS Kesehatan</h6>
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
                            <h6 class="mb-0">Approve Details</h6>
                        </div>                      
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-3">
                        <table class="table align-items-center mb-0">
                            <tbody id="bodyTable">
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
                                <?php if ($request['nama'] != 0): ?>
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
                                    <span style="color:#336633"><?= $request['nama'] ?></span>
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

<?= $this->endSection() ?>
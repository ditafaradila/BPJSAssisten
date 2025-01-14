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
                        <a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                    </li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Dashboard</h6>
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
            <?php if (in_array(session()->get('id_role'), [2, 7])): ?>
                <!-- Tabel request dan approve BPJS -->
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-3 d-flex align-items-center">
                                    <h6 class="mb-0">Request BPJS</h6>
                                </div>
                                <div class="col-9 justify-content-end d-inline-flex">
                                    <button class="btn btn-outline-succes d-flex flex-column align-items-center" onclick="showTable('request')" style="width: 50px; height: 50px; text-align: center; border: 1px solid #2ECC71;">
                                        <i class="fas fa-file-import" style="font-size: 15px;"></i> <!-- Ikon List -->
                                        <span style="margin-top: 1px; font-size: 10px;">Request</span> <!-- Tulisan Request -->
                                    </button>
                                    <button class="btn btn-outline-succes d-flex flex-column align-items-center" onclick="showTable('approve')" style="width: 50px; height: 50px; text-align: center; border: 1px solid #2ECC71;  margin-left: 10px;">
                                        <i class="fas fa-thumbs-up" style="font-size: 15px;"></i> <!-- Ikon List -->
                                        <span style="margin-top: 1px; font-size: 10px;">Approve</span> <!-- Tulisan Request -->
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <!-- Tabel Request (Default Tampil) -->
                            <div id="requestTable" class="table-responsive p-3">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Request ID
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Index</th>
                                            <th class="text-center text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Nama Pekerja</th>
                                            <th class="text-center text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Jenis Layanan</th>
                                            <th class="text-center text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="bodyTable">
                                        <?php $no = 1;
                                        foreach ($request as $request) :
                                        ?>
                                            <tr>
                                                <td class="align-middle text-center">
                                                    <?php if (session()->get('id_role') != 1): ?>
                                                        <a href="/detailReqKes/<?= $request['id_bpjskes'] ?>" class="text-success text-xs font-weight-bold" style="color:rgb(9, 73, 37);">
                                                            <?= $request['id_bpjskes'] ?>
                                                        </a>
                                                    <?php else: ?>
                                                        <span class="text-secondary text-xs font-weight-bold">
                                                            <?= $request['id_bpjskes'] ?>
                                                        </span>
                                                    <?php endif; ?>

                                                </td>
                                                <td>
                                                    <p class="shorten-text text-xs font-weight-bold mb-0 text-center">
                                                        <?= $request['index'] ?>
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="shorten-text text-xs font-weight-bold mb-0 text-center">
                                                        <?= $request['nama_pekerja'] ?>
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="shorten-text text-xs font-weight-bold mb-0 text-center">
                                                        <?= $request['jenis_layanan'] ?>
                                                    </p>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                                        <button type="button" class="btn btn-outline-danger btn-sm d-flex justify-content-center align-items-center" style="width:120px; height:30px;" disabled>
                                                            <span style="font-size: 10px;">Need Approval</span>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                        endforeach
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Tabel Approve (Default Sembunyi) -->
                        <div id="approveTable" class="table-responsive p-3" style="display: none;">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Request ID
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Index</th>
                                        <th class="text-center text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama Pekerja</th>
                                        <th class="text-center text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Jenis Layanan</th>
                                        <th class="text-center text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="bodyTable">
                                    <?php $no = 1;
                                    foreach ($approve as $approve) :
                                    ?>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <a href="/detailReqKes/<?= $approve['id_bpjskes'] ?>" class="text-secondary text-xs font-weight-bold">
                                                    <?= $approve['id_bpjskes'] ?>
                                                </a>
                                            </td>
                                            <td>
                                                <p class="shorten-text text-xs font-weight-bold mb-0 text-center">
                                                    <?= $approve['index'] ?>
                                                </p>
                                            </td>
                                            <td>
                                                <p class="shorten-text text-xs font-weight-bold mb-0 text-center">
                                                    <?= $approve['nama_pekerja'] ?>
                                                </p>
                                            </td>
                                            <td>
                                                <p class="shorten-text text-xs font-weight-bold mb-0 text-center">
                                                    <?= $approve['jenis_layanan'] ?>
                                                </p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                                    <button type="button" class="btn btn-outline-success btn-sm d-flex justify-content-center align-items-center" style="width:120px; height:30px;" disabled>
                                                        <span style="font-size: 10px;">Success</span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                    endforeach
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Tabel request dan approve STMB -->
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-3 d-flex align-items-center">
                                    <h6 class="mb-0">Request STMB</h6>
                                </div>
                                <div class="col-9 justify-content-end d-inline-flex">
                                    <button class="btn btn-outline-succes d-flex flex-column align-items-center" onclick="showTableSTMB('requestSTMB')" style="width: 50px; height: 50px; text-align: center; border: 1px solid #2ECC71;">
                                        <i class="fas fa-file-import" style="font-size: 15px;"></i> <!-- Ikon List -->
                                        <span style="margin-top: 1px; font-size: 10px;">Request</span> <!-- Tulisan Request -->
                                    </button>
                                    <button class="btn btn-outline-succes d-flex flex-column align-items-center" onclick="showTableSTMB('approveSTMB')" style="width: 50px; height: 50px; text-align: center; border: 1px solid #2ECC71;  margin-left: 10px;">
                                        <i class="fas fa-thumbs-up" style="font-size: 15px;"></i> <!-- Ikon List -->
                                        <span style="margin-top: 1px; font-size: 10px;">Approve</span> <!-- Tulisan Request -->
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <!-- Tabel Request (Default Tampil) -->
                            <div id="requestSTMBTable" class="table-responsive p-3">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                                                No Request</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                No Kit</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                Nama</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                Jumlah Hari</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                Approved</th> <!-- Menyatukan kolom Approved menjadi 3 -->
                                        </tr>
                                    </thead>
                                    <tbody id="bodyTable">
                                        <?php $no = 1;
                                        foreach ($stmb as $stmb) :
                                        ?> <tr>
                                                <td class="align-middle text-center">
                                                    <a href="/requestSTMB/<?= $stmb['id_stmb'] ?>" class="text-success text-xs font-weight-bold" style="color:rgb(9, 73, 37);">
                                                        <?= $stmb['id_stmb'] ?>
                                                    </a>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <p class="shorten-text text-xs font-weight-bold mb-0">
                                                        <?= $stmb['no_kit_pekerja'] ?></p>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <p class="shorten-text text-xs font-weight-bold mb-0">
                                                        <?= $stmb['nama_pekerja'] ?></p>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <p class="shorten-text text-xs font-weight-bold mb-0">
                                                        <?= $stmb['jumlah_hari'] ?></p>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                                        <button type="button" class="btn btn-outline-danger btn-sm d-flex justify-content-center align-items-center" style="width:120px; height:30px;" disabled>
                                                            <span style="font-size: 10px;">Need Approval</span>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                        endforeach
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Tabel Approve (Default Sembunyi) -->
                        <div id="approveSTMBTable" class="table-responsive p-3" style="display: none;">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                                            No Request</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            No Kit</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            Nama</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            Jumlah Hari</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            Approved</th> <!-- Menyatukan kolom Approved menjadi 3 -->
                                    </tr>
                                </thead>
                                <tbody id="bodyTable">
                                    <?php $no = 1;
                                    foreach ($stmbApprove as $stmbApprove) :
                                    ?> <tr>
                                            <td class="align-middle text-center">
                                                <a href="#" class="text-success text-xs font-weight-bold" data-bs-toggle="modal" data-bs-target="#modalSTMB-<?= $stmbApprove['id_stmb'] ?>" style="color:rgb(9, 73, 37);">
                                                    <?= $stmbApprove['id_stmb'] ?>
                                                </a>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="shorten-text text-xs font-weight-bold mb-0">
                                                    <?= $stmbApprove['no_kit_pekerja'] ?></p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="shorten-text text-xs font-weight-bold mb-0">
                                                    <?= $stmbApprove['nama_pekerja'] ?></p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="shorten-text text-xs font-weight-bold mb-0">
                                                    <?= $stmbApprove['jumlah_hari'] ?></p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                                    <button type="button" class="btn btn-outline-success btn-sm d-flex justify-content-center align-items-center" style="width:120px; height:30px;" disabled>
                                                        <span style="font-size: 10px;">Approved</span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Modal Approve -->
                                        <div class="modal fade" id="modalSTMB-<?= $stmbApprove['id_stmb'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Approve</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="<?= base_url('/upahSTMB/' . $stmbApprove['id_stmb']) ?>" method="post">
                                                            <?= csrf_field(); ?>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="upah">Upah STMB</label>
                                                                    <textarea class="form-control" name="upah" id="upah" rows="4" placeholder="Masukkan upah di sini..."></textarea>
                                                                </div>
                                                                <div align="center">
                                                                    <button type="submit" class="btn bg-gradient-dark mb-0">Approve</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    endforeach
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <!-- tabel admin -->
            <?php if (in_array(session()->get('id_role'), [3])): ?>
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-3 d-flex align-items-center">
                                    <h6 class="mb-0">Request STMB</h6>
                                </div>
                                <div class="col-9 justify-content-end d-inline-flex">
                                    <button class="btn btn-outline-succes d-flex flex-column align-items-center" onclick="showTableSTMB('requestSTMB')" style="width: 50px; height: 50px; text-align: center; border: 1px solid #2ECC71;">
                                        <i class="fas fa-file-import" style="font-size: 15px;"></i> <!-- Ikon List -->
                                        <span style="margin-top: 1px; font-size: 10px;">Request</span> <!-- Tulisan Request -->
                                    </button>
                                    <button class="btn btn-outline-succes d-flex flex-column align-items-center" onclick="showTableSTMB('approveSTMB')" style="width: 50px; height: 50px; text-align: center; border: 1px solid #2ECC71;  margin-left: 10px;">
                                        <i class="fas fa-thumbs-up" style="font-size: 15px;"></i> <!-- Ikon List -->
                                        <span style="margin-top: 1px; font-size: 10px;">Approve</span> <!-- Tulisan Request -->
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <!-- Tabel Request (Default Tampil) -->
                            <div id="requestSTMBTable" class="table-responsive p-3">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                                                No Request</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                No Kit</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                Nama</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                Jumlah Hari</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                Approved</th> <!-- Menyatukan kolom Approved menjadi 3 -->
                                        </tr>
                                    </thead>
                                    <tbody id="bodyTable">
                                        <?php $no = 1;
                                        foreach ($stmbAdmin as $admin) :
                                        ?> <tr>
                                                <td class="align-middle text-center">
                                                    <a href="/requestSTMB/<?= $admin['id_stmb'] ?>" class="text-success text-xs font-weight-bold" style="color:rgb(9, 73, 37);">
                                                        <?= $admin['id_stmb'] ?>
                                                    </a>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <p class="shorten-text text-xs font-weight-bold mb-0">
                                                        <?= $admin['no_kit_pekerja'] ?></p>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <p class="shorten-text text-xs font-weight-bold mb-0">
                                                        <?= $admin['nama_pekerja'] ?></p>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <p class="shorten-text text-xs font-weight-bold mb-0">
                                                        <?= $admin['jumlah_hari'] ?></p>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                                        <button type="button" class="btn btn-outline-danger btn-sm d-flex justify-content-center align-items-center" style="width:120px; height:30px;" disabled>
                                                            <span style="font-size: 10px;">Need Approval</span>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                        endforeach
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Tabel Approve (Default Sembunyi) -->
                        <div id="approveSTMBTable" class="table-responsive p-3" style="display: none;">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th rowspan="2" scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                                            No Request</th>
                                        <th rowspan="2" scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            No Kit</th>
                                        <th rowspan="2" scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            Nama</th>
                                        <th rowspan="2" scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            Tanggal Pengajuan</th>
                                        <th colspan="3" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            Approved</th> <!-- Menyatukan kolom Approved menjadi 3 -->
                                        <th colspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            Form STMB</th>
                                    </tr>
                                    <tr>
                                        <th scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            HRBP</th>
                                        <th scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            HR Service</th>
                                        <th scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            Klinik</th>
                                    </tr>
                                </thead>
                                <tbody id="bodyTable">
                                    <?php $no = 1;
                                    foreach ($stmbAdmin as $stmbAdmin) :
                                    ?> <tr>
                                            <td class="align-middle text-center">
                                                <a href="#" class="text-success text-xs font-weight-bold" data-bs-toggle="modal" data-bs-target="#modalSTMB-<?= $stmbAdmin['id_stmb'] ?>" style="color:rgb(9, 73, 37);">
                                                    <?= $stmbAdmin['id_stmb'] ?>
                                                </a>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="shorten-text text-xs font-weight-bold mb-0">
                                                    <?= $stmbAdmin['no_kit_pekerja'] ?></p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="shorten-text text-xs font-weight-bold mb-0">
                                                    <?= $stmbAdmin['nama_pekerja'] ?></p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="shorten-text text-xs font-weight-bold mb-0">
                                                    <?= $stmbAdmin['tanggal_pengajuan'] ?></p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <?php if ($stmbAdmin['approve_hrbp'] == 'Yes') : ?>
                                                    <button class="btn btn-sm" style="background-color: rgba(40, 167, 69, 0.5); border-color: rgba(40, 167, 69, 0.5);">
                                                        <i class="fas fa-check text-dark fw-bold"></i>
                                                    </button>
                                                <?php elseif ($stmbAdmin['approve_hrbp'] == 'No') : ?>
                                                    <button class="btn btn-sm" style="background-color: rgba(220, 53, 69, 0.5); border-color: rgba(220, 53, 69, 0.5);">
                                                        <i class="fas fa-xmark text-dark fw-bold"></i>
                                                    </button>
                                                <?php endif; ?>

                                            </td>
                                            <td class="align-middle text-center">
                                                <?php if ($stmbAdmin['approve_hrService'] == 'Yes') : ?>
                                                    <button class="btn btn-sm" style="background-color: rgba(40, 167, 69, 0.5); border-color: rgba(40, 167, 69, 0.5);">
                                                        <i class="fas fa-check text-dark fw-bold"></i>
                                                    </button>
                                                <?php elseif ($stmbAdmin['approve_hrService'] == 'No') : ?>
                                                    <button class="btn btn-sm" style="background-color: rgba(220, 53, 69, 0.5); border-color: rgba(220, 53, 69, 0.5);">
                                                        <i class="fas fa-xmark text-dark fw-bold"></i>
                                                    </button>
                                                <?php endif; ?>
                                            </td>
                                            <td class="align-middle text-center">
                                                <?php if ($stmbAdmin['approve_klinik'] == 'Yes') : ?>
                                                    <button class="btn btn-sm" style="background-color: rgba(40, 167, 69, 0.5); border-color: rgba(40, 167, 69, 0.5);">
                                                        <i class="fas fa-check text-dark fw-bold"></i>
                                                    </button>
                                                <?php elseif ($stmbAdmin['approve_klinik'] == 'No') : ?>
                                                    <button class="btn btn-sm" style="background-color: rgba(220, 53, 69, 0.5); border-color: rgba(220, 53, 69, 0.5);">
                                                        <i class="fas fa-xmark text-dark fw-bold"></i>
                                                    </button>
                                                <?php endif; ?>
                                            </td>
                                            <td class="align-middle text-center">
                                                <?php
                                                $hrbpApproved = $stmbAdmin['approve_hrbp'] == 'Yes' ? true : false;
                                                $hrServiceApproved = $stmbAdmin['approve_hrService'] == 'Yes' ? true : false;
                                                $klinikApproved = $stmbAdmin['approve_klinik'] == 'Yes' ? true : false;
                                                if ($hrbpApproved && $hrServiceApproved && $klinikApproved) {
                                                    echo '<a href="' . site_url('/dokumenSTMB/' . $stmbAdmin['id_stmb']) . '">
                                                            <i class="fas fa-file-pdf"></i>
                                                        </a>';
                                                } elseif (!$hrbpApproved || !$hrServiceApproved || !$klinikApproved) {
                                                    echo '<button class="btn btn-sm" style="background-color: rgba(220, 53, 69, 0.5); border-color: rgba(220, 53, 69, 0.5);">
                                                            <i class="fas fa-xmark text-dark fw-bold"></i>
                                                        </button>';
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    <?php
                                    endforeach
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <!-- tabel hrbp dan klinik -->
            <?php if (in_array(session()->get('id_role'), [4, 5])): ?>
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-3 d-flex align-items-center">
                                    <h6 class="mb-0">Request STMB</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div id="requestSTMBTable" class="table-responsive p-3">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                                                No Request</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                No Kit</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                Nama</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                Jumlah Hari</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                Approved</th>
                                        </tr>
                                    </thead>
                                    <tbody id="bodyTable">
                                        <?php $no = 1;
                                        foreach ($hrbpklinik as $hrbpklinik) :
                                            // Cek apakah id_role 4 dan approve_hrbp = 'Wait'
                                            if (session()->get('id_role') == 4 && $hrbpklinik['approve_hrbp'] == 'Wait') :
                                        ?>
                                                <tr>
                                                    <td class="align-middle text-center">
                                                        <a href="/requestSTMB/<?= $hrbpklinik['id_stmb'] ?>" class="text-success text-xs font-weight-bold" style="color:rgb(9, 73, 37);">
                                                            <?= $hrbpklinik['id_stmb'] ?>
                                                        </a>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <p class="shorten-text text-xs font-weight-bold mb-0">
                                                            <?= $hrbpklinik['no_kit_pekerja'] ?></p>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <p class="shorten-text text-xs font-weight-bold mb-0">
                                                            <?= $hrbpklinik['nama_pekerja'] ?></p>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <p class="shorten-text text-xs font-weight-bold mb-0">
                                                            <?= $hrbpklinik['jumlah_hari'] ?></p>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                                            <button type="button" class="btn btn-outline-danger btn-sm d-flex justify-content-center align-items-center" style="width:120px; height:30px;" disabled>
                                                                <span style="font-size: 10px;">Need Approval</span>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                            // Cek apakah id_role 5 dan approve_klinik = 'Wait'
                                            elseif (session()->get('id_role') == 5 && $hrbpklinik['approve_klinik'] == 'Wait') :
                                            ?>
                                                <tr>
                                                    <td class="align-middle text-center">
                                                        <a href="/requestSTMB/<?= $hrbpklinik['id_stmb'] ?>" class="text-success text-xs font-weight-bold" style="color:rgb(9, 73, 37);">
                                                            <?= $hrbpklinik['id_stmb'] ?>
                                                        </a>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <p class="shorten-text text-xs font-weight-bold mb-0">
                                                            <?= $hrbpklinik['no_kit_pekerja'] ?></p>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <p class="shorten-text text-xs font-weight-bold mb-0">
                                                            <?= $hrbpklinik['nama_pekerja'] ?></p>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <p class="shorten-text text-xs font-weight-bold mb-0">
                                                            <?= $hrbpklinik['jumlah_hari'] ?></p>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                                            <button type="button" class="btn btn-outline-danger btn-sm d-flex justify-content-center align-items-center" style="width:120px; height:30px;" disabled>
                                                                <span style="font-size: 10px;">Need Approval</span>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                        <?php endif;
                                        endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <!-- tabel Atasan -->
            <?php if (in_array(session()->get('id_role'), [6, 7])): ?>
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-3 d-flex align-items-center">
                                    <h6 class="mb-0">Request STMB</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div id="requestSTMBTable" class="table-responsive p-3">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                                                No Request</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                No Kit</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                Nama</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                Jumlah Hari</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                Approved</th>
                                        </tr>
                                    </thead>
                                    <tbody id="bodyTable">
                                        <?php $no = 1;
                                        foreach ($approveAtasan as $upah) : ?>
                                            <tr>
                                                <td class="align-middle text-center">
                                                    <a href="/requestUpah/<?= $upah['id_stmb'] ?>" class="text-success text-xs font-weight-bold" style="color:rgb(9, 73, 37);">
                                                        <?= $upah['id_stmb'] ?>
                                                    </a>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <p class="shorten-text text-xs font-weight-bold mb-0">
                                                        <?= $upah['no_kit_pekerja'] ?></p>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <p class="shorten-text text-xs font-weight-bold mb-0">
                                                        <?= $upah['nama_pekerja'] ?></p>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <p class="shorten-text text-xs font-weight-bold mb-0">
                                                        <?= $upah['jumlah_hari'] ?></p>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                                        <button type="button" class="btn btn-outline-danger btn-sm d-flex justify-content-center align-items-center" style="width:120px; height:30px;" disabled>
                                                            <span style="font-size: 10px;">Need Approval</span>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    </div>
</body>
<script>
    // Fungsi untuk menampilkan tabel sesuai tombol yang diklik
    function showTable(type) {
        if (type === 'request') {
            document.getElementById('requestTable').style.display = 'block';
            document.getElementById('approveTable').style.display = 'none';
        } else if (type === 'approve') {
            document.getElementById('approveTable').style.display = 'block';
            document.getElementById('requestTable').style.display = 'none';
        }
    }

    function showTableSTMB(type) {
        if (type === 'requestSTMB') {
            document.getElementById('requestSTMBTable').style.display = 'block';
            document.getElementById('approveSTMBTable').style.display = 'none';
        } else if (type === 'approveSTMB') {
            document.getElementById('approveSTMBTable').style.display = 'block';
            document.getElementById('requestSTMBTable').style.display = 'none';
        }
    }
</script>
<?= $this->endSection() ?>
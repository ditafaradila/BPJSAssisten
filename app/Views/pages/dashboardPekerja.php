<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery dan Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard UI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/ggf.png">
    <title>
        BPJSAssist
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f4f7;
            padding-top: 20px;
            /* Tambahkan padding setara tinggi navbar */
        }

        .navbar {
            background-color: #6b8e23;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            max-width: 90%;
            max-height: 200px;
            font-family: 'Poppins', sans-serif;
            font-size: 15px;
            margin: 0 auto;
            border-radius: 0 0 10px 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        .navbar a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: 600;
        }

        .navbar a.active {
            color: orange;
        }

        .navbar .right {
            display: flex;
            align-items: center;
        }

        .right i {
            margin-left: 20px;
            cursor: pointer;
        }

        .content {
            padding: 100px 30px 30px;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .points {
            display: flex;
            gap: 20px;
            margin-top: 10px;
        }

        .points div {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f7f7f7;
            padding: 10px 20px;
            border-radius: 20px;
        }

        .points .flex {
            background-color: #50c878;
            color: white;
        }

        .points .ggf {
            background-color: #f4a460;
            color: white;
        }
    </style>
</head>

<body>
    <!-- Menu atas -->
    <div class="navbar">
        <div class="left">
            <img src="../assets/img/ggf-logo.png" class="navbar-brand-img h-500" alt="main_logo" style="height: 50px;">
        </div>
        <!-- <div class="left">
            <a href="/dashboard" class="active">Dashboard</a>
            <a href="/pengajuanSTMB">Pengajuan STMB</a>
            <a href="#" class="nav-link dropdown-toggle" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #333;">
                Report
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background-color: #f8f9fa;">
                <li><a class="dropdown-item" href="#" style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #555;">Action</a></li>
                <li><a class="dropdown-item" href="#" style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #555;">Another action</a></li>
                <li><a class="dropdown-item" href="#" style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #555;">Something else here</a></li>
            </ul>
        </div>
        <div class="right">
            <i class="fas fa-bell"></i>
            <i class="fas fa-user-circle"></i>
            <i class="fas fa-logout"></i>
            <span>user</span>
        </div> -->
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7" style="margin: 0 auto; justify-content: center; align-items: center;">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-9 d-flex align-items-center">
                                    <img src="/assets/img/welcome.gif" alt="Welcome Animation" style="height: 100px; margin-right: 15px;">
                                    <div class="align-items-center">
                                        <h6 class="mb-0">Selamat Datang!</h6>
                                        <p style="color: gray; font-size:small;">Silahkan lakukan pengajuan layanan BPJS</p>
                                    </div>
                                </div>
                                <div class="btn-group col-3 d-flex align-items-center">
                                    <button type="button" class="btn dropdown-toggle"
                                        style="background-color: #6b8e23; color: white; width:100px; height:40px; border-radius: 15px;"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-file-import" style="font-size: 15px; color: white;"></i>
                                        <span style="margin-top: 1px; font-size: 10px; color: white;">Add Request</span>
                                    </button>
                                    <ul class="dropdown-menu" style="font-size: 12px;">
                                        <li class="dropdown-header text-dark font-weight-bold">BPJS Kesehatan</li>
                                        <li><a class="dropdown-item" href="/tambahBPJSKes" data-bs-toggle="modal" data-bs-target="#bpjsdataanak">Pendaftaran BPJS Anak 1-3</a></li>
                                        <li><a class="dropdown-item" href="/tambahBPJSKes" data-bs-toggle="modal" data-bs-target="#bpjsdatakeluarga">Pendaftaran BPJS Keluarga Tambahan</a></li>
                                        <li><a class="dropdown-item" href="/tambahBPJSKes" data-bs-toggle="modal" data-bs-target="#bpjsResetJKN">Reset Akun JKN Mobile</a></li>
                                        <li><a class="dropdown-item" href="/tambahBPJSKes" data-bs-toggle="modal" data-bs-target="#koreksibpjskes">Koreksi Data BPJSKes</a></li>
                                        <li><a class="dropdown-item" href="/tambahBPJSKes" data-bs-toggle="modal" data-bs-target="#nonaktifBpjs">Penonaktifan Data BPJSKes</a></li>
                                        <li><a class="dropdown-item" href="/tambahBPJSKes" data-bs-toggle="modal" data-bs-target="#aktivasiAnak">Aktivasi BPJS Anak >21 Tahun</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li class="dropdown-header text-dark font-weight-bold">BPJS Ketenagakerjaan</li>
                                        <li><a class="dropdown-item" href="/tambahBPJSTK" data-bs-toggle="modal" data-bs-target="#koreksiBpjstk">Koreksi Data BPJSTK</a></li>
                                        <li><a class="dropdown-item" href="/tambahBPJSTK" data-bs-toggle="modal" data-bs-target="#gabungSaldo">Penggabungan Saldo JHT</a></li>
                                        <li><a class="dropdown-item" href="/tambahBPJSTK" data-bs-toggle="modal" data-bs-target="#resetJMO">Reset Akun JMO</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal tambah BPJS Anak -->
    <div class="modal fade" id="bpjsdataanak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pendaftaran BPJS Kesehatan Anak</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/storeBpjskes" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="index">Index Pekerja</label>
                                <input type="text" class="form-control" name="index" id="index">
                            </div>
                            <div class="form-group">
                                <label for="nama_pekerja">Nama Pekerja</label>
                                <input type="text" class="form-control" name="nama_pekerja" id="nama_pekerja">
                            </div>
                            <div class="form-group">
                                <label for="no_hp">Nomor Handphone</label>
                                <input type="text" class="form-control" name="no_hp" id="no_hp">
                            </div>
                            <input type="hidden" name="jenis_bpjs" value="BPJS Kesehatan">
                            <div class="form-group">
                                <label for="nomor_KIS">Nomor KIS Pekerja</label>
                                <input type="text" class="form-control" name="nomor_KIS" id="nomor_KIS">
                            </div>
                            <div class="form-group">
                                <label for="nik_anak">Nomor NIK Anak</label>
                                <input type="text" class="form-control" name="nik_anak" id="nik_anak">
                            </div>
                            <div class="form-group">
                                <label for="faskes">Faskes Pekerja</label>
                                <input type="text" class="form-control" name="faskes" id="faskes">
                            </div>
                            <input type="hidden" name="jenis_layanan" value="Pendaftaran BPJSKes Anak">
                            <input type="hidden" name="approve" value="Wait">
                            <input type="hidden" name="sla" value=2>
                            <input type="hidden" name="tanggal" value="<?= date('Y-m-d') ?>">
                            <div class="mb-3">
                                <label for="lampiran" class="form-label">Upload KK</label>
                                <input type="file" class="form-control" name="lampiran" accept=".jpg,.jpeg,.png,.pdf" required>
                                <small class="text-muted">Format: JPG, PNG, PDF. Max 2MB.</small>
                            </div>
                            <div class="form-group">
                                <label for="note">Keterangan</label>
                                <input type="text" class="form-control" name="note" id="note">
                            </div>
                            <div align="center">
                                <button type="submit" style="background-color: #6b8e23; color: white; width:100px; 
                                        height:40px; border-radius: 15px;"
                                    aria-expanded="false">
                                    <span style="margin-top: 1px; font-size: 10px; color: white;">Request</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Aktivasi BPJS Anak >21 tahun -->
    <div class="modal fade" id="aktivasiAnak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Aktivasi BPJS Anak > 21 Tahun </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/storeAktivasi" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="index">Index Pekerja</label>
                                <input type="text" class="form-control" name="index" id="index">
                            </div>
                            <div class="form-group">
                                <label for="nama_pekerja">Nama Pekerja</label>
                                <input type="text" class="form-control" name="nama_pekerja" id="nama_pekerja">
                            </div>
                            <div class="form-group">
                                <label for="no_hp">Nomor Handphone (WhatsApp)</label>
                                <input type="text" class="form-control" name="no_hp" id="no_hp">
                            </div>
                            <input type="hidden" name="jenis_bpjs" value="BPJS Kesehatan">
                            <div class="form-group">
                                <label for="nomor_KIS">Nomor KIS Pekerja</label>
                                <input type="text" class="form-control" name="nomor_KIS" id="nomor_KIS">
                            </div>
                            <div class="form-group">
                                <label for="nik_anak">Nomor NIK Anak</label>
                                <input type="text" class="form-control" name="nik_anak" id="nik_anak">
                            </div>
                            <div class="form-group">
                                <label for="kis_anak">Nomor KIS Anak</label>
                                <input type="text" class="form-control" name="kis_anak" id="kis_anak">
                            </div>
                            <input type="hidden" name="jenis_layanan" value="Aktivasi BPJS Anak >21 Tahun">
                            <input type="hidden" name="approve" value="Wait">
                            <input type="hidden" name="sla" value=2>
                            <input type="hidden" name="tanggal" value="<?= date('Y-m-d') ?>">
                            <div class="mb-3">
                                <label for="lampiran" class="form-label">Upload Surat Keterangan Kuliah</label>
                                <input type="file" class="form-control" name="lampiran" accept=".jpg,.jpeg,.png,.pdf" required>
                                <small class="text-muted">Format: JPG, PNG, PDF. Max 2MB.</small>
                            </div>
                            <div class="form-group">
                                <label for="note">Keterangan</label>
                                <input type="text" class="form-control" name="note" id="note">
                            </div>
                            <div align="center">
                                <button type="submit" style="background-color: #6b8e23; color: white; width:100px; 
                                        height:40px; border-radius: 15px;"
                                    aria-expanded="false">
                                    <span style="margin-top: 1px; font-size: 10px; color: white;">Request</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal tambah BPJS Keluarga Tambahan -->
    <div class="modal fade" id="bpjsdatakeluarga" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pendaftaran BPJS Kesehatan Keluarga Tambahan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/storeBpjskesOrtu" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="index">Index Pekerja</label>
                                <input type="text" class="form-control" name="index" id="index">
                            </div>
                            <div class="form-group">
                                <label for="nama_pekerja">Nama Pekerja</label>
                                <input type="text" class="form-control" name="nama_pekerja" id="nama_pekerja">
                            </div>
                            <div class="form-group">
                                <label for="no_hp">Nomor Handphone</label>
                                <input type="text" class="form-control" name="no_hp" id="no_hp">
                            </div>
                            <div class="form-group">
                                <label for="nomor_KIS">Nomor KIS Pekerja</label>
                                <input type="text" class="form-control" name="nomor_KIS" id="nomor_KIS">
                            </div>
                            <div class="form-group">
                                <label for="nik_ortu">Nomor NIK Orang Tua</label>
                                <input type="text" class="form-control" name="nik_ortu" id="nik_ortu">
                            </div>
                            <div class="form-group">
                                <label for="faskes">Faskes Pekerja</label>
                                <input type="text" class="form-control" name="faskes" id="faskes">
                            </div>
                            <input type="hidden" name="jenis_layanan" value="Pendaftaran BPJSKes Keluarga Tambahan">
                            <input type="hidden" name="approve" value="Wait">
                            <input type="hidden" name="jenis_bpjs" value="BPJS Kesehatan">
                            <input type="hidden" name="sla" value=30>
                            <input type="hidden" name="tanggal" value="<?= date('Y-m-d') ?>">
                            <div class="mb-3">
                                <label for="lampiran" class="form-label">Upload KK</label>
                                <input type="file" class="form-control" name="lampiran" accept=".jpg,.jpeg,.png,.pdf" required>
                                <small class="text-muted">Format: JPG, PNG, PDF. Max 2MB.</small>
                            </div>
                            <div class="form-group">
                                <label for="note">Keterangan</label>
                                <input type="text" class="form-control" name="note" id="note">
                            </div>
                            <div align="center">
                                <button type="submit" style="background-color: #6b8e23; color: white; width:100px; 
                                        height:40px; border-radius: 15px;"
                                    aria-expanded="false">
                                    <span style="margin-top: 1px; font-size: 10px; color: white;">Request</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Reset JKN -->
    <div class="modal fade" id="bpjsResetJKN" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pelayanan Reset Akun JKN Mobile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/storeResetJKN" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="index">Index Pekerja</label>
                                <input type="text" class="form-control" name="index" id="index">
                            </div>
                            <div class="form-group">
                                <label for="nama_pekerja">Nama Pekerja</label>
                                <input type="text" class="form-control" name="nama_pekerja" id="nama_pekerja">
                            </div>
                            <div class="form-group">
                                <label for="nik_pekerja">Nomor NIK Pekerja</label>
                                <input type="text" class="form-control" name="nik_pekerja" id="nik_pekerja">
                            </div>
                            <div class="form-group">
                                <label for="no_hp">Nomor Handphone</label>
                                <input type="text" class="form-control" name="no_hp" id="no_hp">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" id="email">
                            </div>
                            <input type="hidden" name="jenis_layanan" value="Reset User JKN Mobile">
                            <input type="hidden" name="approve" value="Wait">
                            <input type="hidden" name="jenis_bpjs" value="BPJS Kesehatan">
                            <input type="hidden" name="sla" value=2>
                            <input type="hidden" name="tanggal" value="<?= date('Y-m-d') ?>">
                            <div class="form-group">
                                <label for="note">Keterangan</label>
                                <input type="text" class="form-control" name="note" id="note">
                            </div>
                            <div align="center">
                                <button type="submit" style="background-color: #6b8e23; color: white; width:100px; 
                                        height:40px; border-radius: 15px;"
                                    aria-expanded="false">
                                    <span style="margin-top: 1px; font-size: 10px; color: white;">Request</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Koreksi Data BPJSKes -->
    <div class="modal fade" id="koreksibpjskes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pelayanan Reset Akun JKN Mobile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/storekoreksiBpjskes" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="index">Index Pekerja</label>
                                <input type="text" class="form-control" name="index" id="index">
                            </div>
                            <div class="form-group">
                                <label for="nama_pekerja">Nama Pekerja</label>
                                <input type="text" class="form-control" name="nama_pekerja" id="nama_pekerja">
                            </div>
                            <div class="form-group">
                                <label for="no_hp">Nomor Handphone</label>
                                <input type="text" class="form-control" name="no_hp" id="no_hp">
                            </div>
                            <div class="form-group">
                                <label for="nik_pekerja">Nomor NIK Pekerja</label>
                                <input type="text" class="form-control" name="nik_pekerja" id="nik_pekerja">
                            </div>
                            <input type="hidden" name="jenis_layanan" value="Koreksi Data BPJS Kesehatan">
                            <input type="hidden" name="approve" value="Wait">
                            <input type="hidden" name="jenis_bpjs" value="BPJS Kesehatan">
                            <input type="hidden" name="sla" value=7>
                            <input type="hidden" name="tanggal" value="<?= date('Y-m-d') ?>">
                            <div class="mb-3">
                                <label for="lampiran" class="form-label">Upload KK</label>
                                <input type="file" class="form-control" name="lampiran[]" accept=".jpg,.jpeg,.png,.pdf" required>
                                <small class="text-muted">Format: JPG, PNG, PDF. Max 2MB.</small>
                            </div>
                            <div class="mb-3">
                                <label for="lampiran" class="form-label">Upload KTP</label>
                                <input type="file" class="form-control" name="lampiran[]" accept=".jpg,.jpeg,.png,.pdf" required>
                                <small class="text-muted">Format: JPG, PNG, PDF. Max 2MB.</small>
                            </div>
                            <div class="form-group">
                                <label for="note">Keterangan</label>
                                <input type="text" class="form-control" name="note" id="note">
                            </div>
                            <div align="center">
                                <button type="submit" style="background-color: #6b8e23; color: white; width:100px; 
                                        height:40px; border-radius: 15px;"
                                    aria-expanded="false">
                                    <span style="margin-top: 1px; font-size: 10px; color: white;">Request</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Penonaktifan Data BPJSKes -->
    <div class="modal fade" id="nonaktifBpjs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pelayanan Reset Akun JKN Mobile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/storenonaktifBpjs" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="index">Index Pekerja</label>
                                <input type="text" class="form-control" name="index" id="index">
                            </div>
                            <div class="form-group">
                                <label for="nama_pekerja">Nama Pekerja</label>
                                <input type="text" class="form-control" name="nama_pekerja" id="nama_pekerja">
                            </div>
                            <div class="form-group">
                                <label for="no_hp">Nomor Handphone</label>
                                <input type="text" class="form-control" name="no_hp" id="no_hp">
                            </div>
                            <div class="form-group">
                                <label for="nik_pekerja">Nomor NIK</label>
                                <input type="text" class="form-control" name="nik_pekerja" id="nik_pekerja">
                            </div>
                            <div class="form-group">
                                <label for="no_KIS">Nomor KIS</label>
                                <input type="text" class="form-control" name="no_KIS" id="no_KIS">
                            </div>
                            <div class="form-group">
                                <label for="nomor_bpjs">Nomor BPJS</label>
                                <input type="text" class="form-control" name="nomor_bpjs" id="nomor_bpjs">
                            </div>
                            <input type="hidden" name="jenis_layanan" value="Penonaktifan Data BPJS Kesehatan">
                            <input type="hidden" name="approve" value="Wait">
                            <input type="hidden" name="jenis_bpjs" value="BPJS Kesehatan">
                            <input type="hidden" name="sla" value=30>
                            <input type="hidden" name="tanggal" value="<?= date('Y-m-d') ?>">
                            <div class="mb-3">
                                <label for="lampiran" class="form-label">Upload KK</label>
                                <input type="file" class="form-control" name="lampiran[]" accept=".jpg,.jpeg,.png,.pdf" required>
                                <small class="text-muted">Format: JPG, PNG, PDF. Max 2MB.</small>
                            </div>
                            <div class="mb-3">
                                <label for="lampiran" class="form-label">Upload Surat Keterangan Meninggal</label>
                                <input type="file" class="form-control" name="lampiran[]" accept=".jpg,.jpeg,.png,.pdf" required>
                                <small class="text-muted">Format: JPG, PNG, PDF. Max 2MB.</small>
                            </div>
                            <div class="form-group">
                                <label for="note">Keterangan</label>
                                <input type="text" class="form-control" name="note" id="note">
                            </div>
                            <div align="center">
                                <button type="submit" style="background-color: #6b8e23; color: white; width:100px; 
                                        height:40px; border-radius: 15px;"
                                    aria-expanded="false">
                                    <span style="margin-top: 1px; font-size: 10px; color: white;">Request</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Koreksi Data BPJSTK -->
    <div class="modal fade" id="koreksiBpjstk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pelayanan Reset Akun JMO Mobile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/storekoreksiBpjstk" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="index">Index Pekerja</label>
                                <input type="text" class="form-control" name="index" id="index">
                            </div>
                            <div class="form-group">
                                <label for="nama_pekerja">Nama Pekerja</label>
                                <input type="text" class="form-control" name="nama_pekerja" id="nama_pekerja">
                            </div>
                            <div class="form-group">
                                <label for="nik_pekerja">Nomor NIK Pekerja</label>
                                <input type="text" class="form-control" name="nik_pekerja" id="nik_pekerja">
                            </div>
                            <div class="form-group">
                                <label for="no_hp">Nomor Handphone</label>
                                <input type="text" class="form-control" name="no_hp" id="no_hp">
                            </div>
                            <input type="hidden" name="jenis_layanan" value="Koreksi Data BPJS Ketenagakerjaan">
                            <input type="hidden" name="approve" value="Wait">
                            <input type="hidden" name="jenis_bpjs" value="BPJS Ketenagakerjaan">
                            <input type="hidden" name="sla" value=30>
                            <input type="hidden" name="tanggal" value="<?= date('Y-m-d') ?>">
                            <div class="mb-3">
                                <label for="lampiran" class="form-label">Upload KK</label>
                                <input type="file" class="form-control" name="lampiran[]" accept=".jpg,.jpeg,.png,.pdf" required>
                                <small class="text-muted">Format: JPG, PNG, PDF. Max 2MB.</small>
                            </div>
                            <div class="mb-3">
                                <label for="lampiran" class="form-label">Upload KTP</label>
                                <input type="file" class="form-control" name="lampiran[]" accept=".jpg,.jpeg,.png,.pdf" required>
                                <small class="text-muted">Format: JPG, PNG, PDF. Max 2MB.</small>
                            </div>
                            <div class="form-group">
                                <label for="note">Keterangan</label>
                                <input type="text" class="form-control" name="note" id="note">
                            </div>
                            <div align="center">
                                <button type="submit" style="background-color: #6b8e23; color: white; width:100px; 
                                        height:40px; border-radius: 15px;"
                                    aria-expanded="false">
                                    <span style="margin-top: 1px; font-size: 10px; color: white;">Request</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Penggabungan Saldo JHT -->
    <div class="modal fade" id="gabungSaldo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pelayanan Penggabungan Saldo JHT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/storegabungSaldo" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="index">Index Pekerja</label>
                                <input type="text" class="form-control" name="index" id="index">
                            </div>
                            <div class="form-group">
                                <label for="nama_pekerja">Nama Pekerja</label>
                                <input type="text" class="form-control" name="nama_pekerja" id="nama_pekerja">
                            </div>
                            <div class="form-group">
                                <label for="no_hp">Nomor Handphone</label>
                                <input type="text" class="form-control" name="no_hp" id="no_hp">
                            </div>
                            <div class="form-group">
                                <label for="nik_pekerja">Nomor NIK Pekerja</label>
                                <input type="text" class="form-control" name="nik_pekerja" id="nik_pekerja">
                            </div>
                            <input type="hidden" name="jenis_layanan" value="Penggabungan Saldo JHT">
                            <input type="hidden" name="approve" value="Wait">
                            <input type="hidden" name="jenis_bpjs" value="BPJS Ketenagakerjaan">
                            <input type="hidden" name="sla" value=30>
                            <input type="hidden" name="tanggal" value="<?= date('Y-m-d') ?>">
                            <div class="mb-3">
                                <label for="lampiran" class="form-label">Upload KK</label>
                                <input type="file" class="form-control" name="lampiran[]" accept=".jpg,.jpeg,.png,.pdf" required>
                                <small class="text-muted">Format: JPG, PNG, PDF. Max 2MB.</small>
                            </div>
                            <div class="mb-3">
                                <label for="lampiran" class="form-label">Upload KTP</label>
                                <input type="file" class="form-control" name="lampiran[]" accept=".jpg,.jpeg,.png,.pdf" required>
                                <small class="text-muted">Format: JPG, PNG, PDF. Max 2MB.</small>
                            </div>
                            <div class="mb-3">
                                <label for="lampiran" class="form-label">Upload KPJ 1</label>
                                <input type="file" class="form-control" name="lampiran[]" accept=".jpg,.jpeg,.png,.pdf" required>
                                <small class="text-muted">Format: JPG, PNG, PDF. Max 2MB.</small>
                            </div>
                            <div class="mb-3">
                                <label for="lampiran" class="form-label">Upload KPJ 2</label>
                                <input type="file" class="form-control" name="lampiran[]" accept=".jpg,.jpeg,.png,.pdf" required>
                                <small class="text-muted">Format: JPG, PNG, PDF. Max 2MB.</small>
                            </div>
                            <div class="form-group">
                                <label for="note">Keterangan</label>
                                <input type="text" class="form-control" name="note" id="note">
                            </div>
                            <div align="center">
                                <button type="submit" style="background-color: #6b8e23; color: white; width:100px; 
                                        height:40px; border-radius: 15px;"
                                    aria-expanded="false">
                                    <span style="margin-top: 1px; font-size: 10px; color: white;">Request</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Reset JMO -->
    <div class="modal fade" id="resetJMO" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pelayanan Reset Akun JKN Mobile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/storeResetJMO" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="index">Index Pekerja</label>
                                <input type="text" class="form-control" name="index" id="index">
                            </div>
                            <div class="form-group">
                                <label for="nama_pekerja">Nama Pekerja</label>
                                <input type="text" class="form-control" name="nama_pekerja" id="nama_pekerja">
                            </div>
                            <div class="form-group">
                                <label for="nik_pekerja">Nomor NIK Pekerja</label>
                                <input type="text" class="form-control" name="nik_pekerja" id="nik_pekerja">
                            </div>
                            <div class="form-group">
                                <label for="no_hp">Nomor Handphone</label>
                                <input type="text" class="form-control" name="no_hp" id="no_hp">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" id="email">
                            </div>
                            <input type="hidden" name="jenis_layanan" value="Reset User JMO Mobile">
                            <input type="hidden" name="approve" value="Wait">
                            <input type="hidden" name="jenis_bpjs" value="BPJS Ketenagakerjaan">
                            <input type="hidden" name="sla" value=2>
                            <input type="hidden" name="tanggal" value="<?= date('Y-m-d') ?>">
                            <div class="form-group">
                                <label for="note">Keterangan</label>
                                <input type="text" class="form-control" name="note" id="note">
                            </div>
                            <div align="center">
                                <button type="submit" style="background-color: #6b8e23; color: white; width:100px; 
                                        height:40px; border-radius: 15px;"
                                    aria-expanded="false">
                                    <span style="margin-top: 1px; font-size: 10px; color: white;">Request</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php if (session()->getFlashdata('modal')) : ?>
        <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white text-center">
                        <h5 class="modal-title w-100">Notifikasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <?= session()->getFlashdata('modalMessage'); ?>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Script untuk menampilkan modal otomatis -->
        <script>
            window.onload = function() {
                $('#successModal').modal('show');
            };
        </script>
        <script>
            document.querySelectorAll('[data-dismiss="modal"]').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    $('#successModal').modal('hide');
                });
            });
        </script>
    <?php endif; ?>
</body>

</html>
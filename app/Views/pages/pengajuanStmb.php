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

        .card-body {
            padding: 20px;
            /* Add padding to the card body */
        }

        .form-control {
            padding: 10px;
            /* Add padding to the form input fields */
        }

        .row {
            margin-bottom: 15px;
            /* Add space between rows */
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
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">BPJS Ketenagakerjaan</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">STMB</h6>
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
                    <div class="card-header pb-0" style="margin-bottom: 50px; color: black; margin-top: 15px; margin-left: 90px;">
                        <strong>Form Pengajuan STMB</strong>
                        <p style="margin-top: 5px; color: grey; font-size: 12px;">Mohon isi dengan data yang benar</p>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2" style="align-items: center;">
                        <form action="/storeSTMB" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="tanggal_pengajuan" value="<?= date('Y-m-d') ?>">
                            <input type="hidden" name="approve_hrbp" value="Wait">
                            <input type="hidden" name="approve_hrService" value="Wait">
                            <input type="hidden" name="approve_klinik" value="Wait">
                            <input type="hidden" name="approve_atasan" value="Wait">

                            <!-- Row with three columns -->
                            <div class="row mb-3" style="margin-left: 100px; margin-right:5px;" style="margin-left: 5px; margin-right:5px;">
                                <div class="col-md-4">
                                    <label for="no_kit_pekerja" class="form-label" style="display:block; margin-bottom: 0;">No KIT Pekerja <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control-sm" id="no_kit_pekerja" name="no_kit_pekerja" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="nama_pekerja" class="form-label" style="display:block; margin-bottom: 0;">Nama Pekerja <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control-sm" id="nama_pekerja" name="nama_pekerja" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="nik_pekerja" class="form-label" style="display:block; margin-bottom: 0;">NIK Pekerja <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control-sm" id="nik_pekerja" name="nik_pekerja" required>
                                </div>
                            </div>

                            <!-- Row with three columns -->
                            <div class="row mb-3" style="margin-left: 100px; margin-right:5px;">
                                <div class="col-md-4">
                                    <label for="bisnis_unit" class="form-label" style="display:block; margin-bottom: 0;">Bisnis Unit <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control-sm" id="bisnis_unit" name="bisnis_unit" value="PT Great Giant Pineapple" readonly>
                                </div>
                                <div class="col-md-4">
                                    <label for="divisi" class="form-label" style="display:block; margin-bottom: 0;">Divisi <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control-sm" id="divisi" name="divisi" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="departemen" class="form-label" style="display:block; margin-bottom: 0;">Departemen <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control-sm" id="departemen" name="departemen" required>
                                </div>
                            </div>

                            <!-- Row with three columns -->
                            <div class="row mb-3" style="margin-left: 100px; margin-right:5px;">
                                <div class="col-md-4">
                                    <label for="no_kit_mandor" class="form-label" style="display:block; margin-bottom: 0;">No KIT Mandor <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control-sm" id="no_kit_mandor" name="no_kit_mandor" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="nama_mandor" class="form-label" style="display:block; margin-bottom: 0;">Nama Mandor <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control-sm" id="nama_mandor" name="nama_mandor" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="cost_center" class="form-label" style="display:block; margin-bottom: 0;">Cost Center <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control-sm" id="cost_center" name="cost_center" required>
                                </div>
                            </div>

                            <!-- Row with three columns -->
                            <div class="row mb-3" style="margin-left: 100px; margin-right:5px;">
                                <div class="col-md-4">
                                    <label for="tanggal_kecelakaan" class="form-label" style="display:block; margin-bottom: 0;">Tanggal Kecelakaan <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control-sm" id="tanggal_kecelakaan" name="tanggal_kecelakaan" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="plkk" class="form-label" style="display:block; margin-bottom: 0;">PLKK <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control-sm" id="plkk" name="plkk" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="nama_dokter" class="form-label" style="display:block; margin-bottom: 0;">Nama Dokter <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control-sm" id="nama_dokter" name="nama_dokter" required>
                                </div>
                            </div>

                            <!-- Row with three columns -->
                            <div class="row mb-3" style="margin-left: 100px; margin-right:5px;">
                                <div class="col-md-4">
                                    <label for="tanggal_mulai" class="form-label" style="display:block; margin-bottom: 0;">Tanggal Mulai <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control-sm" id="tanggal_mulai" name="tanggal_mulai" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="tanggal_selesai" class="form-label" style="display:block; margin-bottom: 0;">Tanggal Selesai <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control-sm" id="tanggal_selesai" name="tanggal_selesai" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="jumlah_hari" class="form-label" style="display:block; margin-bottom: 0;">Jumlah Hari <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control-sm" id="jumlah_hari" name="jumlah_hari" readonly>
                                </div>
                            </div>
                            <div class="row mb-3 file-upload-container" style="margin-left: 100px; margin-right:5px;">
                                <div class="col-md-3"></div>
                                <div class="col-md-3">
                                    <label for="surat_skd" class="form-label" style="display:block; margin-bottom: 0;">Lampiran Surat SKD (Optional)</label>
                                    <input type="file" class="form-control-sm" id="surat_skd" name="surat_skd" accept=".pdf, .doc, .docx, .jpg, .png">
                                </div>                                
                                <div class="col-md-3">
                                    <label for="bap_k3" class="form-label" style="display:block; margin-bottom: 0;">Lampiran BAP K3 (Optional)</label>
                                    <input type="file" class="form-control-sm" id="bap_k3" name="bap_k3" accept=".pdf, .doc, .docx, .jpg, .png">
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                            <div align="center">
                                <button type="submit" style="background-color: #6b8e23; color: white; width:100px; 
                                        height:40px; border-radius: 15px;"
                                    aria-expanded="false">
                                    <span style="margin-top: 1px; font-size: 10px; color: white;">Send Request</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tanggalMulai = document.getElementById('tanggal_mulai');
        const tanggalSelesai = document.getElementById('tanggal_selesai');
        const jumlahHari = document.getElementById('jumlah_hari');

        function hitungJumlahHari() {
            const mulai = new Date(tanggalMulai.value);
            const selesai = new Date(tanggalSelesai.value);
            
            if (mulai && selesai && selesai >= mulai) {
                const selisih = (selesai - mulai) / (1000 * 60 * 60 * 24) + 1; // +1 untuk menghitung hari pertama
                jumlahHari.value = selisih;
            } else {
                jumlahHari.value = 0;
            }
        }

        tanggalMulai.addEventListener('change', hitungJumlahHari);
        tanggalSelesai.addEventListener('change', hitungJumlahHari);
    });
</script>
<?= $this->endSection() ?>
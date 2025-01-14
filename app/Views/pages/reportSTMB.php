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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm">
                        <a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                    </li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Report</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Report</h6>
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
                                <h6 class="mb-0">Report Layanan</h6>
                            </div>
                            <div class="col-12 d-flex justify-content-end align-items-center">
                                <!-- Search Bar -->
                                <!-- <div class="input-group me-2" style="width: 200px; height: 30px">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" fill="#2" class="bi bi-search" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control border border-success" placeholder="Cari..." oninput="search(this.value)">
                                </div> -->
                                <!-- Filter Form -->
                                <!-- <form id="filterForm" action="/download-report" method="GET" class="d-flex align-items-center">
                                    <div class="me-2 d-flex align-items-center" style="height: 30px;">
                                        <label for="approvalType" class="sr-only">Approval Type</label>
                                        <select class="form-control form-control-sm" id="approvalType" name="approvalType" style="height: 100%; width: 120px;">
                                            <option value="">Approval Type:</option>
                                            <option value="Yes">Approved</option>
                                            <option value="Wait">Pending</option>
                                            <option value="No">Rejected</option>
                                        </select>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-outline-danger btn-sm d-flex justify-content-center align-items-center"
                                            style="width:150px; height:30px;">
                                            <i class="fas fa-download me-1" style="font-size: 15px;"></i>
                                            <span style="font-size: 10px;">Download Report</span>
                                        </button>
                                    </div>
                                </form> -->
                                <form action="/download-report-stmb" method="GET" class="d-flex align-items-center">
                                    <button type="submit" class="btn btn-outline-danger btn-sm d-flex justify-content-center align-items-center"
                                        style="width:150px; height:30px;">
                                        <i class="fas fa-download me-1" style="font-size: 15px;"></i>
                                        <span style="font-size: 10px;">Download Report</span>
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th rowspan="2" scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                                            No</th>
                                        <th rowspan="2" scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            No Kit</th>
                                        <th rowspan="2" scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            Nama</th>
                                        <th rowspan="2" scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            Jumlah Hari</th>
                                        <th colspan="3" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            Approved</th> <!-- Menyatukan kolom Approved menjadi 3 -->
                                        <th colspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            Form STMB</th> <!-- Menyatukan kolom Approved menjadi 3 -->
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
                                    foreach ($stmb as $stmb) :
                                    ?>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <p class="shorten-text text-xs font-weight-bold mb-0">
                                                    <?= $no++ ?></p>
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
                                                <?php if ($stmb['approve_hrbp'] == 'Yes') : ?>
                                                    <button class="btn btn-sm" style="background-color: rgba(40, 167, 69, 0.5); border-color: rgba(40, 167, 69, 0.5);">
                                                        <i class="fas fa-check text-dark fw-bold"></i>
                                                    </button>
                                                <?php elseif ($stmb['approve_hrbp'] == 'No') : ?>
                                                    <button class="btn btn-sm" style="background-color: rgba(220, 53, 69, 0.5); border-color: rgba(220, 53, 69, 0.5);">
                                                        <i class="fas fa-xmark text-dark fw-bold"></i>
                                                    </button>
                                                <?php endif; ?>

                                            </td>
                                            <td class="align-middle text-center">
                                                <?php if ($stmb['approve_hrService'] == 'Yes') : ?>
                                                    <button class="btn btn-sm" style="background-color: rgba(40, 167, 69, 0.5); border-color: rgba(40, 167, 69, 0.5);">
                                                        <i class="fas fa-check text-dark fw-bold"></i>
                                                    </button>
                                                <?php elseif ($stmb['approve_hrService'] == 'No') : ?>
                                                    <button class="btn btn-sm" style="background-color: rgba(220, 53, 69, 0.5); border-color: rgba(220, 53, 69, 0.5);">
                                                        <i class="fas fa-xmark text-dark fw-bold"></i>
                                                    </button>
                                                <?php endif; ?>
                                            </td>
                                            <td class="align-middle text-center">
                                                <?php if ($stmb['approve_klinik'] == 'Yes') : ?>
                                                    <button class="btn btn-sm" style="background-color: rgba(40, 167, 69, 0.5); border-color: rgba(40, 167, 69, 0.5);">
                                                        <i class="fas fa-check text-dark fw-bold"></i>
                                                    </button>
                                                <?php elseif ($stmb['approve_klinik'] == 'No') : ?>
                                                    <button class="btn btn-sm" style="background-color: rgba(220, 53, 69, 0.5); border-color: rgba(220, 53, 69, 0.5);">
                                                        <i class="fas fa-xmark text-dark fw-bold"></i>
                                                    </button>
                                                <?php endif; ?>
                                            </td>
                                            <td class="align-middle text-center">
                                                <?php
                                                $hrbpApproved = $stmb['approve_hrbp'] == 'Yes' ? true : false;
                                                $hrServiceApproved = $stmb['approve_hrService'] == 'Yes' ? true : false;
                                                $klinikApproved = $stmb['approve_klinik'] == 'Yes' ? true : false;
                                                if ($hrbpApproved && $hrServiceApproved && $klinikApproved) {
                                                    echo '<a href="' . site_url('/dokumenSTMB/' . $stmb['id_stmb']) . '">
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
                                    endforeach;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    function search(get) {
        const keyword = get.trim().toLowerCase();
        $('table tbody tr').each(function() {
            let match = false;
            $(this).find('td').each(function() {
                if ($(this).text().trim().toLowerCase().includes(keyword)) {
                    match = true;
                }
            });
            if (match) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    }
</script>
<?= $this->endSection() ?>
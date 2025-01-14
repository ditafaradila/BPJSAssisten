<?= $this->extend('templates') ?>
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
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
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
                                <h6 class="mb-0">Data Pengguna</h6>
                            </div>
                            <div class="col-9 justify-content-end d-inline-flex">
                                <button type="button" class="btn btn-outline-danger btn-sm d-flex justify-content-center align-items-center"
                                    style="width:150px; height:30px; margin-left:10px;"
                                    <i class="fas fa-plus" style="font-size: 15px;"></i>
                                    <span style="font-size: 10px;">Tambah Data</span>
                                </button>

                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                                            No</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            Username</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            Index</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            Nama Lengkap</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            Hak Akses</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="bodyTable">
                                    <?php $no = 1;
                                    foreach ($account as $account) :
                                    ?>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold"><?= $no++ ?></span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="shorten-text text-xs font-weight-bold mb-0">
                                                    <?= $account['username'] ?></p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="shorten-text text-xs font-weight-bold mb-0">
                                                    <?= $account['index'] ?></p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="shorten-text text-xs font-weight-bold mb-0">
                                                    <?= $account['nama'] ?></p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="shorten-text text-xs font-weight-bold mb-0">
                                                    <?= $account['jenis_role'] ?></p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="align-middle text-center text-sm">
                                                    <a href="<?= base_url('/hapusAkun/' . $account['id_user']) ?>" class="btn btn-link text-center text-danger text-gradient px-1 mb-0" onclick="return confirm('Apakah anda yakin?')"><i class="far fa-trash-alt me-2"></i></a>
                                                    <button type="button" class="btn btn-link text-dark px-1 mb-0 text-center" data-bs-toggle="modal" data-bs-target="#editAkun-<?= $account['id_user'] ?>">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Modal Edit Jenis Barang -->
                                        <div class="modal fade" id="editAkun-<?= $account['id_user'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title" id="exampleModalLabel">Edit Akun</h6>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: black;">&times;</span></button>
                                                    </div>
                                                    <form action="<?= base_url('/updateAkun/' . $account['id_user']) ?>" method="post">
                                                        <?= csrf_field(); ?>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="username">Username</label>
                                                                <input type="text" class="form-control" name="username" id="username" value="<?= $account['username'] ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="password">Password</label>
                                                                <input type="text" class="form-control" name="password" id="password" value="<?= $account['password'] ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="nama">Nama</label>
                                                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $account['nama'] ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="index">Index</label>
                                                                <input type="text" class="form-control" name="index" id="index" value="<?= $account['index'] ?>">
                                                            </div>
                                                            <label for="id_role">Hak Akses Pengguna</label>
                                                            <div class="form-group">
                                                                <select class="form-control" name="id_role" id="id_role">
                                                                    <?php foreach ($roles as $role): ?>
                                                                        <option value="<?= $role['id_role'] ?>" <?= ($account['id_role'] == $role['id_role']) ? 'selected' : '' ?>>
                                                                            <?= $role['jenis_role'] ?>
                                                                        </option>
                                                                    <?php endforeach; ?>
                                                                </select>

                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        <i class="fas fa-chevron-down"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div align="center">
                                                            <button type="submit" class="btn bg-gradient-dark mb-0">SIMPAN PERUBAHAN</button>
                                                        </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                        </div>
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
<!DOCTYPE html>
<html lang="en">

<head>
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
</head>

<body class="g-sidenav-show bg-gray-100">
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4" style="background-color: #6b8e23;">
                    <div class="container-fluid">
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="/dashboard">
                            <img src="../assets/img/ggf-logo.png" class="navbar-brand-img h-500" alt="main_logo" style="height: 50px;">
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navigation">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center me-2 active text-light" style="font-family:'Poppins',sans-serif;" aria-current="page" href="dashboard">
                                        Dashboard
                                    </a>
                                </li>
                                <?php if (in_array(session()->get('id_role'), [3, 7])): ?>
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center me-2 active text-light" style="font-family:'Poppins',sans-serif;" aria-current="page" href="pengajuanStmb">
                                            Pengajuan STMB
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if (in_array(session()->get('id_role'), [2, 6, 7])): ?>
                                    <li class="nav-item">
                                        <a class="nav-link me-2 text-light" style="font-family:'Poppins',sans-serif;" href="/report">
                                            Report
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link me-2 text-light" style="font-family:'Poppins',sans-serif;" href="/reportSTMB">
                                            Report STMB
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <li class="nav-item">
                                    <a class="nav-link me-2 text-light" style="font-family:'Poppins',sans-serif;"" href=" <?= base_url('logout') ?>">
                                        LogOut
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav d-lg-block d-none">
                                <li class="nav-item">
                                    <a href="<?= base_url('logout') ?>" class="btn btn-danger btn-round mb-0 me-1">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>

    <main class="main-content position-relative max-height-vh-100 h-100 mt-7 border-radius-lg ">
        <main id="main" class="main">
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div class="content-wrapper">
                    <div class="container">
                        <?= $this->renderSection('content') ?>
                    </div>
                </div>
            </div>
        </main><!-- End #main -->
    </main>

    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>
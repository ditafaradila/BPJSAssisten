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
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0 d-flex align-items-center" href="/dashboard">
                <img src="../assets/img/ggf.png" class="navbar-brand-img h-250" alt="main_logo">
                <span class="ms-2 font-weight-bold" style="font-size: 1.2rem;">BPJSAssist</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <?php if (session()->get('id_role') != 1): ?> <!-- Ganti dari == 1 menjadi != 1 -->
                    <li class="nav-item">
                        <a class="nav-link <?= ($title == "Dashboard") ? 'active' : '' ?> " href="/dashboard">
                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-house text-primary text-dark"></i>
                            </div>
                            <span class="nav-link-text ms-1">Dashboard</span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (session()->get('id_role') != 1): ?> <!-- Ganti dari == 1 menjadi != 1 -->
                    <li class="nav-item">
                        <a class="nav-link <?= ($title == "Report") ? 'active' : '' ?> " href="/report">
                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-database text-primary text-dark"></i>
                            </div>
                            <span class="nav-link-text ms-1">Report</span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (session()->get('id_role') == 4): ?> <!-- Ganti dari == 1 menjadi != 1 -->
                    <li class="nav-item">
                        <a class="nav-link <?= ($title == "Account") ? 'active' : '' ?> " href="/account">
                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-user text-primary text-dark"></i>
                            </div>
                            <span class="nav-link-text ms-1">Account</span>
                        </a>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link id=" logoutBtn" <?= ($title == "Log Out") ? 'active' : '' ?>" href="<?= base_url('logout') ?>">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-key-25 text-primary text-danger"></i>
                        </div>
                        <span class="nav-link-text ms-1">Log Out</span>
                    </a>
                </li>                
            </ul>
        </div>
    </aside>

    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
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
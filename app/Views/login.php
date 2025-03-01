<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
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
</head>

<body class="">
  <?php if ($msg = session()->getFlashdata('msg')) : ?>
    <?php if (is_string($msg)) : ?>
      <div><?= htmlspecialchars($msg) ?></div>
    <?php endif; ?>
  <?php endif; ?>

  <main class="main-content mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Selamat Datang!</h3>
                  <p class="mb-0">Silahkan masukkan username dan password terlebih dahulu yaa!</p>
                  <?php if (session()->getFlashdata('error')) : ?>
                    <div class="alert alert-danger text-white">
                      <?= session()->getFlashdata('error') ?>
                    </div>
                  <?php endif; ?>
                </div>
                <div class="card-body">
                  <form action="/login" method="POST">
                    <label>Username</label>
                    <div class="mb-3">
                      <input type="username" id="username" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="email-addon">
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" id="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                      <label class="form-check-label" for="rememberMe">Ingat saya!</label>
                    </div>
                    <div class="mb-3">
                      <label>Belum punya akun?</label>
                      <a href="/tambahAkun" data-bs-toggle="modal" data-bs-target="#tambahAkun">
                        Buat Akun
                      </a>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Masuk</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('../assets/img/ggf.png')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Modal tambah akun -->
  <div class="modal fade" id="tambahAkun" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Buat Akun Baru</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form action="/storeAkun" method="post">
                      <?= csrf_field(); ?>
                      <div class="modal-body">
                          <div class="form-group">
                              <label for="username">Masukkan Username</label>
                              <input type="text" class="form-control" name="username" id="username">
                          </div>
                          <div class="form-group">
                              <label for="nama">Masukkan Nama</label>
                              <input type="text" class="form-control" name="nama" id="nama">
                          </div>
                          <div class="form-group">
                              <label for="index">Masukkan Index</label>
                              <input type="text" class="form-control" name="index" id="index">
                          </div>
                          <div class="form-group">
                              <label for="password">Masukkan Password</label>
                              <input type="password" class="form-control" name="password" id="password">
                          </div>
                          <input type="hidden" name="id_role" value="1">
                          <div align="center">
                              <button type="submit" class="btn bg-gradient-dark mb-0">Buat Akun</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UKM Tahfidz Qur'an Universitas Airlangga</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/logo_ukm.png" rel="icon">

  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <header id="header" class="d-flex align-items-center">
    <div class="w-100 d-flex align-items-center justify-content-center">

          <a href="index.html" class="logo"><img src="assets/img/logo_ukm.png" alt="" class="img-fluid"></a>
          <h1 class="logo me-5"><a href="index.html">UKM Tahfidz Qur'an<br>Universitas Airlangga</a></h1>

        <nav id="navbar" class="navbar">
          <div class="mx-5">
            <ul>
              <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
              <li><a class="nav-link scrollto" href="#program">Program Tahfidz</a></li>
              <li><a class="nav-link scrollto" href="#publikasi">Publikasi</a></li>
              <li><a class="nav-link scrollto" href="#pengumuman">Pengumuman</a></li>
            </ul>
          </div>
          <div class="ms-5">
            <ul>
              <li><a class="register scrollto" href="register.html">Register</a></li>
              <li><button class="login" data-bs-toggle="modal" data-bs-target="#modalLogin">Login</button></li>
            </ul>
          </div>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
  </header>

  <!-- ======= Login Modal ======= -->
  <div class="modal fade" id="modalLogin" tabindex="-1">
    <div class="modal-lg modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">

            <div class="text-center">
              <h2>Login ke UKM Tahfidz</h2>
              <h3>Saya ingin masuk sebagai:</h3>
            </div>

            <div class="row">
              <div class="col">
                <a href="login.html">
                  <div class="card align-items-center text-center">
                    <img src="assets/img/admin.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h3 class="card-title">Admin UKM Tahfidz</h3>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col">
                <a href="login.html">
                  <div class="card align-items-center text-center">
                    <img src="assets/img/user.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h3 class="card-title">Santri Penghafal</h3>
                    </div>
                  </div>
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div><!-- End Modal -->

  <section id="login" class="mt-5 d-flex align-items-center">
    <div class="container">

      <p><a class="text-black" href="index.html">Beranda</a> / <a href="register.html">Register</a></p>

      <div class="section-title text-center">
        <h2>Registrasi Sekarang</h2>
        <h3>Silahkan lengkapi form registrasi di bawah ini.</h3>
      </div>

      <div class="mb-3">
        <label for="inputNama" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="inputNama">
      </div>
      <div class="mb-3">
        <label for="inputNim" class="form-label">NIM</label>
        <input type="text" class="form-control" id="inputNim">
      </div>
      <div class="mb-3">
        <label for="inputNomorHp" class="form-label">Nomor Handphone (WhatsApp)</label>
        <input type="text" class="form-control" id="inputNomorHp">
      </div>
      <div class="mb-3">
        <label for="inputEmail" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail">
      </div>
      <div class="mb-3">
        <label for="inputPassword" class="form-label">Kata Sandi</label>
        <input type="password" class="form-control" id="inputPassword">
      </div>
      <div class="mb-3">
        <label for="inputJurusan" class="form-label">Jurusan</label>
        <input type="text" class="form-control" id="inputJurusan">
      </div>
      <div class="mb-4">
        <input type="checkbox" class="form-check-input" id="privacyPolicy">
        <label for="privacyPolicy" class="form-label">Saya menyatakan memahami dan setuju dengan <a href="index.html">Kebijakan Privasi registrasi akun Santri UKM Tahfidz Universitas Airlangga</a></label>
      </div>

      <div class="mb-2 pb-4 border-bottom">
        <a class="btn scrollto" href="index.html">Register</a>
      </div>
      <div class="text-center">
        <div class="inline">
          <p>Sudah memiliki akun? <a href="login.html">Login</a></p>
        </div>
      </div>

    </div>
  </section>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
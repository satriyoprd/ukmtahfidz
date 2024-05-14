<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UKM Tahfidz Qur'an Universitas Airlangga</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="{{ asset('assets/img/logo_ukm.png') }}" rel="icon">

  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <header id="header" class="d-flex align-items-center">
        <div class="w-100 d-flex align-items-center justify-content-center">

            <a href="index.html" class="logo"><img src="assets/img/logo_ukm.png" alt="" class="img-fluid"></a>
            <h1 class="logo me-5"><a href="index.html">UKM Tahfidz Qur'an<br>Universitas Airlangga</a></h1>

            <nav id="navbar" class="navbar">
                <div class="mx-5">
                    <ul>
                        <li><a class="nav-link scrollto" href="index.html">Beranda</a></li>
                        <li><a class="nav-link scrollto active" href="tahfidz.html">Program Tahfidz</a></li>
                        <li><a class="nav-link scrollto" href="publikasi.html">Publikasi</a></li>
                        <li><a class="nav-link scrollto" href="#pengumuman">Pengumuman</a></li>
                    </ul>
                </div>
                <div class="ms-5">
                    <ul>
                        <li><a class="register scrollto" href="register.html">Register</a></li>
                        <li><button class="login" data-bs-toggle="modal" data-bs-target="#modalLogin">Login</button>
                        </li>
                    </ul>
                </div>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header>

    <!-- ======= Login Modal ======= -->
  <div class="modal fade" id="modalLogin" tabindex="-1">
    <div class="modal modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">

            <div class="text-center">
              <h2>Login ke UKM Tahfidz</h2>
              <h3>Saya ingin masuk sebagai:</h3>
            </div>

              <a href="login.html">
                <div class="card mb-2">
                  <div class="row">
                    <div class="col-3">
                      <img src="assets/img/santri.png" alt="...">
                    </div>
                    <div class="col-9 my-auto">
                      <div class="card-body">
                        <h3 class="card-title">Santri Penghafal</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              <a href="login.html">
                <div class="card mb-2">
                  <div class="row">
                    <div class="col-3">
                      <img src="assets/img/admin.png" alt="...">
                    </div>
                    <div class="col-9 my-auto">
                      <div class="card-body">
                        <h3 class="card-title">Admin UKM Tahfidz</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              <a href="login.html">
                <div class="card mb-2">
                  <div class="row">
                    <div class="col-3">
                      <img src="assets/img/panitia.png" alt="...">
                    </div>
                    <div class="col-9 my-auto">
                      <div class="card-body">
                        <h3 class="card-title">Panitia UKM Tahfidz</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              <a href="login.html">
                <div class="card mb-2">
                  <div class="row">
                    <div class="col-3">
                      <img src="assets/img/penguji.png" alt="...">
                    </div>
                    <div class="col-9 my-auto">
                      <div class="card-body">
                        <h3 class="card-title">Penguji UKM Tahfidz</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </a>

          </div>
        </div>
      </div>
    </div>
  </div><!-- End Modal -->

  <!-- ======= Warning Modal ======= -->
  <div class="modal fade" id="modalWarning" tabindex="-1">
    <div class="modal modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">

            <div class="text-center">
                <img src="assets/img/warning.png" alt="" class="img-fluid mb-3">
              <h2>Login Untuk Melanjutkan</h2>
              <h3>Silahkan login untuk melanjutkan. Jika Anda belum memiliki akun, register terlebih dahulu</h3>
            </div>

            <div id="dashboard" class="row w-75 mx-auto">
                <div class="col text-center">
                    <a href="register.html" class="btn" style="width: 120px;">Register</a>
                </div>
                <div class="col text-center">
                    <a href="login.html" class="btn" style="width: 120px;">Login</a>
                </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div><!-- End Modal -->

  <!-- ======= Regist Modal ======= -->
  <div class="modal fade" id="modalRegist" tabindex="-1">
    <div class="modal modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">

            <div class="text-center">
              <h2>Registrasi Program</h2>
              <h3>Silahkan lengkapi form registrasi di bawah ini:</h3>
            </div>

            <div id="login">
              <div class="mb-2">
                <label for="inputNama" class="form-label mb-0">Nama Lengkap</label>
                <input type="text" class="form-control form-control-sm" id="inputNama">
              </div>
              <div class="mb-2">
                <label for="inputNim" class="form-label mb-0">NIM</label>
                <input type="text" class="form-control form-control-sm" id="inputNim">
              </div>
              <div class="mb-2">
                <label for="inputNomorHp" class="form-label mb-0">Nomor Handphone (WhatsApp)</label>
                <input type="text" class="form-control form-control-sm" id="inputNomorHp">
              </div>
              <div class="mb-2">
                <label for="inputEmail" class="form-label mb-0">Email</label>
                <input type="email" class="form-control form-control-sm" id="inputEmail">
              </div>
              <div class="mb-2">
                <label for="inputJmlHafalan" class="form-label mb-0">Jumlah Hafalan</label>
                <input type="password" class="form-control form-control-sm" id="inputJmlHafalan">
              </div>
              <div class="row mb-3">
                <div class="col">
                  <label for="inputFakultas" class="form-label mb-0">Fakultas</label>
                  <select class="form-select form-select-sm" id="inputFakultas">
                    <option selected disabled>Pilih Fakultas</option>
                    <option>Fakultas 1</option>
                    <option>Fakultas 2</option>
                    <option>Fakultas 3</option>
                  </select>
                </div>
                <div class="col">
                  <label for="inputJurusan" class="form-label mb-0">Jurusan</label>
                  <select class="form-select form-select-sm" id="inputJurusan">
                    <option selected disabled>Pilih Jurusan</option>
                    <option>Jurusan 1</option>
                    <option>Jurusan 2</option>
                    <option>Jurusan 3</option>
                  </select>
                </div>
              </div>
              <a class="btn" href="">Daftar Program</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div><!-- End Modal -->

    <section id="dashboard" class="mt-5 pb-0">
        <div class="container">
    
            <p><a class="text-black" href="index.html">Beranda</a> / <a href="">Program Tahfidz</a></p>

            <div class="section-title mt-5">
                <h3>Program Tahfidz</h3>
                <h2>UKM Tahfidz Universitas Airlangga</h2>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Setoran</h5>
                            <p class="card-text">Program inti di UKM-TQ yang disusun oleh Departemen Kelas Tahfidz berupa setoran hafalan Al-Qur'an oleh santri kepada penyimak (asatidz) yang bertempat di dua masjid UNAIR</p>
                            <button class="btn" data-bs-toggle="modal" data-bs-target="#modalRegist">Daftar</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ujian Sertifikasi</h5>
                            <p class="card-text">Program ujian hafalan Al-Qur'an kelipatan 5 juz dengan sistem lanjut ayat. Santri yang mendapat nilai diatas nilai yang ditentukan akan mendapat beasiswa berupa bebas UKT untuk satu semester</p>
                            <button class="btn" data-bs-toggle="modal" data-bs-target="#modalWarning">Daftar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Kajian</h5>
                            <p class="card-text">Program penyelenggaraan kajian mengenai adab penghafal Al-Qur'an baik dan kajian tafsir dengan tema yang mengangkat kehidupan sehari-hari dan hal-hal yang ada di masyarakat</p>
                            <button class="btn" data-bs-toggle="modal" data-bs-target="#modalWarning">Daftar</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Dauroh</h5>
                            <p class="card-text">Program karantina hafalan dalam 6 hari, yang dilaksanakan di selah-selah liburan atau sebelum dimulainya perkuliahan dan diwajibkan bagi penerima beasiswa sertifikasi</p>
                            <button class="btn" data-bs-toggle="modal" data-bs-target="#modalWarning">Daftar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tasmi'an</h5>
                            <p class="card-text">Program lanjutan dari ujian sertifikasi. Santri penerima beasiswa akan mendapatkan 1 Juz dari hafalan yang sudah disertifikasikan untuk dibaca bil ghaib pada hari yang telah ditentukan panitia</p>
                            <button class="btn" data-bs-toggle="modal" data-bs-target="#modalWarning">Daftar</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ikea (Gathering)</h5>
                            <p class="card-text">Ikatan keluarga Al-Quran atau disingkat IKEA merupakan sebuah kegiatan gathering yang bertujuan untuk mempererat ukhuwah antar pengurus, santri, dan asatidz UKM Tahfidzul Quran UNAIR</p>
                            <button class="btn" data-bs-toggle="modal" data-bs-target="#modalWarning">Daftar</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ======= Footer Section ======= -->
    <section id="footer" class="footer pb-0">
        <div class="container">

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7571317010115!2d112.78204018368717!3d-7.268455448569584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa21117097cf%3A0x42c29739e70df5ca!2sMasjid%20Ulul%20&#39;Azmi!5e0!3m2!1sen!2sid!4v1713600038357!5m2!1sen!2sid"
                            frameborder="0" style="border:0; width: 100%; height: 320px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <div class="info">
                        <div class="d-flex align-items-center mb-5">
                            <img src="assets/img/logo_ukm.png" alt="" class="img-fluid">
                            <h4>UKM Tahfidz Qur'an<br>Universitas Airlangga</h4>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <p class="mb-4">MENU</p>
                                <a class="d-block mb-3 scrollto" href="#profil">Profil</a>
                                <a class="d-block mb-3 scrollto" href="#departemen">Departemen</a>
                                <a class="d-block mb-3 scrollto" href="#berita">Berita</a>
                                <a class="d-block mb-3 scrollto" href="#pengumuman">Pengumuman</a>
                            </div>
                            <div class="col-5">
                                <p class="mb-4">HUBUNGI KAMI</p>
                                <div class="mb-3">
                                    <div class="d-inline-block align-top">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                    <div class="d-inline-block" style="width: 90%;">
                                        <a href="mailto:tahfidzukmunair@mail.com">tahfidzukmunair@mail.com</a>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-inline-block align-top">
                                        <i class="bi bi-telephone"></i>
                                    </div>
                                    <div class="d-inline-block" style="width: 90%;">
                                        <a href="">+62 666655544433</a>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-inline-block align-top">
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </div>
                                    <div class="d-inline-block" style="width: 90%;">
                                        <a href="">Jl. Dr. Ir. H. Soekarno, Mulyorejo, Kec. Mulyorejo, Surabaya,
                                            Jawa
                                            Timur 60115</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <p class="mb-4">IKUTI KAMI</p>
                                <div class="mb-3">
                                    <div class="d-inline-block align-top">
                                        <i class="bi bi-instagram"></i>
                                    </div>
                                    <div class="d-inline-block" style="width: 80%;">
                                        <a href="">Instagram</a>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-inline-block align-top">
                                        <i class="bi bi-youtube"></i>
                                    </div>
                                    <div class="d-inline-block" style="width: 80%;">
                                        <a href="">YouTube</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="copyright">
                <div class="row">
                    <div class="col">
                        <img src="assets/img/logo_ukm.png" class="img-fluid" alt="">
                        <img src="assets/img/logo_PENS.png" class="img-fluid" alt="">
                        <p>Powered by Satriyo Yoga Pradana</p>
                    </div>
                    <div class="col text-end">
                        <p>Hak Cipta &#169;2024 Satriyo</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Footer Section -->

    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("assets/vendor/glightbox/js/glightbox.min.js")}}"></script>
    <script src="{{asset("assets/vendor/isotope-layout/isotope.pkgd.min.js")}}"></script>
    <script src="{{asset("assets/vendor/swiper/swiper-bundle.min.js")}}"></script>
    <script src="{{asset("assets/vendor/php-email-form/validate.js")}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset("assets/js/main.js")}}"></script>

</body>

</html>

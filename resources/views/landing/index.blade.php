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

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="w-100 d-flex align-items-center justify-content-center">

          <a href="index.html" class="logo"><img src="assets/img/logo_ukm.png" alt="" class="img-fluid"></a>
          <h1 class="logo me-5"><a href="index.html">UKM Tahfidz Qur'an<br>Universitas Airlangga</a></h1>

        <nav id="navbar" class="navbar">
          <div class="mx-5">
            <ul>
              <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
              <li><a class="nav-link scrollto" href="tahfidz.html">Program Tahfidz</a></li>
              <li><a class="nav-link scrollto" href="#publikasi">Publikasi</a></li>
              <li><a class="nav-link scrollto" href="#pengumuman">Pengumuman</a></li>
            </ul>
          </div>
          <div class="ms-5">
            <ul>
              <li><a class="register" href="register.html">Register</a></li>
              <li><button class="login" data-bs-toggle="modal" data-bs-target="#modalLogin">Login</button></li>
            </ul>
          </div>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Login Modal ======= -->
  <div class="modal fade" id="modalLogin" tabindex="-1">
    <div class="modal modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">

            <div class="text-center">
              <h2>Login ke UKM Tahfidz</h2>
              <h3>Saya ingin masuk sebagai:</h3>
            </div>

              <a href={{route("login")}}>
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
              <a href={{route("login")}}>
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
              <a href={{route("login")}}>
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
              <a href={{route("login")}}>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="container">

      <div class="row my-5">
        <div class="col-7">
          <div class="mt-5 pt-5">
            <h1>UKM Tahfidz Qur'an<br>Universitas Airlangga</h1>
            <h2>Excellence with Qur'an</h2>
            <a class="btn scrollto" href="tahfidz.html">Lihat Program</a>
          </div>
        </div>
        <div class="col-5">
          <img src="assets/img/hero.png" class="img-fluid my-5" alt="">
        </div>
      </div>

      <div class="text-center">
        <a class="selengkapnya scrollto" href="#profil">Lihat Selengkapnya <i class="bi bi-arrow-down"></i></a>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Profil Section ======= -->
    <section id="profil" class="profil">
      <div class="container">

        <div class="row">
          <div class="col">
            <div class="image-stack">
              <div class="image-top">
                <img src="assets/img/circle.png" class="img-fluid" alt="">
              </div>
              <div class="image-bottom">
                <img src="assets/img/profil.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
          <div class="col px-5">

            <div class="section-title">
              <h3>Profil</h3>
              <h2>UKM Tahfidz<br>Universitas Airlangga</h2>
            </div>
            
            <div class="mb-2">
              <p>Menjadi wadah yang kondusif untuk menjaga dan menambah hafalan Al-Quran mahasiswa Universitas Airlangga menuju generasi Qurani yang beriman dan bertakwa kepada Allah SWT</p>
            </div>
            <a class="btn scrollto" href="#visimisi" onclick="showVisi()">Pelajari Lebih Lanjut</a>
            <div class="image-2">
              <img src="assets/img/circle.png" class="img-fluid" alt="">
            </div>

          </div>
        </div>
        
        <div class="image-3">
          <img src="assets/img/circle.png" class="img-fluid" alt="">
        </div>

        <div id="visimisi" style="display: none;">
          <div class="section-title mt-5 pb-0">
            <h3>Visi dan Misi</h3>
            <h2>UKM Tahfidz Universitas Airlangga</h2>
          </div>
  
          <div class="content mb-4">
            <div class="section-title pb-0">
              <h3>Visi</h3>
            </div>
            <p>Menjadi wadah yang kondusif untuk menjaga dan menambah hafalan Al-Quran mahasiswa Universitas Airlangga menuju generasi Qurani yang beriman dan bertakwa kepada Allah SWT.</p>
          </div>
          <div class="content">
            <div class="section-title pb-0">
              <h3>Misi</h3>
            </div>
            <p>1. Mengembangkan potensi mahasiswa Universitas Airlangga di bidang Al-Quran <br>
              2. Mengoptimalkan silaturahim mahasiswa penghafal Al-Quran Universitas Airlangga <br>
              3. Mewujudkan kepengurusan yang harmonis dan amanah dengan suasana kekeluargaan <br>
              4. Menyelenggarakan kegiatan syiar Al-Quran di Universitas Airlangga <br>
              5. Meningkatkan wawasan dan kecintaan mahasiswa Universitas Airlangga terhadap Al-Quran <br>
              6. Menyelenggarakan kegiatan untuk muroja'ah, setoran, ujian, dan khataman Al-Quran secara terstruktur dan istiqomah di kampus A, B, dan C Universitas Airlangga</p>
          </div>
        </div>

      </div>
    </section><!-- End Profil Section -->

    <!-- ======= Departemen Section ======= -->
    <section id="departemen" class="departemen">
      <div class="container">

        <div class="section-title">
          <h3>Departemen</h3>
          <h2>UKM Tahfidz Universitas Airlangga</h2>
        </div>

        <div class="departemen-slider swiper p-1">
          <div class="swiper-wrapper align-items-center">
            <div class="card swiper-slide">
              <div class="card-body">
                <div class="departemen-title">
                  <h2>Departemen Kelas Tahfidz</h2>
                </div>
                <p class="card-text">Kelas Tahfidz merupakan departemen yang bertanggungjawab pada kegiatan inti dari UKM Tahfidzul Quran UNAIR yaitu melakukan setoran hafalan</p>
                <a class="btn" href="departemen_tahfidz.html">Pelajari Lebih Lanjut</a>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="card-body">
                <div class="departemen-title">
                  <h2>Departemen Munaqosyah</h2>
                </div>
                <p class="card-text">Munaqosyah merupakan departemen yang bergerak dalam bidang pengembangan dan penjagaan hafalan Al-Quran mahasiswa khususnya santri UKM Tahfidz UNAIR</p>
                <a class="btn" href="departemen_munaqosyah.html">Pelajari Lebih Lanjut</a>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="card-body">
                <div class="departemen-title">
                  <h2>Departemen Mudarosah</h2>
                </div>
                <p class="card-text">Mudarosah merupakan departemen yang berfokus pada pengajaran dan pembinaan MHQ & MFQ untuk perlombaan dikti maupun non dikti</p>
                <a class="btn" href="departemen_mudarosah.html">Pelajari Lebih Lanjut</a>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="card-body">
                <div class="departemen-title">
                  <h2>Departemen Ukhuwah</h2>
                </div>
                <p class="card-text">Ukhuwah merupakan departemen yang menyelenggarakan berbagai kegiatan mengenai keakraban dan silaturahim hafidz-hafidzah UNAIR lintas generasi</p>
                <a class="btn" href="departemen_ukhuwah.html">Pelajari Lebih Lanjut</a>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="card-body">
                <div class="departemen-title">
                  <h2>Departemen Syiar</h2>
                </div>
                <p class="card-text">Syiar merupakan departemen yang melakukan berbagai aktivitas yang berhubungan dengan kegiatan pdd yaitu publikasi, dokumentasi, dan desain</p>
                <a class="btn" href="departemen_syiar.html">Pelajari Lebih Lanjut</a>
              </div>
            </div>
          </div>
          <div class="swiper-pagination pt-4"></div>
        </div>


      </div>
    </section><!-- End Departemen Section -->

    <!-- ======= Publikasi Section ======= -->
    <section id="publikasi" class="berita">
      <div class="container">
        <div class="row">

          <div class="col-5 my-auto">
            <div class="section-title pb-0">
              <h3>Publikasi</h3>
              <h2>UKM Tahfidz<br>Universitas<br>Airlangga</h2>
            </div>
            <div class="pe-5">
              <p>Berisikan mengenai beberapa berita terkait kegiatan kegiatan yang ada di UKM Tahfdiz Universitas Airlangga yang dapat digunakan sebagai bahan bacaan</p>
            </div>
            <a class="btn scrollto" href="publikasi.html">Lihat Semua Publikasi</a>
          </div>

          <div class="col-7">
            <div class="row">
              <div class="col">
                <div class="card m-auto" style="width: 90%;">
                  <img src="assets/img/berita.png" class="card-img-top" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Illiza: Kami Bangga Menunjukkan 'Banda Aceh Islamic Smart City' Kepada Dunia</h5>
                    <p class="card-text">Illiza: Kami Bangga Menunjukkan 'Banda Aceh Islamic Smart City' Kepada Dunia...</p>
                    <a href="#" class="btn btn-primary">Baca Lebih Lengkap</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card m-auto" style="width: 90%;">
                  <img src="assets/img/berita.png" class="card-img-top" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Kampanye Imunisasi MR/Cam-pak Rubella: Strategi Kampanye Imunisasi MR</h5>
                    <p class="card-text">Indonesia telah berkomitmen untuk mencapai eliminasi Campak dan pengendalian Rubella/Congenital Rub...</p>
                    <a href="#" class="btn btn-primary">Baca Lebih Lengkap</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Publikasi Section -->

    <!-- ======= Pengumuman Section ======= -->
    <section id="pengumuman" class="pengumuman">
      <div class="container">
        <div class="content">
          <div class="row">
            <div class="col-7 my-auto">
              <div class="section-title pb-0">
                <h3>Pengumuman</h3>
                <h2>UKM Tahfidz<br>Universitas Airlangga</h2>
              </div>
              <div class="pe-5">
                <p>Berisikan mengenai beberapa berita terkait kegiatan kegiatan yang ada di UKM Tahfdiz Universitas Airlangga yang dapat digunakan sebagai bahan bacaan</p>
              </div>
              <a class="btn scrollto" href="#pengumuman">Cek Pengumuman</a>
            </div>
            <div class="col-5">
              <img src="assets/img/pengumuman.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Pengumuman Section -->

    <!-- ======= Footer Section ======= -->
    <section id="footer" class="footer pb-0">
      <div class="container">

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7571317010115!2d112.78204018368717!3d-7.268455448569584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa21117097cf%3A0x42c29739e70df5ca!2sMasjid%20Ulul%20&#39;Azmi!5e0!3m2!1sen!2sid!4v1713600038357!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 320px;" allowfullscreen></iframe>
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
                  <a class="d-block mb-3 scrollto" href="#berita">Publikasi</a>
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
                      <a href="">Jl. Dr. Ir. H. Soekarno, Mulyorejo, Kec. Mulyorejo, Surabaya, Jawa Timur 60115</a>
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("assets/vendor/glightbox/js/glightbox.min.js")}}"></script>
    <script src="{{asset("assets/vendor/isotope-layout/isotope.pkgd.min.js")}}"></script>
    <script src="{{asset("assets/vendor/swiper/swiper-bundle.min.js")}}"></script>
    <script src="{{asset("assets/vendor/php-email-form/validate.js")}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset("assets/js/main.js")}}"></script>

  <script>
    function showVisi() {
      var element = document.getElementById("visimisi");
      if (element.style.display == "none") {
        element.style.display = "block";
      }
    };
  </script>

</body>

</html>
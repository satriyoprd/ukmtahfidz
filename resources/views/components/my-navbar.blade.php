<header id="header" class="d-flex align-items-center">
    <div class="w-100 d-flex align-items-center justify-content-center">

        <a href="index.html" class="logo"><img src="assets/img/logo_ukm.png" alt="" class="img-fluid"></a>
        <h1 class="logo me-5"><a href="index.html">UKM Tahfidz Qur'an<br>Universitas Airlangga</a></h1>

        <nav id="navbar" class="navbar">
            <div class="mx-5">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="tahfidz.html">Program Tahfidz</a></li>
                    <li><a class="nav-link scrollto" href="publikasi.html">Publikasi</a></li>
                    <li><a class="nav-link scrollto" href="#pengumuman">Pengumuman</a></li>
                </ul>
            </div>
            <div class="ms-5">
                <ul>
                    <li><a class="register scrollto" href={{ route('register') }}>Register</a></li>
                    <li><button class="login" data-bs-toggle="modal" data-bs-target="#modalLogin">Login</button>
                    </li>
                </ul>
            </div>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>

<x-modal-login />

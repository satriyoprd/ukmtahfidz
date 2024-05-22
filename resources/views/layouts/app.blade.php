<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>UKM Tahfidz Qur'an Universitas Airlangga</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="{{ asset('assets/img/logo_ukm.png') }}" rel="icon">

    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">


</head>

<body class="font-sans antialiased">
    <!-- Page Content -->
    <main>
        <x-my-navbar />
        {{ $slot }}
        <x-my-footer />
    </main>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        function dashboardSetoran() {
            document.getElementById("dashboardTitle").innerHTML = "Setoran";
            document.getElementById("tableSetoran").style.display = "table";
            document.getElementById("tableUjian").style.display = "none";
            document.getElementById("tableAbsen").style.display = "none";
        };

        function dashboardUjian() {
            document.getElementById("dashboardTitle").innerHTML = "Ujian";
            document.getElementById("tableUjian").style.display = "table";
            document.getElementById("tableSetoran").style.display = "none";
            document.getElementById("tableAbsen").style.display = "none";
        };

        function dashboardAbsen() {
            document.getElementById("dashboardTitle").innerHTML = "Absen";
            document.getElementById("tableAbsen").style.display = "table";
            document.getElementById("tableSetoran").style.display = "none";
            document.getElementById("tableUjian").style.display = "none";
        };
    </script>
</body>

</html>

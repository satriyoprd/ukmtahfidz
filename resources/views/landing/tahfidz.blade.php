<x-app-layout>
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
                            <p class="card-text">Program inti di UKM-TQ yang disusun oleh Departemen Kelas Tahfidz
                                berupa
                                setoran hafalan Al-Qur'an oleh santri kepada penyimak (asatidz) yang bertempat di dua
                                masjid
                                UNAIR</p>

                            @if (Auth::check() && Auth::user()->role_id == config('constants.ROLE_SANTRI'))
                                @if (Auth::user()->santri->verifiedSetoran)
                                    <div class="text-green-500 font-semibold"><span>Sudah daftar</span> <i
                                            class="fa-solid fa-circle-check"></i></div>
                                @else
                                    @if (Auth::user()->role_id == 3)
                                        @if (is_null(Auth::user()->santri->jumlah_hafalan))
                                            <button class="btn" data-bs-toggle="modal"
                                                data-bs-target="#modalSetoran">
                                                Daftar
                                            </button>
                                        @else
                                            <form action={{ route('santri-verified-setoran.store') }} method="post">
                                                @csrf
                                                <button type="submit" class="btn">
                                                    Daftar
                                                </button>
                                            </form>
                                        @endif
                                    @else
                                        <button class="btn" data-bs-toggle="modal"
                                            data-bs-target="#modalWarning">Daftar</button>
                                    @endif
                                @endif
                            @endif

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ujian Sertifikasi</h5>
                            <p class="card-text">Program ujian hafalan Al-Qur'an kelipatan 5 juz dengan sistem lanjut
                                ayat.
                                Santri yang mendapat nilai diatas nilai yang ditentukan akan mendapat beasiswa berupa
                                bebas
                                UKT untuk satu semester</p>
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
                            <p class="card-text">Program penyelenggaraan kajian mengenai adab penghafal Al-Qur'an baik
                                dan
                                kajian tafsir dengan tema yang mengangkat kehidupan sehari-hari dan hal-hal yang ada di
                                masyarakat</p>
                            <button class="btn" data-bs-toggle="modal" data-bs-target="#modalWarning">Daftar</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Dauroh</h5>
                            <p class="card-text">Program karantina hafalan dalam 6 hari, yang dilaksanakan di
                                selah-selah
                                liburan atau sebelum dimulainya perkuliahan dan diwajibkan bagi penerima beasiswa
                                sertifikasi</p>
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
                            <p class="card-text">Program lanjutan dari ujian sertifikasi. Santri penerima beasiswa akan
                                mendapatkan 1 Juz dari hafalan yang sudah disertifikasikan untuk dibaca bil ghaib pada
                                hari
                                yang telah ditentukan panitia</p>
                            <button class="btn" data-bs-toggle="modal" data-bs-target="#modalWarning">Daftar</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ikea (Gathering)</h5>
                            <p class="card-text">Ikatan keluarga Al-Quran atau disingkat IKEA merupakan sebuah kegiatan
                                gathering yang bertujuan untuk mempererat ukhuwah antar pengurus, santri, dan asatidz
                                UKM
                                Tahfidzul Quran UNAIR</p>
                            <button class="btn" data-bs-toggle="modal" data-bs-target="#modalWarning">Daftar</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</x-app-layout>


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
                        <button class="btn" style="width: 120px;" data-bs-toggle="modal"
                            data-bs-target="#modalRegister">Register</a>
                    </div>
                    <div class="col text-center">
                        <button class="btn" data-bs-toggle="modal" data-bs-target="#modalLogin">Login</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- ======= Warning Modal ======= -->
<div class="modal fade" id="modalSetoran" tabindex="-1">
    <div class="modal modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <p class="text-2xl font-bold text-center">
                    Pemberitahuan
                </p>
                <div class="text-center font-semibold">
                    Harap mengisi jumlah hafala terlebih dahulu
                </div>

                <a href={{ route('profile.edit') }} class=" text-white my-2"><button
                        class="bg-green-800 text-white py-2 rounded-lg w-full mt-4">Halaman Profile</button></a>
            </div>
        </div>
    </div>
</div>

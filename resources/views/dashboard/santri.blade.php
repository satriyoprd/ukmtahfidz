<x-app-layout>
    <section id="dashboard" class="mt-5 pb-0">
        <div class="container">

            <p><a class="text-black" href={{ route('home') }}>Beranda</a> / <a href="">Hafalan Saya</a></p>

            <div class="welcome mb-5">
                <div class="row">
                    <div class="col-3">
                        <img src="assets/img/welcome.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-9 my-auto">
                        <div class="section-title pb-0">
                            <h2>Selamat Datang di Hafalan Anda</h2>
                            <h3>Halaman ini merupakan halaman hafalan Anda yang digunakan untuk memantau kegiatan
                                hafal dan progress Anda</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <div class="section-title pb-0">
                        <h2 id="dashboardTitle">Setoran</h2>
                    </div>
                </div>
                <div class="col-1">
                    <div class="dropdown">
                        <button class="btn btn-sm btn-dashboard" type="button" id="dropdownMenu"
                            data-bs-toggle="dropdown">
                            <i class="bi bi-caret-down-fill"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenu"
                            style="--bs-dropdown-link-active-bg: none">
                            <li><button class="dropdown-item text-black" onclick="dashboardSetoran()">Setoran</button>
                            </li>
                            <li><button class="dropdown-item text-black" onclick="dashboardUjian()">Ujian</button>
                            </li>
                            <li><button class="dropdown-item text-black" onclick="dashboardAbsen()">Absen</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-9">
                    <div class="float-end w-50">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-search"></i></span>
                            <input type="text" class="form-control" placeholder="Cari Data">
                        </div>
                    </div>
                </div>
            </div>

            <table id="tableSetoran" style="display: table;" class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center" style="background: #CCCF95; width: 15%;">Tgl Setoran</th>
                        <th class="text-center" style="background: #CCCF95; width: 15%;">Surat</th>
                        <th class="text-center" style="background: #CCCF95; width: 15%;">Jumlah Setoran</th>
                        <th class="text-center" style="background: #CCCF95; width: 15%;">Nilai</th>
                        <th class="text-center" style="background: #CCCF95; width: 30%;">Catatan</th>
                        <th class="text-center" style="background: #CCCF95; width: 10%;">Status</th>
                        <th class="text-center" style="background: #CCCF95; width: 10%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>DummySetoran</td>
                        <td>DummySetoran</td>
                        <td>DummySetoran</td>
                        <td>DummySetoran</td>
                        <td>DummySetoran</td>
                        <td>Lanjut</td>
                        <td class="text-center"><a href={{ route('dashboard.santri.setoran', 2) }} class="btn btn-sm"
                                type="button"><i class="bi bi-journal-text"></i></a></td>
                    </tr>
                </tbody>
            </table>

            <table id="tableUjian" style="display: none;" class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center" style="background: #CCCF95; width: 15%;">Tgl Ujian</th>
                        <th class="text-center" style="background: #CCCF95; width: 15%;">Surat</th>
                        <th class="text-center" style="background: #CCCF95; width: 15%;">Jumlah Hafalan</th>
                        <th class="text-center" style="background: #CCCF95; width: 15%;">Nilai</th>
                        <th class="text-center" style="background: #CCCF95; width: 30%;">Catatan</th>
                        <th class="text-center" style="background: #CCCF95; width: 10%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>DummyUjian</td>
                        <td>DummyUjian</td>
                        <td>DummyUjian</td>
                        <td>DummyUjian</td>
                        <td>DummyUjian</td>
                        <td class="text-center"><a href={{ route('dashboard.santri.ujian', 2) }} class="btn btn-sm"
                                type="button"><i class="bi bi-journal-text"></i></a></td>
                    </tr>
                </tbody>
            </table>

            <div id="tableAbsen" style="display: none;">Under Maintenance</div>

        </div>
    </section>



</x-app-layout>

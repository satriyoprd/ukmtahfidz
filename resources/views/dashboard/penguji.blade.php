<x-app-layout>
    <section id="dashboard" class="mt-5 pb-0">
        <div class="container">

            <p><a class="text-black" href="index.html">Beranda</a> / <a href="">Dashboard</a></p>

            <div class="welcome mb-5">
                <div class="row">
                    <div class="col-3">
                        <img src="assets/img/welcome.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-9 my-auto">
                        <div class="section-title pb-0">
                            <h2>Halo Penguji!!</h2>
                            <h3>Halaman ini merupakan halaman yang Anda gunakan untuk melakukan pengelolaan data santri
                                penghafal</h3>
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
                            <li><button class="dropdown-item text-black" onclick="dashboardUjian()">Ujian</button></li>
                            <li><button class="dropdown-item text-black" onclick="dashboardAbsen()">Absen</button></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row mb-2">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="col-5">
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-search"></i></span>
                        <input type="text" class="form-control" placeholder="Cari Data">
                    </div>
                </div>
                <div class="col-7">
                    <div class="float-end w-25">
                        <a class="btn" href={{ route('dashboard.penguji.setoran.create') }}>Tambah Data</a>
                    </div>
                </div>
            </div>

            <table id="tableSetoran" style="display: table;" class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center" style="background: #CCCF95; width: 14%;">Tgl Setoran</th>
                        <th class="text-center" style="background: #CCCF95; width: 14%;">Nama Santri</th>
                        <th class="text-center" style="background: #CCCF95; width: 14%;">Surat</th>
                        <th class="text-center" style="background: #CCCF95; width: 14%;">Jumlah Setoran</th>
                        <th class="text-center" style="background: #CCCF95; width: 14%;">Nilai</th>
                        <th class="text-center" style="background: #CCCF95; width: 20%;">Catatan</th>
                        <th class="text-center" style="background: #CCCF95; width: 20%;">Status</th>
                        <th class="text-center" style="background: #CCCF95; width: 10%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($setoran as $s)
                        <tr>
                            <td>{{ $s->tanggal_setoran }}</td>
                            <td>{{ $s->santri->user->name }}</td>
                            <td>{{ $s->surat }}</td>
                            <td>{{ $s->jumlah_setoran }}</td>
                            <td>{{ $s->nilai }}</td>

                            <td>{{ $s->catatan }}</td>
                            <td>
                                @if ($s->status)
                                    <p>Lanjut</p>
                                @else
                                    <p>Menunggu</p>
                                @endif
                            </td>
                            <td class="text-center"><a href={{ route('dashboard.penguji.setoran.update', $s->id) }}
                                    class="btn btn-sm" type="button"><i class="bi bi-pencil-fill"></i></a>
                                <form action={{ route('setoran.destroy', $s->id) }} method="POST">

                                    @csrf
                                    @method('delete')

                                    <button class="btn btn-sm btn-delete" type="submit"><i
                                            class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <table id="tableUjian" style="display: none;" class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center" style="background: #CCCF95; width: 14%;">Tgl Ujian</th>
                        <th class="text-center" style="background: #CCCF95; width: 14%;">Nama Santri</th>
                        <th class="text-center" style="background: #CCCF95; width: 14%;">Surat</th>
                        <th class="text-center" style="background: #CCCF95; width: 14%;">Jumlah Hafalan</th>
                        <th class="text-center" style="background: #CCCF95; width: 14%;">Nilai</th>
                        <th class="text-center" style="background: #CCCF95; width: 20%;">Catatan</th>
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
                        <td>DummyUjian</td>
                        <td class="text-center"><a href={{ route('dashboard.penguji.ujian.update', 2) }}
                                class="btn btn-sm" type="button"><i class="bi bi-pencil-fill"></i></a><button
                                class="btn btn-sm btn-delete" type="button"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div id="tableAbsen" style="display: none;">Under Maintenance</div>

        </div>
    </section>
</x-app-layout>

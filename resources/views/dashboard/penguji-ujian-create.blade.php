<x-app-layout>
    <section id="dashboard" class="my-5 pb-0">
        <div class="container">

            <p><a class="text-black" href={{route('dashboard.penguji')}}>Beranda</a> / <a href="">Dashboard</a></p>

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

            <div class="section-title">
                <h2>Ujian</h2>
            </div>
            <div id="edit">
                <div class="row mb-3">
                    <div class="col-2 my-auto">
                        <label for="inputTglSetoran" class="form-label mb-0">Tgl Ujian</label>
                    </div>
                    <div class="col-10">
                        <input type="date" class="form-control form-control-sm" id="inputTglSetoran">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-2 my-auto">
                        <label for="inputNamaSantri" class="form-label mb-0">Nama Santri</label>
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control form-control-sm" id="inputNamaSantri">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-2 my-auto">
                        <label for="inputSurat" class="form-label mb-0">Surat</label>
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control form-control-sm" id="inputSurat">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-2 my-auto">
                        <label for="inputJmlSetoran" class="form-label mb-0">Jumlah Hafalan</label>
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control form-control-sm" id="inputJmlSetoran">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-2 my-auto">
                        <label for="inputNilai" class="form-label mb-0">Nilai</label>
                    </div>
                    <div class="col-10">
                        <input type="number" class="form-control form-control-sm" id="inputNilai">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-2 my-auto">
                        <label for="inputCatatan" class="form-label mb-0">Catatan</label>
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control form-control-sm" id="inputCatatan">
                    </div>
                </div>
                <div class="float-end">
                    <a class="btn" href="">Simpan</a>
                    <a class="btn back" href="">Kembali</a>
                </div>
            </div>

        </div>
    </section>
</x-app-layout>

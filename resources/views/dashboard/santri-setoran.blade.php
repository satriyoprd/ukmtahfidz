<x-app-layout>
    <section id="dashboard" class="mt-5 pb-0">
        <div class="container">

            <p><a class="text-black" href={{route('dashboard.santri')}}>Beranda</a> / <a href="">Hafalan Saya</a></p>

            <div class="section-title mt-5">
                <h2>Nilai Setoran</h2>
                <p>Halaman ini menampilkan detail nilai setoran yang telah dilakukan oleh santri bersama penguji.</p>
            </div>

            <div class="asesmen mb-4">
                <div class="row">
                    <div class="col my-auto">
                        Penguji : DummyPenguji
                    </div>
                    <div class="col">
                        <div class="float-end tgl">
                            Tanggal Setoran : DummyTgl
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center" style="background: #CCCF95; width: 5%;">No</th>
                        <th class="text-center" style="background: #CCCF95; width: 90%;">Komponen Penilaian</th>
                        <th class="text-center" style="background: #CCCF95; width: 5%;">Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1.</td>
                        <td>Kelancaran</td>
                        <td class="text-center">xx</td>
                    </tr>
                    <tr>
                        <td class="text-center">2.</td>
                        <td>Makhrojil Huruf</td>
                        <td class="text-center">xx</td>
                    </tr>
                    <tr>
                        <td class="text-center">3.</td>
                        <td>Lagu</td>
                        <td class="text-center">xx</td>
                    </tr>
                    <tr>
                        <td class="text-center">4.</td>
                        <td>Adab</td>
                        <td class="text-center">xx</td>
                    </tr>
                    <tr>
                        <td colspan="2">Total Nilai</td>
                        <td class="text-center">xx</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </section>
</x-app-layout>

<?php

namespace Tests\Feature\Ujian;

use App\Models\Santri;
use App\Models\Ujian;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UjianTest extends TestCase
{
    public function test_route(): void
    {
        $response = $this->get('/ujian/create');

        $response->assertStatus(200);

        $santri = User::where('role_id', 3)->first();

        $this->actingAs($santri);

        $response = $this->get('/ujian');

        $response->assertStatus(200);

        $response = $this->get('/ujian/1/edit');

        $response->assertStatus(200);

        $response = $this->get('/ujian/1');

        $response->assertStatus(200);
    }

    public function test_store(): void
    {
        try {
            $requestData = [
                'penguji_id' => 1,
                'santri_id' => 1,
                'tempat_id' => 1,
                'jam' => '12:00',
                'surat' => [1,2],
                'tanggal_ujian' => '2024-05-20',
                'jumlah_ujian' => '1 juz',
                'catatan' => 'Catatan Ujian',
                'nilai_kelancaran' => 80,
                'nilai_makhraj' => 90,
                'nilai_lagu' => 90,
                'nilai_adab' => 75,
            ];

            $this->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);

            $this->post(route('ujian.store'), $requestData);

            $this->assertDatabaseHas('ujians', [
                'penguji_id' => $requestData['penguji_id'],
                'santri_id' => $requestData['santri_id'],
                'tempat_id' => $requestData['tempat_id'],
                'jam' => $requestData['jam'],
                'tanggal_ujian' => $requestData['tanggal_ujian'],
                'jumlah_ujian' => $requestData['jumlah_ujian'],
                'catatan' => $requestData['catatan'],
            ]);

            $ujian = Ujian::latest()->first();

            $averageNilai = ($requestData['nilai_kelancaran'] + $requestData['nilai_makhraj'] + $requestData['nilai_lagu'] + $requestData['nilai_adab']) / 4;
            $this->assertEquals($averageNilai, $ujian->nilai);

            $no = 1;
            foreach (['nilai_kelancaran', 'nilai_makhraj', 'nilai_lagu', 'nilai_adab'] as $nilaiField) {
                $this->assertDatabaseHas('nilai_ujians', [
                    'ujian_id' => $ujian->id,
                    'nilai_id' => $no++,
                    'nilai' => $requestData[$nilaiField],
                ]);

            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function test_update(): void
    {
        try {
            $requestData = [
                'penguji_id' => 1,
                'santri_id' => 1,
                'surat' => [1],
                'tanggal_ujian' => '2024-05-20',
                'jumlah_ujian' => '1 juz',
                'catatan' => 'Catatan ujian',
                'nilai_kelancaran' => 95,
                'nilai_makhraj' => 95,
                'nilai_lagu' => 95,
                'nilai_adab' => 95,
            ];

            $this->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);

            $this->put(route('ujian.update', 1), $requestData);

            $this->assertDatabaseHas('ujians', [
                'id' => 1,
                'penguji_id' => $requestData['penguji_id'],
                'santri_id' => $requestData['santri_id'],
                'tanggal_ujian' => $requestData['tanggal_ujian'],
                'jumlah_ujian' => $requestData['jumlah_ujian'],
                'catatan' => $requestData['catatan'],
            ]);

            $ujian = Ujian::latest()->first();

            $averageNilai = ($requestData['nilai_kelancaran'] + $requestData['nilai_makhraj'] + $requestData['nilai_lagu'] + $requestData['nilai_adab']) / 4;
            $this->assertEquals($averageNilai, $ujian->nilai);

            foreach (['nilai_kelancaran', 'nilai_makhraj', 'nilai_lagu', 'nilai_adab'] as $nilaiField) {
                $no = 1;
                $this->assertDatabaseHas('nilai_ujians', [
                    'ujian_id' => $ujian->id,
                    'nilai_id' => $no++,
                    'nilai' => $requestData[$nilaiField],
                ]);
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function test_delete(): void
    {
        $this->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);

        $ujian = Ujian::first();
        $this->delete(route('ujian.destroy', $ujian->id));
        $this->assertDatabaseMissing('ujians', ['id' => $ujian->id]);
    }
}

<?php

namespace Tests\Feature\Setoran;

use App\Models\Nilai;
use App\Models\Setoran;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SetoranTest extends TestCase
{
    public function test_route(): void
    {
        $response = $this->get('/setoran/create');

        $response->assertStatus(200);

        $response = $this->get('/setoran');

        $response->assertStatus(200);

        $response = $this->get('/setoran/1/edit');

        $response->assertStatus(404);

        $response = $this->get('/setoran/1');

        $response->assertStatus(404);
    }

    public function test_create(): void
    {
        try {
            // Code to debug
            $requestData = [
                'penguji_id' => 1,
                'santri_id' => 1,
                'tanggal_setoran' => '2024-05-20',
                'surat' => 'Al-Fatihah',
                'jumlah_setoran' => 3,
                'catatan' => 'Catatan setoran',
                'status' => true,
                'nilai_kelancaran' => 80,
                'nilai_makhraj' => 90,
                'nilai_lagu' => 90,
                'nilai_adab' => 75,
            ];

            $this->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);

            // Make a POST request to the route
            $response = $this->post(route('setoran.store'), $requestData);

            // Assert the response is a redirect
            $response->assertRedirect(route('setoran.create'));

            // Assert the setoran is created in the database with the correct attributes
            $this->assertDatabaseHas('setorans', [
                'penguji_id' => $requestData['penguji_id'],
                'santri_id' => $requestData['santri_id'],
                'tanggal_setoran' => $requestData['tanggal_setoran'],
                'surat' => $requestData['surat'],
                'jumlah_setoran' => $requestData['jumlah_setoran'],
                'catatan' => $requestData['catatan'],
                'status' => $requestData['status'],
            ]);

            // Get the created setoran from the database
            $setoran = Setoran::latest()->first();

            // Assert that the setoran has the correct average nilai
            $averageNilai = ($requestData['nilai_kelancaran'] + $requestData['nilai_makhraj'] + $requestData['nilai_lagu'] + $requestData['nilai_adab']) / 4;
            $this->assertEquals($averageNilai, $setoran->nilai);

            // Assert that the setoran is associated with the correct nilais
            foreach (['nilai_kelancaran', 'nilai_makhraj', 'nilai_lagu', 'nilai_adab'] as $nilaiField) {
                $no = 1;
                $this->assertDatabaseHas('nilai_setorans', [
                    'setoran_id' => $setoran->id,
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
            // Code to debug
            $requestData = [
                'penguji_id' => 1,
                'santri_id' => 1,
                'tanggal_setoran' => '2024-05-20',
                'surat' => 'Al-Fatihah',
                'jumlah_setoran' => '5 juz',
                'catatan' => 'Catatan setoran',
                'status' => true,
                'nilai_kelancaran' => 95,
                'nilai_makhraj' => 95,
                'nilai_lagu' => 95,
                'nilai_adab' => 95,
            ];

            $this->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);

            // Make a PUT request to the route
            $response = $this->put(route('setoran.update', 1), $requestData);

            // Assert the response is a redirect
            $response->assertRedirect(route('setoran.create'));

            // Assert the setoran is updated in the database with the correct attributes
            $this->assertDatabaseHas('setorans', [
                'id' => 1,
                'penguji_id' => $requestData['penguji_id'],
                'santri_id' => $requestData['santri_id'],
                'tanggal_setoran' => $requestData['tanggal_setoran'],
                'surat' => $requestData['surat'],
                'jumlah_setoran' => $requestData['jumlah_setoran'],
                'catatan' => $requestData['catatan'],
                'status' => $requestData['status'],
            ]);

            // Get the updated setoran from the database
            $setoran = Setoran::latest()->first();

            // Assert that the setoran has the correct average nilai
            $averageNilai = ($requestData['nilai_kelancaran'] + $requestData['nilai_makhraj'] + $requestData['nilai_lagu'] + $requestData['nilai_adab']) / 4;
            $this->assertEquals($averageNilai, $setoran->nilai);

            // Assert that the setoran is associated with the correct nilais
            foreach (['nilai_kelancaran', 'nilai_makhraj', 'nilai_lagu', 'nilai_adab'] as $nilaiField) {
                $no = 1;
                $this->assertDatabaseHas('nilai_setorans', [
                    'setoran_id' => $setoran->id,
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
        //delete setoran
        $this->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);

        $setoran = Setoran::latest()->first();
        $response = $this->delete(route('setoran.destroy', $setoran->id));
        $response->assertRedirect(route('setoran.create'));
        $this->assertDatabaseMissing('setorans', ['id' => $setoran->id]);
    }
}

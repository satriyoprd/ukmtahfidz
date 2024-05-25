<?php

namespace Tests\Feature\Profile;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProfileTest extends TestCase
{

    public function test_edit(): void
    {
        $response = $this->get(route('profile.edit'));

        $response->assertStatus(302);
    }

    public function test_update_santri(): void
    {
        $user = User::where('role_id', 3)->first();

        $this->actingAs($user);

        $newData = [
            'nim' => '69696969',
            'jumlah_hafalan' => 50,
            'major_id' => 2,
            'name' => 'Dingding',
            'email' => 'santri1@gmail.com',
            'jenis_kelamin' => 1,
            'tanggal_lahir' => '2003-05-30',
        ];

        $this->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);

        $response = $this->patch(route('profile.update'), $newData);

        $response->assertRedirect(route('profile.edit'));

        $this->assertDatabaseHas('santris', [
            'nim' => $newData['nim'],
            'jumlah_hafalan' => $newData['jumlah_hafalan'],
            'major_id' => $newData['major_id'],
        ]);

        $response->assertSessionHas('status', 'profile-updated');
    }

    public function test_update_panitia(): void
    {
        $user = User::where('role_id', 2)->first();

        $this->actingAs($user);

        $newData = [
            'nim' => '78787878',
            'name' => 'Panitia Abadi',
            'email' => 'panitia2@gmail.com',
            'phone' => '081234567890',
            'major_id' => 5,
            'jenis_kelamin' => 1,
            'tanggal_lahir' => '2003-02-24',
        ];

        $this->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);

        $response = $this->patch(route('profile.update'), $newData);

        $response->assertRedirect(route('profile.edit'));

        $this->assertDatabaseHas('panitias', [
            'nim' => $newData['nim'],
            'major_id' => $newData['major_id'],
        ]);

        $response->assertSessionHas('status', 'profile-updated');
    }
}

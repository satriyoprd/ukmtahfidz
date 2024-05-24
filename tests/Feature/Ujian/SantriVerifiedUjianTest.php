<?php

namespace Tests\Feature\Ujian;

use App\Http\Middleware\VerifyCsrfToken;
use App\Models\SantriVerifiedUjian;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SantriVerifiedUjianTest extends TestCase
{
    public function test_index()
    {
        $response = $this->get(route('santri-verified-ujian.index'));

        $response->assertStatus(200);
    }

    public function test_store(): void
    {
        $this->withoutMiddleware(VerifyCsrfToken::class);

        $user = User::where('role_id', 3)->first();

        $this->actingAs($user);

        $response = $this->post(route('santri-verified-ujian.store'), []);

        $response->assertStatus(302);
    }

    public function test_update()
    {
        $santriVerified = SantriVerifiedUjian::first();

        $this->withoutMiddleware(VerifyCsrfToken::class);

        $response = $this->put(route('santri-verified-ujian.update', $santriVerified->id), [
            'is_verified' => true,
        ]);

        $response->assertStatus(302);

        $this->assertTrue($santriVerified->fresh()->is_verified == 1);
    }
}

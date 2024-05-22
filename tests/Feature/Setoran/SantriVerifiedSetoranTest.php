<?php

namespace Tests\Feature\Setoran;

use App\Http\Middleware\VerifyCsrfToken;
use App\Models\SantriVerifiedSetoran;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SantriVerifiedSetoranTest extends TestCase
{
    public function test_index()
    {
        $response = $this->get(route('santri-verified-setoran.index'));

        $response->assertStatus(200);
    }

    public function test_store(): void
    {
        $this->withoutMiddleware(VerifyCsrfToken::class);

        $user = User::where('role_id', 3)->first();

        $this->actingAs($user);

        $response = $this->post(route('santri-verified-setoran.store'), []);

        $response->assertStatus(200);
    }

    public function test_update()
    {
        $santriVerified = SantriVerifiedSetoran::first();

        $this->withoutMiddleware(VerifyCsrfToken::class);

        $response = $this->put(route('santri-verified-setoran.update', $santriVerified->id), [
            'is_verified' => true,
        ]);

        $response->assertStatus(302);

        $this->assertTrue($santriVerified->fresh()->is_verified == 1);
    }
}

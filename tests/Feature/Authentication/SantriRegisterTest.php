<?php

namespace Tests\Feature\Authentication;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SantriRegisterTest extends TestCase
{
    public function test_example(): void
    {
        $response = $this->get('/santri/register');

        $response->assertStatus(200);
    }

    public function test_santri_registration()
    {
        $data = [
            '_token' => csrf_token(),
            'role_id' => 3,
            'name' => 'santri',
            'email' => 'santri@gmail.com',
            'password' => 'santri123',
            'password_confirmation' => 'santri123',
            'phone' => '081234567890',
            'major_id' => 1,
            'nim' => '3121600044',
        ];

        $this->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);

        $this->post('/santri/register', $data);

        $this->assertDatabaseHas('users', [
            'email' => 'santri@gmail.com',
            'role_id' => 3,
            'name' => 'santri',
            'phone' => '081234567890',
        ]);

        $newestUser = User::latest()->first();

        $this->assertDatabaseHas('santris', [
            'nim' => '3121600044',
            'major_id' => 1,
            'user_id' => $newestUser->id,
        ]);
    }
}

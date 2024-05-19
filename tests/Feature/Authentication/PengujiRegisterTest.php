<?php

namespace Tests\Feature\Authentication;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PengujiRegisterTest extends TestCase
{
    public function test_example(): void
    {
        $response = $this->get('/penguji/register');

        $response->assertStatus(200);
    }

    public function test_penguji_registration()
    {
        $data = [
            'role_id' => 4,
            'name' => 'penguji',
            'email' => 'penguji4@gmail.com',
            'password' => 'penguji123',
            'password_confirmation' => 'penguji123',
            'phone' => '081234567890',
        ];

        $response = $this->post('/penguji/register', $data);

        $response->assertRedirect('/dashboard');

        $this->assertDatabaseHas('users', [
            'email' => 'penguji4@gmail.com',
            'role_id' => 4,
            'name' => 'penguji',
            'phone' => '081234567890',
        ]);

        $newestUser = User::latest()->first();

        $this->assertDatabaseHas('pengujis', [
            'user_id' => $newestUser->id,
        ]);
    }
}


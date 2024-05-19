<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{

    public function run(): void
    {
        Major::create(
            [
                'name' => 'Computer Science',
                'faculty_id' => 1,
            ]
        );
    }
}

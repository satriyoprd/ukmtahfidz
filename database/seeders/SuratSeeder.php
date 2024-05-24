<?php

namespace Database\Seeders;

use App\Models\Surat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $surat = [
            [
                'name' => 'Al-Fatihah'
            ],
            [
                'name' => 'Al-Baqarah'
            ]
        ];

        foreach ($surat as $s) {
            Surat::create($s);
        }
    }
}

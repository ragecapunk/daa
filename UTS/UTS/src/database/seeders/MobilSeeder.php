<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mobil;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mobils = [
            [
                'name' => 'Toyota Avanza',
                'merk' => 'Toyota',
                'status' => 'Tersedia',
            ],
            [
                'name' => 'honda civic',
                'merk' => 'honda',
                'status' => 'Tersedia',
            ],
            [
                'name' => 'Toyota supra',
                'merk' => 'Toyota',
                'status' => 'Tersedia',
            ],
        ];

        foreach ($mobils as $mobil) {
            Mobil::create($mobil);
        }
    }
}

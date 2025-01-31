<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Peminjam;

class PeminjamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $peminjams = [
            [
                'name' => 'Rizky',
                'Mobil yang di pinjam' => 'Toyota Avanza',
                'Tanggal Pinjam' => '2024-11-15',
                'Tanggal Kembali' => '2024-11-17',
                'status' => 'pending',
            ],
            [
                'name' => 'ivan',
                'Mobil yang di pinjam' => 'honda civic',
                'Tanggal Pinjam' => '2024-11-15',
                'Tanggal Kembali' => '2024-11-17',
                'status' => 'pending',
            ],
            [
                'name' => 'marco',
                'Mobil yang di pinjam' => 'Toyota supra',
                'Tanggal Pinjam' => '2024-11-15',
                'Tanggal Kembali' => '2024-11-17',
                'status' => 'pending',
            ],
        ];

        foreach ($peminjams as $peminjam) {
            Peminjam::create($peminjam);
        }
    }
}

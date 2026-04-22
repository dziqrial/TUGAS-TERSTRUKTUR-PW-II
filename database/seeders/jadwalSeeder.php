<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class jadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jadwal = [
            [
                'id' => 1,
                'kode_matkul' => 'MK001',
                'nidn' => '1234567890',
                'kelas' => 'A',
                'hari' => 'Senin',
                'jam' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'kode_matkul' => 'MK002',
                'nidn' => '0987654321',
                'kelas' => 'B',
                'hari' => 'Rabu',
                'jam' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('jadwal')->insert($jadwal);
    }
}

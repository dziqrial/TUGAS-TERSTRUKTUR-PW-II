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
                'nidn' => '0409028007',
                'kelas' => 'B',
                'hari' => 'Senin',
                'jam' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('jadwal')->insert($jadwal);
    }
}

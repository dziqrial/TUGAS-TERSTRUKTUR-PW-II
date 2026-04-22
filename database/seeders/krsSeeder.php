<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class krsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $krs = [
            [
                'npm' => '1234567890',
                'kode_matkul' => 'MK001',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'npm' => '0987654321',
                'kode_matkul' => 'MK002',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('krs')->insert($krs);
    }
}

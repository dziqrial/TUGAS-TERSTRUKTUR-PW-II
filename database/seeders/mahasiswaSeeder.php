<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswa = [
            [
                'npm' => '1234567890',
                'nama' => 'bokir',
                'nidn_dosen' => '1234567890',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'npm' => '0987654321',
                'nama' => 'andika',
                'nidn_dosen' => '0987654321',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('mahasiswa')->insert($mahasiswa);
    }
}

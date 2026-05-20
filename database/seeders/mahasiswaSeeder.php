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
                'npm' => '5520124050',
                'nama' => 'Dziqri Al Ghifar',
                'nidn_dosen' => '0409028007',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('mahasiswa')->insert($mahasiswa);
    }
}

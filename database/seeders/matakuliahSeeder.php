<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class matakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $matakuliah = [
            [
                'kode_matakuliah' => 'MK001',
                'nama_matakuliah' => 'Pemrograman Web',
                'sks' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_matakuliah' => 'MK002',
                'nama_matakuliah' => 'Basis Data',
                'sks' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('matakuliah')->insert($matakuliah);
    }
}

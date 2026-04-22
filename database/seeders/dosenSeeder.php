<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dosen = [
            [
                'nidn' => '1234567890',
                'nama' => 'Dr. bob johnson',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nidn' => '0987654321',
                'nama' => 'Prof. Jane Smith',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('dosen')->insert($dosen);
    }
}

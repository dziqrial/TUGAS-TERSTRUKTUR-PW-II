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
                'nidn' => '0409028007',
                'nama' => 'M Dzikri AM S.T., M.T',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('dosen')->insert($dosen);
    }
}

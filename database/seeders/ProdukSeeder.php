<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $judulProduk = [
                            'Mastering Array PHP: Dari Dasar hingga Mahir',
                            'Belajar Array di PHP untuk Pemula Sampai Pro',
                            'PHP Array Complete Guide: Teknik dan Studi Kasus Nyata',
                            'Rahasia Menguasai Array PHP dalam 1 Hari',
                            'PHP Array Deep Dive: Manipulasi Data Tanpa Ribet',
                            'Bootcamp PHP Array: Logika Data & Algoritma Praktis',
                            'Kupas Tuntas Array PHP: Indexed, Associative, dan Multidimensional',
                            'PHP Array Hacks: Cara Cepat Olah Data Seperti Programmer Pro',
                            'Fundamental Array PHP untuk Web Developer',
                            'Proyek Nyata dengan Array PHP: Dari Teori ke Implementasi'
                        ];
        $data= [
            'nama_produk' => $faker->unique()->randomElement($judulProduk),
            'harga' => $faker->numberBetween(20000,50000),
        	'supplier_id' => DB::table('kategori')->inRandomOrder()->value('id'),
            'created_at'=> now(),
            'updated_at' => now()
        ];

        DB::table('produk')->insert($data);
    }
}

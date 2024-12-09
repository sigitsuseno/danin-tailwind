<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Danin;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            ['nama' => 'Slide Depan', 'slug' => 'slide-depan', 'gambar' => 'default.png', 'posisi' => 'depan'],
            ['nama' => 'home', 'slug' => 'home', 'gambar' => 'default.png', 'posisi' => 'menu'],
            ['nama' => 'Pie Susu', 'slug' => 'pie-susu', 'gambar' => 'default.png', 'posisi' => 'menu'],
            ['nama' => 'Spesial', 'slug' => 'spesial', 'gambar' => 'default.png', 'posisi' => 'menu'],
            ['nama' => 'Produk', 'slug' => 'produk', 'gambar' => 'default.png', 'posisi' => 'menu'],
            ['nama' => 'Acara', 'slug' => 'Acara', 'gambar' => 'default.png', 'posisi' => 'menu'],
            ['nama' => 'Danin Store', 'slug' => 'danin-store', 'gambar' => 'default.png', 'posisi' => 'menu'],
            ['nama' => 'Toko Rekanan', 'slug' => 'toko-rekanan', 'gambar' => 'default.png', 'posisi' => 'menu'],
        ];

        foreach ($pages as $page) {
            Danin::create([
                'nama' => $page['nama'],
                'slug' => $page['slug'],
                'gambar' => $page['gambar'],
                'kode' => '',
                'informasi' => '',
                'posisi' => $page['posisi'],
                'danin_id' => null,
                'idnya' => null,
            ]);
        }
    }
}





// namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;

// class PageSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      */
//     public function run(): void
//     {
//         DB::table('danins')->insert([
//             'nama' => 'home',
//             'slug' => 'home',
//             'gambar' => '',
//             'kode' => '',
//             'informasi' => '',
//             'posisi' => 'menu',
//             'danin_id' => '',
//             'idnya' => '',
//         ]);
//         DB::table('danins')->insert([
//             'nama' => 'Pie Susu',
//             'slug' => 'pie-susu',
//             'gambar' => '',
//             'kode' => '',
//             'informasi' => '',
//             'posisi' => 'menu',
//             'danin_id' => '',
//             'idnya' => '',
//         ]);
//         DB::table('danins')->insert([
//             'nama' => 'Spesial',
//             'slug' => 'spesial',
//             'gambar' => '',
//             'kode' => '',
//             'informasi' => '',
//             'posisi' => 'menu',
//             'danin_id' => '',
//             'idnya' => '',
//         ]);
//         DB::table('danins')->insert([
//             'nama' => 'Produk',
//             'slug' => 'produk',
//             'gambar' => '',
//             'kode' => '',
//             'informasi' => '',
//             'posisi' => 'menu',
//             'danin_id' => '',
//             'idnya' => '',
//         ]);
//         DB::table('danins')->insert([
//             'nama' => 'Jajanan',
//             'slug' => 'jananan',
//             'gambar' => '',
//             'kode' => '',
//             'informasi' => '',
//             'posisi' => 'menu',
//             'danin_id' => '',
//             'idnya' => '',
//         ]);
//         DB::table('danins')->insert([
//             'nama' => 'Danin Store',
//             'slug' => 'danin-store',
//             'gambar' => '',
//             'kode' => '',
//             'informasi' => '',
//             'posisi' => 'menu',
//             'danin_id' => '',
//             'idnya' => '',
//         ]);
//         DB::table('danins')->insert([
//             'nama' => 'Toko Rekanan',
//             'slug' => 'toko-rekanan',
//             'gambar' => '',
//             'kode' => '',
//             'informasi' => '',
//             'posisi' => 'menu',
//             'danin_id' => '',
//             'idnya' => '',
//         ]);
//     }
// }

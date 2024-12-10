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
            ['nama' => 'home', 'slug' => 'home', 'gambar' => 'default.png', 'posisi' => 'menu', 'danin_id' => null],
            ['nama' => 'Pie Susu Danin', 'slug' => 'pie-susu', 'gambar' => 'default.png', 'posisi' => 'menu'],
            ['nama' => 'Spesial', 'slug' => 'spesial', 'gambar' => 'default.png', 'posisi' => 'menu'],
            ['nama' => 'Produk', 'slug' => 'produk', 'gambar' => 'default.png', 'posisi' => 'menu', 'kode' => 'Daftar Produk Danin'],
            ['nama' => 'Acara', 'slug' => 'acara', 'gambar' => 'default.png', 'posisi' => 'menu'],
            ['nama' => 'Danin Store', 'slug' => 'danin-store', 'gambar' => 'default.png', 'posisi' => 'menu'],
            ['nama' => 'Toko Rekanan', 'slug' => 'toko-rekanan', 'gambar' => 'default.png', 'posisi' => 'menu'],
            ['nama' => 'About Us', 'slug' => 'about-us', 'gambar' => 'default.png', 'posisi' => 'sub', 'kode' => 'link_case_kiri', 'danin_id' => 1],
            ['nama' => 'Location', 'slug' => 'lokasi', 'gambar' => 'default.png', 'posisi' => 'sub', 'kode' => 'link_case_kanan', 'danin_id' => 1],
            ['nama' => 'Find Our Product', 'slug' => 'find-our-product', 'gambar' => 'default.png', 'posisi' => 'sub', 'kode' => 'link_case_kiri', 'danin_id' => 1],
        ];

        foreach ($pages as $page) {
            Danin::create([
                'nama' => $page['nama'] ?? "",
                'slug' => $page['slug'] ?? "",
                'gambar' => $page['gambar'] ?? "",
                'kode' => $page['kode'] ?? "",
                'informasi' => $page['informasi'] ?? '',
                'posisi' => $page['posisi'] ?? "",
                'danin_id' => $page['danin_id'] ?? null,
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

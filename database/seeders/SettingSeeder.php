<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            'logo' => 'logo-leter.png',
            'fav_icon' => 'default.png',
            'nama_web' => 'Pie Susu Danin',
            'no_hp' => '6282225403629',
            'alamat' => 'Alamat :
Jl. Munasari No.mor 26, RT.1/RW.6, Pakintelan, Kec. Gn. Pati, Kota Semarang, Jawa Tengah 50227',
            'id_fb' => 'https://www.facebook.com/piesusu.darin',
            'id_ig' => 'https://www.instagram.com/piesusudanin/',
            'id_yt' => 'https://www.youtube.com/watch?v=oIEm8bJP0LE',
            'id_tiktok' => 'logo',
            'id_shopee' => 'logo',
            'id_tokped' => 'logo',
            'medsos_1' => '',
            'medsos_2' => '',
            'medsos_3' => '',
            'medsos_4' => '',
            'medsos_5' => '',
            'medsos_6' => '',
            'medsos_7' => '',
            'medsos_8' => '',
            'medsos_9' => '',
            'medsos_10' => '',
        ]);
    }
}

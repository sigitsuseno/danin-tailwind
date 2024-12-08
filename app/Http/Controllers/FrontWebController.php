<?php

namespace App\Http\Controllers;

use App\Models\Danin;
use Illuminate\Http\Request;

class FrontWebController extends Controller
{
    public function slideDepan()
    {
        return view('depan');
    }
    public function beranda()
    {
        return view('welcome');
    }
    public function pages()
    {
        return view('welcome', [
            'halaman_page' => Danin::with('daninSubs', 'images')->orderBy('id', 'desc')->get()
        ]);
    }
    public function page($slug)
    {
        return view('livewire.website.page-single');
    }

    public function produks()
    {
        return view('livewire.website.produk-daftar');
    }
    public function produk()
    {
        return view('livewire.website.produk-single');
    }
}

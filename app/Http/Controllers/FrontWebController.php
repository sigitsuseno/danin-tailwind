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
        return view('frontweb.page-single', [
            'single' => Danin::where('slug', $slug)->first()
        ]);
    }

    public function produks()
    {
        return view('frontweb.produk-daftar');
    }
    public function produk($slug)
    {
        return view('frontweb.produk-single', [
            'single' => Danin::where('slug', $slug)->first()
        ]);
    }
    public function beritas()
    {
        return view('frontweb.berita');
    }
    public function berita($slug)
    {
        return view('frontweb.berita-single', [
            'single' => Danin::where('slug', $slug)->first()
        ]);
    }
}

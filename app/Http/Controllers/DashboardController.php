<?php

namespace App\Http\Controllers;

use App\Models\Danin;
use App\Models\ImageGalery;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function pages()
    {
        return view('admin.pages.pages');
    }
    public function pagesComp()
    {
        return view('admin.pages.pages-komponen', [
            'pageComp' => Danin::orderBy('id', 'desc')->get(),

        ]);
    }
    public function pageByid($id)
    {

        return view('admin.pages.pages');
    }
    public function compByid($id)
    {
        return view('admin.pages.pages-komponen_id', [
            'dari_danin' => Danin::with('images')->where('id', $id)->first(),

        ]);
    }
    public function tampilan()
    {
        return view('admin.tampilan');
    }
    public function setting()
    {
        return view('admin.setting');
    }

    public function settingLayout()
    {
        return view('admin.tampilan_layout');
    }
}

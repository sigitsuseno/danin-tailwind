<?php

namespace App\Http\Controllers;

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
        return view('admin.pages');
    }
    public function pagesComp($id)
    {
        return view('admin.pages-kompunen', [
            
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

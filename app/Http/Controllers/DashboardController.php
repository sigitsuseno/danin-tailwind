<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function tampilan()
    {
        return view('admin.tampilan');
    }
    public function setting()
    {
        return view('admin.setting');
    }
    public function media()
    {
        return view('admin.media-galery');
    }
    public function settingLayout()
    {
        return view('admin.tampilan_layout');
    }
}

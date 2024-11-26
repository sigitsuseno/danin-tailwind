<?php

namespace App\Http\Controllers;

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
}

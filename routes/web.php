<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;



Route::get('/register', [RegisterUserController::class, 'create'])->name('create.register')->middleware('guest');
Route::post('/register', [RegisterUserController::class, 'store'])->name('store.register')->middleware('guest');

Route::get('/login', [SessionController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest');
Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('/', [App\Http\Controllers\FrontWebController::class, 'beranda'])->name('beranda');
Route::get('/slide-depan', [App\Http\Controllers\FrontWebController::class, 'slideDepan'])->name('depan');


Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {

    Route::get('/', [App\Http\Controllers\DashboardController::class, 'index']);
    Route::get('/pages', [App\Http\Controllers\DashboardController::class, 'pages'])->name('pages');
    Route::get('/pages/{id}', [App\Http\Controllers\DashboardController::class, 'pagesComp'])->name('pages.comp');
    Route::get('/tampilan', [App\Http\Controllers\DashboardController::class, 'tampilan'])->name('tampilan');
    Route::get('/tampilan/layout', [App\Http\Controllers\DashboardController::class, 'settingLayout'])->name('tampilan.layout');
    Route::get('/setting', [App\Http\Controllers\DashboardController::class, 'setting'])->name('setting');
    Route::get('/media', [App\Http\Controllers\ImgController::class, 'index'])->name('media');
    Route::post('/media', [App\Http\Controllers\ImgController::class, 'store'])->name('media.upload');
    Route::delete('/media/{id}', [App\Http\Controllers\ImgController::class, 'destroy'])->name('media.destroy');

});

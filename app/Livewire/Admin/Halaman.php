<?php

namespace App\Livewire\Admin;

use App\Models\Danin;
use Livewire\Component;

class Halaman extends Component
{
    public 
    $nama,
    $bagian,
    $gambar,
    $link,
    $kode,
    $informasi,
    $aktif,
    $posisi,
    $danin_id;

    public $tema;
    public function render()
    {
        return view('livewire.admin.halaman', [
            'halamans' => Danin::where('bagian', 'page')->latest()->get()
        ]);
    }

    public function mount()
    {
        $this->tema = [
            'wrapper' => '    <div class="body_wrapper">
        <header class="header">
            Header
        </header>
        <main class="main">
            Main
        </main>
        <aside class="sidebar">
            <div class="sidebar_wrapper">
                sidebar
            </div>
        </aside>
        <footer class="footer">
            footer
        </footer>
    </div>
',
            'header' => 'ini isi header'
        ];
    }
}

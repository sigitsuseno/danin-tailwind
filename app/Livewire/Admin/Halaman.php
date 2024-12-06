<?php

namespace App\Livewire\Admin;

use App\Posisi;
use App\Models\Danin;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Halaman extends Component
{
    use WithFileUploads;

    public 
    $bagian,
    $id_danin,
    $idnya,
    $link,

    $gambar_baru,
    $kode,
    $informasi,
    $aktif,
    $danin_id,
    $posisis;

    #[Rule('required', message: 'Masukkan Gambar')]
    #[Rule('image', message: 'File Harus Gambar')]
    #[Rule('max:2048', message: 'Ukuran File Maksimal 2MB')]
    public $gambar;

    //title
    #[Rule('required', message: 'Masukkan nama halaman')]
    #[Rule('unique:danins,nama', message: 'Nama sudah dipakai')]
    public $nama;


    //title
    #[Rule('required', message: 'Posisi harus di pilih')]
    public $posisi;

    public $handle = 'list-page';

    public $handle_sub = '';

    public $step = 'create';
    public function render()
    {

        return view('livewire.admin.halaman', [
            'halamans' => Danin::whereNull('danin_id')->orderBy('id', 'desc')->get(),
            'hal_sub' => Danin::where('posisi', 'sub')->orderBy('id', 'desc')->get(),
        ]);
    }

    public function resetBt()
    {
        $this->nama = '';
        $this->nama = '';
        $this->gambar = '';
        $this->gambar_baru = '';
        $this->link = 'http://';
        $this->kode = '';
        $this->informasi = '';
        $this->aktif = false;
        $this->posisi = '';
        $this->danin_id = '';
        $this->idnya = '';
    }
    public function menuOpen($slug)
    {
        if ($this->handle_sub == 'main') {
            $this->handle_sub = $slug;
        } elseif ($this->handle_sub == $slug) {
            $this->handle_sub = 'main';
        }
    }
    public function tutupModal()
    {
        $this->handle = 'list-page';
    }
    public function mount()
    {
        $this->posisis = Posisi::cases();
    }

    public function handleButton($menu)
    {
        $this->handle = $menu ;
    }

    public function create()
    {

        $this->validate();
    
        // Handle file upload

        $this->gambar->storeAs('image/', $this->gambar->hashName());
    
        // Create the Danin record
        Danin::create([
            'nama' => $this->nama,
            'slug' => Str::slug($this->nama),
            'gambar' => $this->gambar->hashName(),
            'link' => $this->link != null ? $this->link : "",
            'kode' => $this->kode,
            'informasi' => $this->informasi,
            'aktif' => false,
            'posisi' => $this->posisi,
            'danin_id' => $this->danin_id,
            // 'idnya' => $this->idnya != null ? $this->idnya : "",
        ]);
    
        // Redirect or return a response
        $this->resetBt();
        return redirect()->route('pages')->with('success', 'Danin berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $this->resetBt();
        $this->step = 'edit';
        $this->handle_sub = 'main';

        
        $danin = Danin::find($id);

        $this->id_danin = $danin->id;
        $this->nama = $danin->nama;
        $this->gambar = $danin->gambar;
        $this->link = 'http://';
        $this->kode = $danin->kode;
        $this->informasi = $danin->informasi;
        $this->aktif = false;
        $this->posisi = $danin->posisi;
        $this->danin_id = $danin->danin_id;
        $this->idnya = $danin->idnya;

    }

    
    public function update()
    {
        // $this->validate();
    
        // Handle file upload
        $hal_new = Danin::find($this->danin_id);
        if ($this->gambar_baru) {
            $this->gambar_baru->storeAs('image/', $this->gambar_baru->hashName());
            Storage::delete('storage/image/'. $this->gambar_baru);

        }

        // Create the Danin record
        $hal_new->update([
            'nama' => $this->nama,
            'slug' => Str::slug($this->nama),
            'gambar' => $this->gambar_baru ? $this->gambar_baru : $this->gambar,
            'link' => $this->link != null ? $this->link : "",
            'kode' => $this->kode,
            'informasi' => $this->informasi,
            'aktif' => false,
            'posisi' => $this->posisi,
            'danin_id' => $this->danin_id,
            // 'idnya' => $this->idnya != null ? $this->idnya : "",
        ]);


    }
    
    public function delete()
    {
        //
    }



}

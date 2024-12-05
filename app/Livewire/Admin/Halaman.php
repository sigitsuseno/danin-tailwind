<?php

namespace App\Livewire\Admin;

use App\Posisi;
use App\Models\Danin;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;

class Halaman extends Component
{
    use WithFileUploads;

    public 
    $bagian,
    $id_danin,
    $idnya,
    $link,
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

    public $handle_sub = 'main';
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
        $this->link = '';
        $this->kode = '';
        $this->informasi = '';
        $this->aktif = '';
        $this->posisi = '';
        $this->danin_id = '';
        $this->idnya = '';
    }
    public function menuOpen()
    {
        if ($this->handle_sub == 'main') {
            $this->handle_sub = 'bukabu';
        } elseif ($this->handle_sub == 'bukabu') {
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
            'link' => $this->link,
            'kode' => $this->kode,
            'informasi' => $this->informasi,
            'aktif' => $this->aktif,
            'posisi' => $this->posisi,
            'danin_id' => $this->danin_id ? $this->danin_id : '',
            'idnya' => $this->idnya,
        ]);
    
        // Redirect or return a response
        $this->resetBt();
        return redirect()->route('pages')->with('success', 'Danin berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $this->resetBt();
        
        $danin = Danin::find($id);

        $this->id_danin = $danin->id;
        $this->nama = $danin->nama;
        $this->gambar = $danin->gambar;
        $this->link = $danin->link;
        $this->kode = $danin->kode;
        $this->informasi = $danin->informasi;
        $this->aktif = $danin->aktif;
        $this->posisi = $danin->posisi;
        $this->danin_id = $danin->danin_id;
        $this->idnya = $danin->idnya;

        $this->handle = 'edit';
    }

    
    public function update()
    {
        //
    }
    
    public function delete()
    {
        //
    }



}

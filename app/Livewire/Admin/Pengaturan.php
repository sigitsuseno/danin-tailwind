<?php

namespace App\Livewire\Admin;

use App\Models\Setting;
use Livewire\Component;
use Livewire\WithFileUploads;


class Pengaturan extends Component
{
    use WithFileUploads;
    public $logox;
    public $fav_iconx;
    public $logo;
    public $fav_icon;
    public $nama_web;
    public $no_hp;
    public $alamat;
    public $id_fb;
    public $id_ig;
    public $id_yt;
    public $id_tiktok;
    public $id_shopee;
    public $id_tokped;
    public $medsos_1;
    public $medsos_2;
    public $medsos_3;
    public $medsos_4;
    public $medsos_5;
    public $medsos_6;
    public $medsos_7;
    public $medsos_8;
    public $medsos_9;
    public $medsos_10;

    public $mauEdit = 'readOnly';
    public function render()
    {

        return view('livewire.admin.pengaturan', [
            'settings' => Setting::orderBy('id', 'asc')->first()
        ]);
    }

    public function mount()
    {

            $sett = Setting::orderBy('id', 'asc')->first();
            if (!is_null($sett)){

               $this->logox = $sett->logo;
               $this->fav_iconx = $sett->fav_icon;
               $this->nama_web = $sett->nama_web;
               $this->no_hp = $sett->no_hp;
               $this->alamat = $sett->alamat;
               $this->id_fb = $sett->id_fb;
               $this->id_ig = $sett->id_ig;
               $this->id_yt = $sett->id_yt;
               $this->id_tiktok = $sett->id_tiktok;
               $this->id_shopee = $sett->id_shopee;
               $this->id_tokped = $sett->id_tokped;
               $this->medsos_1 = $sett->medsos_1;
               $this->medsos_2 = $sett->medsos_2;
               $this->medsos_3 = $sett->medsos_3;
               $this->medsos_4 = $sett->medsos_4;
               $this->medsos_5 = $sett->medsos_5;
               $this->medsos_6 = $sett->medsos_6;
               $this->medsos_7 = $sett->medsos_7;
               $this->medsos_8 = $sett->medsos_8;
               $this->medsos_9 = $sett->medsos_9;
               $this->medsos_10 = $sett->medsos_10;
            }

    }

    public function edit()
    {
        // $this->mauEdit = 'edit';
        $this->mauEdit = $this->mauEdit == 'readOnly' ? 'edit' : 'readOnly';
    }
    public function setPengaturan()
    {
        $sett = Setting::find(1);
        if ($sett == null) {
            $logonya = $this->logo->store('image');
            $favnya = $this->fav_icon->store('image');
        Setting::Create([
            'logo' => $this->logo ? $logonya : "",
            'fav_icon' => $this->fav_icon ? $favnya : '',
            'nama_web' => $this->nama_web,
            'no_hp' => $this->no_hp,
            'alamat' => $this->alamat,
            'id_fb' => $this->id_fb,
            'id_ig' => $this->id_ig,
            'id_yt' => $this->id_yt,
            'id_tiktok' => $this->id_tiktok,
            'id_shopee' => $this->id_shopee,
            'id_tokped' => $this->id_tokped,
            'medsos_1' => $this->medsos_1,
            'medsos_2' => $this->medsos_2,
            'medsos_3' => $this->medsos_3,
            'medsos_4' => $this->medsos_4,
            'medsos_5' => $this->medsos_5,
            'medsos_6' => $this->medsos_6,
            'medsos_7' => $this->medsos_7,
            'medsos_8' => $this->medsos_8,
            'medsos_9' => $this->medsos_9,
            'medsos_10' => $this->medsos_10,
            ]);
        }else{
            if ($this->logo) {
                $logonya = $this->logo->store('image');
            }
            if ($this->fav_icon) {
                $favnya = $this->fav_icon->store('image');
            }
            $sett->update([
                'logo' => $this->logo ? $logonya : $this->logox,
                'fav_icon' => $this->fav_icon ? $favnya : $this->fav_iconx,
                'nama_web' => $this->nama_web,
                'no_hp' => $this->no_hp,
                'alamat' => $this->alamat,
                'id_fb' => $this->id_fb,
                'id_ig' => $this->id_ig,
                'id_yt' => $this->id_yt,
                'id_tiktok' => $this->id_tiktok,
                'id_shopee' => $this->id_shopee,
                'id_tokped' => $this->id_tokped,
                'medsos_1' => $this->medsos_1,
                'medsos_2' => $this->medsos_2,
                'medsos_3' => $this->medsos_3,
                'medsos_4' => $this->medsos_4,
                'medsos_5' => $this->medsos_5,
                'medsos_6' => $this->medsos_6,
                'medsos_7' => $this->medsos_7,
                'medsos_8' => $this->medsos_8,
                'medsos_9' => $this->medsos_9,
                'medsos_10' => $this->medsos_10,
            ]);
        }
        $this->mauEdit = 'readOnly';
    }
}

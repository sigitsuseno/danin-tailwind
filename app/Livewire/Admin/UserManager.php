<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;

class UserManager extends Component
{
    #[Rule('required', message: 'Nama harus di isi')]
    #[Rule('min:5', message: 'Minimal 5 karakter ')]
    public $name;

    #[Rule('required', message: 'Username harus di isi')]
    #[Rule('unique:users,username', message: 'Username tidak boleh sama')]
    #[Rule('min:5', message: 'Minimal 5 karakter ')]
    public $username;

    #[Rule('required', message: 'Email harus di isi')]
    #[Rule('email', message: 'Harus di isi email ')]
    public $email;

    #[Rule('required', message: 'Password harus di isi')]
    #[Rule('min:5', message: 'Minimal 5 karakter ')]
    public $password;
    public $level;
    public $id_user;

    public $tombol = 'default';
    public $buat = '';
    public function render()
    {
        return view('livewire.admin.user-manager', [
            'users' => User::orderBy('id', 'asc')->get()
        ]);
    }

    public function handleTombol($fungsi)
    {
        $this->tombol = $fungsi;
    }

    public function resetField()
    {
        $this->name = "";
        $this->username = "";
        $this->email = "";
        $this->password = "";
        $this->level = "";
    }
    public function cansel()
    {
        $this->buat = '';
        $this->tombol = 'default';
        $this->resetField();
        
    }
    public function create()
    {
        $this->buat = 'buat_user';
        $this->tombol = 'default';
        $this->resetField();

    }
    public function save()
    {

        $this->validate();

        User::create([
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        $this->resetField();
        return redirect()->route('userMan');
    }
    public function edit($id)
    {

        $this->tombol = 'edit_user';
        $this->buat = '';
        $this->resetField();

        $user = User::find($id);

        $this->id_user = $user->id;
        $this->name = $user->name;
        $this->username = $user->username;
        $this->email = $user->email;
        $this->password = $user->password;
        $this->level = $user->level;
        
    }

    public function update()
    {
        $user = User::find($this->id_user); 
        
        $data = [ 
            'name' => $this->name, 
            'username' => $this->username, 
            'email' => $this->email, 
            'level' => $this->level, 
        ]; 
        
        if ($this->password) 
        { 
            $data['password'] = bcrypt($this->password); 
        } 
        
        
        $user->update($data);;

        $this->resetField();
        return redirect()->route('userMan');
    }

    public function delete($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect()->route('userMan');
    }
}

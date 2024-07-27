<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Clicker extends Component
{
    public $name = "";
    public $email = "";
    public $password = "";
    public function createNewUser()
    {
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);
    }

    public function render()
    {
        $title  = "Test";
        $users = User::all();

        return view('livewire.clicker', [
            'users' => $users
        ]);
    }
}

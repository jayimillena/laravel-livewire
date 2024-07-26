<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Clicker extends Component
{
    public function createNewUser()
    {
        User::create([
            'name' => "Test user 2",
            'email' => "test2@gmail.com",
            'password' => "password",
        ]);
    }

    public function render()
    {
        $title  = "Test";
        $users = User::all();

        return view('livewire.clicker', [
            'title' => $title,
            'users' => $users
        ]);
    }
}

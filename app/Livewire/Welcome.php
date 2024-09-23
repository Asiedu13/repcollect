<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Welcome extends Component
{
    //     return view('welcome')->with('username', auth()->id() ? User::where('id', auth()->id())->value('email') : 'Nobody man');
    public $username;

    public function mount() 
    {
        $this->username = auth()->id() ? User::where('id', auth()->id())->value('email') : 'Nobody man';
    }

    public function render()
    {
        return view('livewire.welcome')->layout('components.layouts.app',
         [
            'currentUser' => User::where('id', auth()->id())->get()
         ]
    );
    }
}

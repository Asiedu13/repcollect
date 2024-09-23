<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\User;

class Welcome extends Component
{
    public $username;

    public function mount() 
    {
        $this->username = auth()->id() ? User::where('id', auth()->id())->value('email') : 'Nobody man';
    }

    #[Title('RepCollect | Home')]
    public function render()
    {
        return view('livewire.welcome')->layout('components.layouts.app',
         [
            'currentUser' => User::where('id', auth()->id())->get()
         ]
    );
    }
}

<?php

namespace App\Livewire;

use Exception;
use App\Models\User;
use App\Models\Saying;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('RepCollect | Dashboard')]
class Dashboard extends Component
{
    public $ongoing;
    public $completed;
    public $paused;

    public $saying;

    public $method = '';

    public function mount() 
    {
        try {
            $this->saying = Saying::findOrFail(rand(1, Saying::all()->count()));
            $this->ongoing = User::find(auth()->id())->foci->where('status', 'ongoing');
            $this->completed = User::find(auth()->id())->foci->where('status', 'completed');
            $this->paused = User::find(auth()->id())->foci->where('status', 'paused');
        }catch(Exception $e) {
        //  $this->saying = 'Nothing to say about money today';   
        }
    }

    public function render()
    {   
        return view('livewire.dashboard')->with('user', User::where('id', auth()->id())->get())->layout('components.layouts.app', ['currentUser' => User::where('id', auth()->id())->get()]);
    }
}
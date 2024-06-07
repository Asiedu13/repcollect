<?php

namespace App\Livewire;

use Exception;
use App\Models\User;
use App\Models\Saying;
use Livewire\Component;

class Dashboard extends Component
{
    public $ongoing;
    public $completed;
    public $paused;

    public $saying;

    public $method = '';

    public function getOngoing()
    {
        try {
            
        }catch(Exception $e) {

        }
    }

    public function mount() 
    {
        try {
            $this->saying = Saying::findOrFail(rand(1, Saying::all()->count()));

        }catch(Exception $e) {
         $this->saying = 'Nothing to say about money today';   
        }
    }

    public function render()
    {
        // dd(auth()->id());
        // dd(User::find(auth()->id()));
        
        return view('livewire.dashboard')->with('user', User::where('id', auth()->id())->get(), );
    }
}
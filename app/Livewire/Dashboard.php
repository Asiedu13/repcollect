<?php

namespace App\Livewire;

use Exception;
use App\Models\User;
use App\Models\focus;
use App\Models\Saying;
use Livewire\Component;

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
            $this->ongoing = focus::with(['paymentLink'])->where('status', 'ongoing')->get();
            $this->completed = focus::where('status', 'completed')->get();
            $this->paused = focus::where('status', 'paused')->get();


        }catch(Exception $e) {
        //  $this->saying = 'Nothing to say about money today';   
        }
    }

    public function render()
    {   
        return view('livewire.dashboard')->with('user', User::where('id', auth()->id())->get(), );
    }
}
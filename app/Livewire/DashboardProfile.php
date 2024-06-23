<?php

namespace App\Livewire;

use Exception;
use App\Models\User;
use App\Models\Saying;
use Livewire\Component;

class DashboardProfile extends Component
{
    public $saying;

    public $view = 'profile';
    
    public function mount() 
    {
        try {
            $this->saying = Saying::findOrFail(rand(1, Saying::all()->count()));
            // dd($this->saying);

        }catch(Exception $e) {
        //  $this->saying = 'Nothing to say about money today';   
        }
    }

    public function render()
    {
        return view('livewire.dashboard-profile')->layout('components.layouts.dashboard-layout',
         [
            'user' => User::where('id', auth()->id())->get(), 
            'saying' => $this->saying,
            'view' => $this->view,
        ]);
    }
}

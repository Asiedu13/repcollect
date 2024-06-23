<?php

namespace App\Livewire;

use Exception;
use App\Models\User;
use App\Models\Saying;
use Livewire\Component;

class DashboardFaq extends Component
{
    public $saying;

    public $view = 'faq';
    
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
        return view('livewire.dashboard-faq')->layout('components.layouts.dashboard-layout',
         [
            'user' => User::where('id', auth()->id())->get(), 
            'saying' => $this->saying,
            'view' => $this->view,
        ]);;
    }
}

<?php

namespace App\Livewire;

use Exception;
use App\Models\User;
use App\Models\Saying;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;

class DashboardSettings extends Component
{
    public $saying;

    public $view = 'settings';
    #[Validate('regex:/^\+?[0-9]{10,15}$/')]
    public $momo;
    
    public function mount() 
    {
        $user = User::where('id', auth()->id())->get()[0];
        $this->momo = $user->momo_number;
        try {
            $this->saying = Saying::findOrFail(rand(1, Saying::all()->count()));
            // dd($this->saying);

        }catch(Exception $e) {
        //  $this->saying = 'Nothing to say about money today';   
        }
    }

    public function updateUser()
    {
        $this->validate();
        $user = User::where('id', auth()->id())->get()[0];
        $user->momo_number = $this->momo;

        $user->save();
    }

    #[Title('RepCollect | Settings')]
    public function render()
    {
        return view('livewire.dashboard-settings')->layout('components.layouts.dashboard-layout',
         [
            'user' => User::where('id', auth()->id())->get(), 
            'saying' => $this->saying,
            'view' => $this->view,
        ]);
    }
}

<?php

namespace App\Livewire;

use Exception;
use App\Models\User;
use App\Models\Saying;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;

class DashboardProfile extends Component
{
    public $saying;
    public $view = 'profile';

    #[Validate('regex:/^[A-Za-z -]+$/', message: "Invalid name format")]
    public $username;
    #[Validate('email')]
    public $email;
    #[Validate('regex:/^\+?\d{10,15}$/')]
    public $phone;
    #[Validate('regex:/^[a-zA-Z]*$/')]
    public $bio;
    public $country;
    public $currency;
    public $timezone;
    public $language;
    public $selectedFile;
    public function mount() 
    {
        $this->username = User::where('id', auth()->id())->get()->value('name');
        $this->email = User::where('id', auth()->id())->get()->value('email');
        $this->phone = User::where('id', auth()->id())->get()->value('phone');
        $this->bio = User::where('id', auth()->id())->get()->value('bio');
        $this->country = User::where('id', auth()->id())->get()->value('country');

        try {
            $this->saying = Saying::findOrFail(rand(1, Saying::all()->count()));

        }catch(Exception $e) {
            //TODO: add a logger here 
        }
    }
    public function updateUser()
    {
        $this->validate();
        $user = User::where('id', auth()->id())->get()[0];
        $user->name = $this->username;
        $user->bio = $this->bio;
        $user->email = $this->email;
        $user->phone = $this->phone;
        $user->country = $this->country;
        
        $user->save();
    }
    
    public function delete() 
    {
        // //deleting shouldn't be that easy
        // $user = User::where('id', auth()->id())->get()[0];
        // $user->delete();
        // return redirect()->route('home');
        
    }
    #[Title('RepCollect | Profile')]
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

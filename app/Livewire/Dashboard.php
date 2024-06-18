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
    // Data to display
    public $ongoing;
    public $completed;
    public $paused;

    // One crazy wise saying
    public $saying;

    public $view = 'collections';

    public $completedIcon = <<<'ICON'
        🎉 
    ICON;

     public $pausedIcon = <<<'ICON'
             ⏸️
    ICON;

     public $ongoingIcon = <<<'ICON'
            ☄️
    ICON;

    public function mount() 
    {
        try {
            $this->saying = Saying::findOrFail(rand(1, Saying::all()->count()));
            $this->ongoing = User::find(auth()->id())->foci->where('status', 'ongoing')->reverse();
            $this->completed = User::find(auth()->id())->foci->where('status', 'completed')->reverse();
            $this->paused = User::find(auth()->id())->foci->where('status', 'paused')->reverse();

        }catch(Exception $e) {
        //  $this->saying = 'Nothing to say about money today';   
        }
    }
    public function handleMenuClick($item)
    {
        $this->view = $item;
    }
    public function render()
    {   
        return view('livewire.dashboard')->with('user', User::where('id', auth()->id())->get())->layout('components.layouts.app', ['currentUser' => User::where('id', auth()->id())->get()]);
    }
}
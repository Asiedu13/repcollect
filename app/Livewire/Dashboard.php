<?php

namespace App\Livewire;

use Exception;
use App\Models\User;
use App\Models\Saying;
use Livewire\Component;
use App\Models\Transaction;
use Livewire\Attributes\Title;


#[Title('RepCollect | Collections')]
class Dashboard extends Component
{
    // Data to display
    public $ongoing;
    public $completed;
    public $paused;

    public $transactions;
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
            $this->ongoing = User::find(auth()->id())->focus->where('status', 'ongoing')->reverse();
            
            $this->completed = User::find(auth()->id())->focus->where('status', 'completed')->reverse();
            $this->paused = User::find(auth()->id())->focus->where('status', 'paused')->reverse();
    
            if ($this->ongoing->count() > 0) {
                foreach($this->ongoing as $item) {
                    $item->sum = $item->transactions->sum('amount_paid');
                    $item->payCount = $item->transactions->count();
                }
            }
        
            if ($this->completed->count() > 0) {   
                foreach($this->completed as $item) {
                    $item->sum = $item->transactions->sum('amount_paid');
                    $item->payCount = $item->transactions->count();
                }
            }
            if ($this->paused->count() > 0) {
                foreach($this->paused as $item) {
                    $item->sum = $item->transactions->sum('amount_paid');
                    $item->payCount = $item->transactions->count();
                }
            }

        } catch(Exception $e) {
            // dd('Something');
        }

        try {
            $this->saying = Saying::findOrFail(rand(1, Saying::all()->count()));
            // dd($this->saying);
        } catch(Exception $e) {
            // dd('Saying error');
        }
    }

    public function render()
    {   
        return view('livewire.dashboard')->layout('components.layouts.dashboard-layout',
         [
            'user' => User::where('id', auth()->id())->get(), 
            'saying' => $this->saying,
            'view' => $this->view,
        ]);
    }
}
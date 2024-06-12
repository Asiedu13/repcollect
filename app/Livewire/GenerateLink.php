<?php

namespace App\Livewire;
use Livewire\Component;



class GenerateLink extends Component
{
    public $link;

    public function mount()
    {
        $this->link = request()->segment(3);
    }

    public function render()
    {
        return view('livewire.generate-link');
    }
}

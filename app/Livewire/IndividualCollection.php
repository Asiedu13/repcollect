<?php

namespace App\Livewire;

use Livewire\Component;

class IndividualCollection extends Component
{
    public function render()
    {
        return view('livewire.individual-collection')->layout('components.layouts.admin-collection');
    }
}

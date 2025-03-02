<?php

namespace App\Livewire;

use Livewire\Component;

class PaymentSuccess extends Component
{
    public function render()
    {
        return view('livewire.payment-success')->title('Repcollect | Success')->layout('components.layouts.pay-layout');
    }
}

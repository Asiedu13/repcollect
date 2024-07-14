<?php

namespace App\Livewire;

use App\Models\Link;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Validate;
// use Unicodeveloper\Paystack\Paystack;
use Illuminate\Support\Facades\Redirect;
use Unicodeveloper\Paystack\Facades\Paystack;


class GivePage extends Component
{
    protected $focusId;
    public $focus;
    public $creator;

    #[Validate('required', message: "The name field is required")]
    public $payerName;

    #[Validate('required', message: "The amount field is required")]
    public $payerAmount;

     #[Validate('required', message: "The contact field is required")]
    public $payerContact;


    public function mount() 
    {
        $this->focusId = request()->segment(2);
        $this->focus = Link::where('link', $this->focusId)->first()->focus;
        $this->creator = User::findOrFail($this->focus->user_id);

        // dd($this->creator);
    }

     public function redirectToGateway()
    {
        $this->validate();
        $data = array(
        "amount" => 700 * 100,
        // "reference" => '4g4g5485g8545jg8gj',
        "email" => 'user@mail.com',
        "currency" => "GHS",
        "orderID" => 23456,
    );
        try{
            return paystack()->getAuthorizationUrl($data)->redirectNow();
        }catch(\Exception $e) {
            dd($e);
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }        
    }

    public function render()
    {
        return view('livewire.give-page')->title("RepCollect | " .$this->focus->title)->layout('components.layouts.pay-layout');
    }
} 

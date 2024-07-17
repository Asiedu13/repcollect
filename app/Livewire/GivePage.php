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

    #[Validate("required|email", message: "The email field is required")]
    public $payerEmail;

    public $authorizer;

    public $showModal = false;


    public function mount() 
    {
        $this->focusId = request()->segment(2);
        $this->focus = Link::where('link', $this->focusId)->first()->focus;
        $this->creator = User::findOrFail($this->focus->user_id);

        // dd($this->creator);
    }

    public function toggleModal()
    {
        $this->showModal = !$this->showModal;
    }

     public function redirectToGateway()
    {
        $this->validate();
        $this->showModal = true;
        $url = "https://api.paystack.co/transaction/initialize";

        $fields = [
            'email' => $this->payerEmail,
            'amount' => (string) $this->payerAmount * 100,
            'currency' => "GHS",
            'channels' => ['mobile_money', 'bank', 'qr']
        ];

        $fields_string = http_build_query($fields);

        //open connection
        $ch = curl_init();
  
        //set the url, number of POST vars, POST data
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_POST, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization:  Bearer sk_test_8ab2e89ffe3deadce41ed50134439d6dfa0ecbe1",
        ));
  
        //So that curl_exec returns the contents of the cURL; rather than echoing it
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
  
        //execute post
        $result = curl_exec($ch);
        // echo $result;

        // $err = curl_error($ch);
        curl_close($ch);

        $this->authorizer = json_decode($result);
        return redirect()->away($this->authorizer->data->authorization_url);
    }

    public function render()
    {
        return view('livewire.give-page')->title("RepCollect | " .$this->focus->title)->layout('components.layouts.pay-layout');
    }
} 

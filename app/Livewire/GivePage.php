<?php

namespace App\Livewire;

use App\Models\Link;
use App\Models\Transaction;
use App\Models\User;
use App\Traits\PayStackRequest;
use Livewire\Component;
use Livewire\Attributes\Validate;

class GivePage extends Component
{

    use PayStackRequest;

    protected $focusId;
    protected $authorizer;
    protected $paymentVerified;

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
    public $min;


    public function mount() 
    {
        $this->focusId = request()->segment(2);

        if(! is_null(request()->query('reference'))) {
            // dd(request()->session()->get('currentPayment'));
            $this->focusId = request()->session()->get(key: 'currentPayment');
            $this->verifyPayment(request()->query('reference'));
        }else {
            request()->session()->put('currentPayment', $this->focusId);
        }

        $this->focus = Link::where('link', $this->focusId)->first()->focus;
        $this->creator = User::findOrFail($this->focus->user_id);
        $this->min = $this->focus->cost;


    }

    public function toggleModal()
    {
        $this->showModal = !$this->showModal;
    }

     public function redirectToGateway()
    {
        $this->validate();
        $this->authorizer = $this->PayPOST(
            'transaction/initialize', 
            $this->payerName,
            $this->payerContact,
            "http://localhost:8000/pay/{$this->focusId}",
            (string) $this->payerAmount * 100,
            $this->payerEmail,
         );
        // dd($this->authorizer);

        // Create a transaction (unverified transaction)
        // 
        // ]);
        return redirect()->away($this->authorizer->data->authorization_url);
        // $this->verifyPayment();
    }

    public function verifyPayment($reference)
    {
        $this->paymentVerified = $this->PayGET("transaction/verify/{$reference}");
        if ($this->paymentVerified->data->status ) {
            $newTransaction = Transaction::firstOrNew([
                    'focus_id' => Link::where('link', $this->focusId)->first()->focus->id, 
                    'payer_name' => $this->paymentVerified->data->metadata->username,
                    'payer_contact' => $this->paymentVerified->data->metadata->phone,
                    'email' => $this->paymentVerified->data->customer->email,
                    'amount_paid' => (float) $this->paymentVerified->data->amount / 100,
                    'payment_type' => "momo",
                    'reference' => $this->paymentVerified->data->reference,
                    'currency' => $this->paymentVerified->data->currency,
                    'ip_address' => $this->paymentVerified->data->ip_address,
                    'vendor' => $this->paymentVerified->data->authorization->bank
                ]);
            $newTransaction->save();
            redirect()->route('pay.success', [$this->paymentVerified->data->reference]);
            
        } else {
            // Trhow an error or exception
            abort(403);
        }

    }

    public function render()
    {
        return view('livewire.give-page')->title("RepCollect | " .$this->focus->title)->layout('components.layouts.pay-layout');
    }
} 
